

<!-- Modal Passwword-->
<div class="modal fade" id="myModal" data-bs-backdrop="static" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content p-4">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-center w-100" id="exampleModalToggleLabel" data-section="Modals" data-value="TitMod">INGRESA TU CONTRASEÑA</h1>
      </div>
      <div class="modal-body text-center">
        <img id="logo" class="text-center w-50 my-2" src="img/logo.png" alt="logo-RCC"><br>
        <p id="txtmod1" class="text-center fw-bold my-4" data-section="Modals" data-value="SubTitMod">Ingrese la contraseña que le fue proporcionada.</p>
        <input id="passwordInput" class="w-100 text-center p-1" type="password" placeholder="**********">
        <p id="errorText" class="text-danger my-2" style="display: none;">Lo sentimos, la contraseña no es correcta.</p>
        <a href="https://wa.link/ju6n9w" target="_blank"><p id="olvcontra" class="my-2 text-center text-black m-0 p-p" data-section="Modals" data-value="OlvMod">Olvidé mi contraseña</p></a>
        <a href="https://wa.link/pf0lw7" target="_blank"><p id="nocontra" class="my-2 text-center text-black m-0 p-p" data-section="Modals" data-value="NoContraMod">Aun no tengo una contraseña</p></a>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button id="verificarContrasenaBtn" class="boton text-center" data-section="Modals" data-value="IniMod">Iniciar sesión</button>
      </div>
    </div>
  </div>
</div>
<script>
  // Define las contraseñas correctas
  const contraseñasCorrectas = ["123", "SanJose2024", "RoyalCounty2024"];

  // Función para verificar la contraseña
  function verificarContraseña() {
    const contraseñaIngresada = document.getElementById("passwordInput").value;

    if (contraseñasCorrectas.includes(contraseñaIngresada)) {
      // Cerrar el modal si la contraseña es correcta
      $("#myModal").modal("hide");
    } else {
      // Mostrar mensaje de error si la contraseña es incorrecta
      document.getElementById("errorText").style.display = "block";
    }
  }

  // Agrega un evento click al botón "Iniciar sesión"
  document.getElementById("verificarContrasenaBtn").addEventListener("click", verificarContraseña);
</script>




<script>
    $( document ).ready(function() {
    $('#myModal').modal('toggle')
});
</script>







<!-- Modal Brochure ESPAÑOL-->
<div class="modal fade" id="Brochureesp" tabindex="-1" aria-labelledby="BrochureespLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="BrochureespLabel">Royal County San José Chakan Brochure (Español)</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


        <embed src="documentos/Brochure_Royal_County_SJC_compressed.pdf" type="application/pdf" width="100%" height="450px" />


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="errarl">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Brochure ENGLISH-->
<div class="modal fade" id="Brochureeng" tabindex="-1" aria-labelledby="BrochureespLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="BrochureespLabel">Royal County San José Chakan Brochure (English)</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        

        <embed src="documentos/Brochure Royal County SJC Inglés_compressed.pdf" type="application/pdf" width="100%" height="450px" />


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
