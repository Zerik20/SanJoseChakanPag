<link rel="stylesheet" href="style.css">
<div id="header" class="">
    <div class="navscroll fixed-top">
        <div class="row w-100 p-0 m-0">
            <div id="col-menu-1" class="col-md-5 text-center text-white">
                <ul class="nav me-auto">
                    <li class="nav-item menu"><a id="inicio" href="index.php" class="nav-link link-body-emphasis px-2 text-white active" aria-current="page" data-section="Header" data-value="Inicio"style="font-size: 12px;">INICIO</a></li>
                    <!--li class="nav-item menu"><a id="boletin" href="boletin.php" class="nav-link link-body-emphasis px-2 text-white">BOLETIN</a></!--li-->
                    <li class="nav-item menu"><a id="acerca" href="acerca-de.php" class="nav-link link-body-emphasis px-2 text-white" data-section="Header" data-value="AcercaDe"style="font-size: 12px;">ACERCA DE</a></li>
                    <li class="nav-item menu"><a id="productos" href="productos.php" class="nav-link link-body-emphasis px-2 text-white" data-section="Header" data-value="Productos"style="font-size: 12px;">PRODUCTOS</a></li>
                    <li class="nav-item menu"><a id="legal" href="cotizador.php" class="nav-link link-body-emphasis px-2 text-white"  data-section="Header" data-value="AvisoLegal"style="font-size: 12px;">COTIZADOR</a></li>
                </ul>
                <ul class="nav me-auto" style="border: none;">
                    <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2 text-white" data-bs-trigger="hover focus"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2 text-white" data-bs-trigger="hover focus"><i class="fab fa-instagram"></i></a></li>
                    <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2 text-white" data-bs-trigger="hover focus"><i class="fab fa-tiktok"></i></a></li>
                    <li class="nav-item"><a href="mailto:info@sanjosechakan.com" class="nav-link link-body-emphasis px-2 text-white" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-trigger="hover focus" data-bs-content="info@sanjosechakan.com"><i class="fas fa-envelope"></i></a></li>
                </ul>
            </div>
            <div id="col-menu-2" class="col-md-2 pt-2 text-center text-white">
                <a href="index.php"><img id="logo" src="img/logoblanco.svg" alt="logo-RCC"></a>
            </div>
            <div id="col-menu-1" class="col-md-5 text-center text-white" >
                <ul class="nav justify-content-end">
                    <li class="nav-item menu"><a id="descyrel" href="bienestar-y-relajacion.php" class="nav-link link-body-emphasis px-0 text-white active" aria-current="page" data-section="Header" data-value="BienestaryRelajacion" style="font-size: 12px;">BIENESTAR Y RELAJACIÓN</a></li>
                    <li class="nav-item menu"><a id="emociones" href="emociones.php" class="nav-link link-body-emphasis px-2 text-white" data-section="Header" data-value="Emociones"style="font-size: 12px;">EMOCIONES</a></li>
                    <li class="nav-item menu"><a id="artcul" href="artes-culinarias.php" class="nav-link link-body-emphasis px-2 text-white" data-section="Header" data-value="ArtesCulinarias"  style="font-size: 10px;">ARTES CULINARIAS</a></li>
                </ul>
                <ul class="nav justify-content-end" style="border: none;">
                    <li class="nav-item"><a href="tel:9997001585" class="nav-link link-body-emphasis px-2 text-white" aria-current="page"><i class="fas fa-phone-alt"></i> +52 (999) 700 15 85</a></li>
                    <li class="nav-item">
                        <div id="language-select">
                            <i class="fas fa-globe"></i>
                            <select id="LangOp">
                                <option data-language="es">Español</option>
                                <option data-language="en">English</option>
                            </select>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<style>
    /* Estilo para el fondo blanco del menú desplegable */
    .offcanvas-body {
        background-color: #ffffff; /* Color blanco */
    }
    .offcanvas-header {
        background-color: #ffffff; /* Color blanco */
    }
    #iniciom {
    color: #96443a !important; /* Cambiar color de texto a #96443a */
    }
    #acercam {
    color: #96443a !important; /* Cambiar color de texto a #96443a */
    }
    #productosm {
    color: #96443a !important; /* Cambiar color de texto a #96443a */
    }
    #legalm {
    color: #96443a !important; /* Cambiar color de texto a #96443a */
    }
    #descyrelm {
    color: #96443a !important; /* Cambiar color de texto a #96443a */
    }
    #emocionesm {
    color: #96443a !important; /* Cambiar color de texto a #96443a */
    }
    #artculm {
    color: #96443a !important; /* Cambiar color de texto a #96443a */
    }
    #numm {
    color: #96443a !important; /* Cambiar color de texto a #96443a */
    }
    #mailm {
    color: #96443a !important; /* Cambiar color de texto a #96443a */
    }
    #Espam {
    color: #96443a !important; /* Cambiar color de texto a #96443a */
    }
    #Inglm {
    color: #96443a !important; /* Cambiar color de texto a #96443a */
    }


    
