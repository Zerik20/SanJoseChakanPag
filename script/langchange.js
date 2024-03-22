const textsToChange = document.querySelectorAll("[data-section]");

// Función para obtener el idioma seleccionado del almacenamiento local
function getSelectedLanguageFromLocalStorage() {
    return localStorage.getItem("selectedLanguage");
}

const changeLanguage = async (language) => {
    const requestJson = await fetch(`./idiomas/${language}.json`);
    const texts = await requestJson.json();

    console.log('Textos seleccionados para cambiar:', texts);

    textsToChange.forEach(textElement => {
        const sectionKey = textElement.dataset.section;
        const originalText = textElement.dataset.value;

        console.log("sectionKey:", sectionKey); // Verificar que se esté leyendo correctamente la sección

        if (texts[sectionKey]) {
            const newText = texts[sectionKey][originalText] || ''; // Buscar el nuevo texto en la sección correspondiente del objeto JSON
            if (newText) {
                console.log(`Cambiando texto para la sección "${sectionKey}" a: ${newText}`);
                textElement.textContent = newText; // Establecer el nuevo texto
            }
        } else {
            console.warn(`Sección "${sectionKey}" no encontrada en el archivo JSON.`);
        }
    });
};

// Función para guardar el idioma seleccionado en el almacenamiento local
function saveSelectedLanguageToLocalStorage(language) {
    localStorage.setItem("selectedLanguage", language);
}

// Listener de cambio de idioma
const LangOptElement = document.getElementById("LangOptM");
const LangOptElementDesktop = document.getElementById("LangOp");

LangOptElement.addEventListener("change", (e) => {
    const selectedLanguage = LangOptElement.querySelector('input[name="idioma"]:checked').getAttribute('data-language');
    saveSelectedLanguageToLocalStorage(selectedLanguage); // Guardar el idioma seleccionado en el almacenamiento local
    changeLanguage(selectedLanguage);
});

LangOptElementDesktop.addEventListener("change", (e) => {
    const selectedLanguage = e.target.options[e.target.selectedIndex].getAttribute('data-language');
    saveSelectedLanguageToLocalStorage(selectedLanguage); // Guardar el idioma seleccionado en el almacenamiento local
    changeLanguage(selectedLanguage);
});

// Obtener el idioma seleccionado del almacenamiento local y cambiar los textos
const selectedLanguage = getSelectedLanguageFromLocalStorage();
if (selectedLanguage) {
    changeLanguage(selectedLanguage);
}