</style>

<div id="header-movil">
    <div class="">
        <div class="row w-100 p-0 m-0">
            <nav class="navbar navbar-dark w-100 navscroll fixed-top ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php"><img id="logom2" src="img/logoblanco.svg" alt="logo-RCC"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                        <div class="offcanvas-header">
                            <a href="index.php"><img id="logom1" src="img/logoblanco.svg" alt="logo-RCC"></a>
                            <button type="button" class="btn-close btn-close-red" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item mm2 menu"><a id="iniciom" href="index.php" class="nav-link link-body-emphasis px-2 text-white active" aria-current="page" data-section="Header" data-value="Inicio">INICIO</a></li>
                                <!--li class="nav-item mm2 menu"><a id="boletinm" href="boletin.php" class="nav-link link-body-emphasis px-2 text-white">BOLETIN</a></!--li-->
                                <li class="nav-item mm2 menu"><a id="acercam" href="acerca-de.php" class="nav-link link-body-emphasis px-2 text-white" data-section="Header" data-value="AcercaDe">ACERCA DE</a></li>
                                <li class="nav-item mm2 menu"><a id="productosm" href="productos.php" class="nav-link link-body-emphasis px-2 text-white" data-section="Header" data-value="Productos">PRODUCTOS</a></li>
                                <li class="nav-item menu"><a id="legalm" href="cotizador.php" class="nav-link link-body-emphasis px-2 text-white" data-section="Header" data-value="AvisoLegal">LEGAL</a></li>
                                <li class="nav-item mm2 menu"><a id="descyrelm" href="bienestar-y-relajacion.php" class="nav-link link-body-emphasis px-2 text-white" aria-current="page" data-section="Header" data-value="BienestaryRelajacion">Bienestar y Relajacion</a></li>
                                <li class="nav-item mm2 menu"><a id="emocionesm" href="emociones.php" class="nav-link link-body-emphasis px-2 text-white" data-section="Header" data-value="Emociones">Emociones</a></li>
                                <li class="nav-item mm2 menu"><a id="artculm" href="artes-culinarias.php" class="nav-link link-body-emphasis px-2 text-white" data-section="Header" data-value="ArtesCulinarias">Artes Culinarias</a></li>
                            </ul>
                            <ul class="nav justify-content-center mt-5">
                                <li class="nav-item mm2"><a id="numm" href="tel:9997001585" class="nav-link link-body-emphasis px-2 text-white" aria-current="page"><i class="fas fa-phone-alt"></i> +52 (999) 700 15 85</a></li>
                                <li class="nav-item mm2"><a id="mailm" type="button" href="mailto:info@sanjosechakan.com" class="nav-link link-body-emphasis px-2 text-white" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-trigger="hover focus" data-bs-content="info@sanjosechakan.com"><i class="fas fa-envelope"></i></a></li>
                            </ul>
                            <form class="mt-3" style="text-align: center;" id="LangOptM"> 
                                <label id="Espam" class="mx-2">
                                    <input  type="radio" name="idioma" data-language="es">
                                    Español
                                </label>
                                <label id="Inglm" class="mx-2">
                                    <input  type="radio" name="idioma" data-language="en">
                                    English
                                </label>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>

<script>
     

        $(function (){
            $(window).scroll(function(){
                if ($(this).scrollTop() > 100) {
                $('.navscroll').addClass("inscroll");
                } else {
                $(".navscroll").removeClass("inscroll");
                }
            });
        });

        const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
        const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
       
</script>
    



