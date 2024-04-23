<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal County San José Chakan | Inmobiliarias</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <?php
    include('templates/link.php');
    ?>

</head>
<body>
<?php include('templates/header.php'); ?>
<script src="idiomas/lengprod.js"></script>

<div id="cont-acerca-de" class="" style="background: url('img/arqbg.jpg') !important;">   
</div>
<!-- #region MasterPlan-->
<div class="d-flex align-items-start my-5">
  <div id="inm-select-movil" class="w-25 me-3" style="display:none;">
    <select class="form-select" id="v-pills-select" aria-label="Selecciona una sección">
      <option id="optmpm" value="#v-pills-home" data-section="Inmobiliarias" data-value="MasterListM">Master Plan</option>
      <option id="optbrom" value="#v-pills-profile" data-section="Inmobiliarias" data-value="BrochListM">Brochure</option>
      <option id="optchepm" value="#v-pills-disabled" data-section="Inmobiliarias" data-value="ChepListM">Chepinas</option>
      <option id="optcomm" value="#v-pills-messages" data-section="Inmobiliarias" data-value="ComiListM">Comisiones</option>
      <option id="optcvm" value="#v-pills-newsec1" data-section="Inmobiliarias" data-value="CVListM">Curriculum de la desarrolladora</option>
      <option id="optftm" value="#v-pills-newsec2" data-section="Inmobiliarias" data-value="FichListM">Ficha técnica</option>
      <option id="optform" value="#v-pills-newsec3" data-section="Inmobiliarias" data-value="FormListM">Formatos</option>
      <option id="optfyvm" value="#v-pills-newsec4" data-section="Inmobiliarias" data-value="FotVidListM">Fotos y videos de avance</option>
      <option id="optlisprem" value="#v-pills-newsec5" data-section="Inmobiliarias" data-value="PreciListM">Lista de precios y disponibilidad</option>
      <!--option value="#v-pills-newsec6">Memoria descriptiva</!--option>
      <option-- value="#v-pills-newsec7">Planos</option-->
      <option id="optrendm" value="#v-pills-newsec8" data-section="Inmobiliarias" data-value="RendListM">Renders</option>
      <option id="optusm" value="#v-pills-newsec9" data-section="Inmobiliarias" data-value="UbiSaListM">Ubicación satelital</option>
    </select>
  </div>
  <div  class="nav w-25 flex-column inm-btns nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <button id="optmp" class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"><p class="m-0 text-center" data-section="Inmobiliarias" data-value="MasterListM">Master Plan</p></button>
    <button id="optbro" class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"><p class="m-0 text-center" data-section="Inmobiliarias" data-value="BrochListM">Brochure</p></button>
    <button id="optchep" class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false"><p class="m-0 text-center" data-section="Inmobiliarias" data-value="ChepiListM">Chepinas</p></button>
    <button id="optcom" class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false"><p class="m-0 text-center" data-section="Inmobiliarias" data-value="ComiListM">Comisiones</p></button>
    <button id="optcv" class="nav-link" id="v-pills-newsec1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-newsec1" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"><p class="m-0 text-center" data-section="Inmobiliarias" data-value="CVListM">Curriculum de la desarrolladora</p></button>
    <button id="optft" class="nav-link" id="v-pills-newsec2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-newsec2" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"><p class="m-0 text-center" data-section="Inmobiliarias" data-value="FichListM">Ficha técnica</p></button>
    <button id="optfor" class="nav-link" id="v-pills-newsec3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-newsec3" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"><p class="m-0 text-center" data-section="Inmobiliarias" data-value="FormListM">Formatos</p></button>
    <button id="optfyv" class="nav-link" id="v-pills-newsec4-tab" data-bs-toggle="pill" data-bs-target="#v-pills-newsec4" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"><p class="m-0 text-center" data-section="Inmobiliarias" data-value="FotVidListM">Fotos y videos de avance</p></button>
    <button id="optlispre" class="nav-link" id="v-pills-newsec5-tab" data-bs-toggle="pill" data-bs-target="#v-pills-newsec5" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"><p class="m-0 text-center" data-section="Inmobiliarias" data-value="PreciListM">Lista de precios y disponibilidad</p></button>
    <!--button class="nav-link" id="v-pills-newsec6-tab" data-bs-toggle="pill" data-bs-target="#v-pills-newsec6" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"><p class="m-0 text-center">Memoria descriptiva</p></!--button-->
    <!--button class="nav-link" id="v-pills-newsec7-tab" data-bs-toggle="pill" data-bs-target="#v-pills-newsec7" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"><p class="m-0 text-center">Planos</p></!--button-->
    <button id="optrend" class="nav-link" id="v-pills-newsec8-tab" data-bs-toggle="pill" data-bs-target="#v-pills-newsec8" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"><p class="m-0 text-center" data-section="Inmobiliarias" data-value="RendListM">Renders</p></button>
    <button id="optus" class="nav-link" id="v-pills-newsec9-tab" data-bs-toggle="pill" data-bs-target="#v-pills-newsec9" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"><p class="m-0 text-center" data-section="Inmobiliarias" data-value="UbiSaListM">Ubicación satelital</p></button>
  </div>
  <div class="tab-content w-75 p-3" id="v-pills-tabContent">
    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0"><!--MasterPlan-->
    
    
      <div class="container text-center" data-aos="fade-up">
          <h4 id="" class="subtitle text-center">Royal County San José Chakan</h4>
          <h1 id="" class="tit text-center" style="color: brown;">Master Plan</h1>
          <p id="txtinm0" class="text-center" data-section="Inmobiliarias" data-value="MasterSubC">Pongase en contacto para adquirir alguno de nuestros lotes disponibles o para resolver sus dudas.</p>
          <div class="py-2"></div>
          <div class="d-flex justify-content-center cont-btn-inm">
            <a id="btninm1" href="https://wa.link/ebt4dl" class="boton aos-init aos-animate mx-2" target="_blank"><i class="fab fa-whatsapp" aria-hidden="true" data-section="Inmobiliarias" data-value="BotoConC"></i ></a>
          </div>
          
          <div class="row mt-5">
              <div class="col-md-9 bg-center sombra mp-cont-inm">
                
                <div class="movil">
                  <div class="text-center">
                    <a href="documentos/MASTER PLAN_.pdf" class="boton aos-init aos-animate mx-2" target="_blank"><i class="fas fa-eye"></i><span id="btninm2">Ver Master Plan</span> </a>
                    <a href="documentos/MASTER PLAN_.pdf"  download="MASTER PLAN_.pdf" class="boton aos-init aos-animate mx-2" target="_blank"><i class="fas fa-download" aria-hidden="true"></i> <span id="btninm3">Descargar Master Plan</span> </a>
                  </div> 
                </div>
                <embed src="documentos/MASTER PLAN_.pdf" type="application/pdf" width="100%" height="700px" />

                  
              </div>
              <div class="col-md-3 p-4">
                  <div class="d-flex mb-4 align-items-center">
                      <div class="p-3 me-2" style="background: red; border-radius: 50px;"></div>
                      <h6 id="infocolorinm1" class="m-0" data-section="Inmobiliarias" data-value="Op1C">Vendidos.</h6>
                  </div>
                  <div class="d-flex mb-4 align-items-center">
                      <div class="p-3 me-2" style="background: blue; border-radius: 50px;"></div>
                      <h6 id="infocolorinm2" class="m-0" data-section="Inmobiliarias" data-value="Op2C">Disponibles.</h6>
                  </div>
                  <div class="d-flex mb-4 align-items-center">
                      <div class="p-3 me-2" style="background: green; border-radius: 50px;"></div>
                      <h6 id="infocolorinm3" class="m-0" data-section="Inmobiliarias" data-value="Op3C">Reservados.</h6>
                  </div>
                  <div class="d-flex mb-4 align-items-center">
                      <div class="p-3 me-2" style="background: yellow; border-radius: 50px;"></div>
                      <h6 id="infocolorinm4" class="m-0" data-section="Inmobiliarias" data-value="Op4C">No Disponible.</h6>
                  </div>
              </div>
            
          </div>
      </div>
          
    
    </div>
    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0"><!--Brochure-->
    
      <!--div class="row">
        <div class="col-md-6">
          <embed src="documentos/BrochureRCCInglés.pdf" type="application/pdf" width="50%" height="600px" />
        </div>
        <div class="col-md-6">
          <embed src="documentos/BrochureRoyalCountyChocholá.pdf" type="application/pdf" width="50%" height="600px" />  
        </div>
      </!--div-->
      <div>
        <h4 id="" class="subtitle text-center">Royal County San José Chakan</h4>
        <h1 id="" class="tit text-center" style="color: brown;">Brochure</h1>

        <div id="contbro" >
          <div class="d-flex">
            <div class="w-25 m-3 text-center">
              <a class="text-decoration-none" href="documentos/Brochure_Royal_County_SJC_compressed.pdf" download="Brochure_Royal_County_SJC_compressed.pdf" data-bs-toggle="modal" data-bs-target="#Brochureesp">
                <img class="w-100 mb-3" src="img/Brochure_Royal_County_SJC.png" alt="">
                <h3 class="text-black text-decoration-none">Royal County San José Chakan Brochure (Español)</h3>
              </a>
            </div>
            <div class="w-25 m-3 text-center">
              <a class="text-decoration-none" href="documentos/Brochure Royal County SJC Inglés_compressed.pdf" download="Brochure Royal County SJC Inglés_compressed.pdf" data-bs-toggle="modal" data-bs-target="#Brochureeng">
                <img class="w-100 mb-3" src="img/Brochure_Royal_County_SJC_ingles.png" alt="">
                <h3 class="text-black text-decoration-none">Royal County San José Chakan Brochure (English)</h3>
              </a>
            </div>

          </div>

        </div>
        
        <div class="movil">
          <div class="d-flex">
            <div class="w-25 m-3 text-center">
              <a class="text-decoration-none" href="documentos/Brochure_Royal_County_SJC_compressed.pdf">
                <img class="w-100 mb-3" src="img/Brochure_Royal_County_SJC.png" alt="">
                <h3 class="text-black text-decoration-none">Royal County San José Chakan Brochure (Español)</h3>
              </a>
            </div>
            <div class="w-25 m-3 text-center">
              <a class="text-decoration-none" href="documentos/Brochure Royal County SJC Inglés_compressed.pdf">
                <img class="w-100 mb-3" src="img/Brochure_Royal_County_SJC_ingles.png" alt="">
                <h3 class="text-black text-decoration-none">Royal County San José Chakan Brochure (English)</h3>
              </a>
            </div>

          </div>
        </div>
        
      </div>
    </div>

    <!-- aqui comienzan las chepinas-->
    <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0"><!--Chepinas-->
    
      <div class="w-100">
        <h4 id="" class="subtitle text-center">Royal County San José Chakan</h4>
        <h1 id="" class="tit text-center" style="color: brown;">Chepinas</h1>


        <div class="accordion W-100" id="accordionExample">

          <!-- Aqui empieza la manzana 1-->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button id="btnche1" class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                MANZANA 01
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div class="row">
                <div class="col-md-2 mx-2 mb-3">
                  <a class="text-decoration-none" href="documentos/MANZANA01/LOTE05.pdf" download="LOTE05.pdf">
                    <img class="w-100" src="img/pdfd.png" alt="">
                    <h5 class="text-center mt-2 text-black">LOTE 05</h5>
                  </a>
                </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA01/LOTE07.pdf" download="LOTE07.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 07</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA01/LOTE08.pdf" download="LOTE08.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 08</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA01/LOTE09.pdf" download="LOTE09.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 09</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA01/LOTE10.pdf" download="LOTE10.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 10</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA01/LOTE11.pdf" download="LOTE11.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 11</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA01/LOTE16.pdf" download="LOTE16.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 16</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA01/LOTE17.pdf" download="LOTE17.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 17</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA01/LOTE18.pdf" download="LOTE18.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 18</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA01/LOTE19.pdf" download="LOTE19.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 19</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA01/LOTE20.pdf" download="LOTE20.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 20</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA01/LOTE21.pdf" download="LOTE21.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 21</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA01/LOTE22.pdf" download="LOTE22.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 22</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA01/LOTE23.pdf" download="LOTE23.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 23</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA01/LOTE24.pdf" download="LOTE24.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 24</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA01/LOTE25.pdf" download="LOTE25.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 25</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA01/LOTE26.pdf" download="LOTE26.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 26</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA01/MANZANA1.pdf" download="MANZANA1.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 id="mzn01" class="text-center mt-2 text-black">MANZANA 01</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Aqui Termina la manzana 1-->

          <!-- Aqui Empieza la manzana 2-->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button id="btnche2" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                MANZANA 02
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div class="row">
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE01.pdf" download="LOTE01.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 01</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE02.pdf" download="LOTE02.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 02</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE03.pdf" download="LOTE03.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 03</h5>
                    </a>
                  </div>          
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/MANZANA2.pdf" download="MANZANA2.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 id="mzn02" class="text-center mt-2 text-black">MANZANA 02</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Aqui Termina la manzana 2-->
        
          <!-- Aqui Empieza la manzana 3-->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button id="btnche3" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                MANZANA 03
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div class="row">
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE35.pdf" download="LOTE35.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 35</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE36.pdf" download="LOTE36.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 36</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE37.pdf" download="LOTE37.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 37</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE38.pdf" download="LOTE38.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 38</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE39.pdf" download="LOTE39.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 39</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE40.pdf" download="LOTE40.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 40</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE41.pdf" download="LOTE41.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 41</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE42.pdf" download="LOTE42.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 42</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE43.pdf" download="LOTE43.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 43</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE44.pdf" download="LOTE44.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 44</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE45.pdf" download="LOTE45.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 45</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE46.pdf" download="LOTE46.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 46</h5>
                    </a>
                  </div> 
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE47.pdf" download="LOTE47.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 47</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE48.pdf" download="LOTE48.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 48</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE49.pdf" download="LOTE49.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 49</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE50.pdf" download="LOTE50.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 50</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE51.pdf" download="LOTE51.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 51</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE52.pdf" download="LOTE52.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 52</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE79.pdf" download="LOTE79.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 79</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE80.pdf" download="LOTE80.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 80</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE81.pdf" download="LOTE81.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 81</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE82.pdf" download="LOTE82.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 82</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE83.pdf" download="LOTE83.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 83</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE84.pdf" download="LOTE84.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 84</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE85.pdf" download="LOTE85.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 85</h5>
                    </a>
                  </div>  
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE86.pdf" download="LOTE86.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 86</h5>
                    </a>
                  </div> 
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE87.pdf" download="LOTE87.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 87</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE88.pdf" download="LOTE88.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 88</h5>
                    </a>
                  </div> 
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE89.pdf" download="LOTE89.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 89</h5>
                    </a>
                  </div>                                               
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/MANZANA3.pdf" download="MANZANA3.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 id="mzn02" class="text-center mt-2 text-black">MANZANA 03</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Aqui Termina la manzana 3-->
          
          <!-- Aqui Empieza la manzana 4-->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button id="btnche4" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                MANZANA 04
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div class="row">
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE53.pdf" download="LOTE53.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 53</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE54.pdf" download="LOTE054.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 54</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE55.pdf" download="LOTE55.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 55</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE56.pdf" download="LOTE56.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 56</h5>
                    </a>
                  </div> 
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE57.pdf" download="LOTE57.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 57</h5>
                    </a>
                  </div> 
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE58.pdf" download="LOTE58.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 58</h5>
                    </a>
                  </div> 
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE59.pdf" download="LOTE59.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 59</h5>
                    </a>
                  </div>  
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE60.pdf" download="LOTE60.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 60</h5>
                    </a>
                  </div>   
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE61.pdf" download="LOTE61.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 61</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE62.pdf" download="LOTE62.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 62</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE63.pdf" download="LOTE63.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 63</h5>
                    </a>
                  </div>  
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE64.pdf" download="LOTE64.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 64</h5>
                    </a>
                  </div>  
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE65.pdf" download="LOTE65.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 65</h5>
                    </a>
                  </div>  
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE66.pdf" download="LOTE66.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 66</h5>
                    </a>
                  </div>  
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE67.pdf" download="LOTE67.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 67</h5>
                    </a>
                  </div>  
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE68.pdf" download="LOTE68.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 68</h5>
                    </a>
                  </div>  
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE69.pdf" download="LOTE69.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 69</h5>
                    </a>
                  </div>  
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE70.pdf" download="LOTE70.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 70</h5>
                    </a>
                  </div> 
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE71.pdf" download="LOTE71.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 71</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE72.pdf" download="LOTE72.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 72</h5>
                    </a>
                  </div> 
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE73.pdf" download="LOTE73.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 73</h5>
                    </a>
                  </div> 
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE74.pdf" download="LOTE74.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 74</h5>
                    </a>
                  </div> 
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE75.pdf" download="LOTE75.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 75</h5>
                    </a>
                  </div> 
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE76.pdf" download="LOTE76.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 76</h5>
                    </a>
                  </div> 
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE77.pdf" download="LOTE77.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 77</h5>
                    </a>
                  </div> 
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE78.pdf" download="LOTE78.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 78</h5>
                    </a>
                  </div>          
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/MANZANA4.pdf" download="MANZANA4.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 id="mzn02" class="text-center mt-2 text-black">MANZANA 04</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Aqui Termina la manzana 4-->

          <!-- Aqui Empieza la manzana 5-->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button id="btnche5" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                MANZANA 05
              </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div class="row">
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE65.pdf" download="LOTE65.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 65</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE66.pdf" download="LOTE66.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 66</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE67.pdf" download="LOTE67.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 67</h5>
                    </a>
                  </div>  
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE68.pdf" download="LOTE68.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 68</h5>
                    </a>
                  </div> 
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE69.pdf" download="LOTE69.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 69</h5>
                    </a>
                  </div>         
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/MANZANA5.pdf" download="MANZANA5.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 id="mzn02" class="text-center mt-2 text-black">MANZANA 05</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Aqui Termina la manzana 5-->
        </div>
      
      </div>

     
    
    
    </div>
    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0"><!--Comisiones-->
    
    
      <div class="w-100">
        <h4 id="titinm1" class="subtitle text-center" data-section="Inmobiliarias" data-value="TitComisi">Pago de comisiones.</h4>
        <h1 id="stitinm1" class="tit text-center mb-5"data-section="Inmobiliarias" data-value="PorcComisi" style="color: brown;">Comisión: 4%</h1>

        <div class="text-center w-100">
          <a href="documentos/Formatodecobrodecomisión.xlsx" download="Formatodecobrodecomisión.xlsx" class="boton aos-init aos-animate mx-2 btninm" target="_blank"><i class="fas fa-download"></i> <span id="btninm4" data-section="Inmobiliarias" data-value="BotoComisi"> Descaragar Formato de cobro de comisión</span></a>
        </div>

        <div class="px-5 mt-5">
          <p id="txtinm1" data-section="Inmobiliarias" data-value="DescComisi">La comisión se paga en la promesa de compraventa una vez que el cliente haya dado el 30% de enganche. El pago de la comisión es via transferencia o cheque a cuenta, en moneda nacional.</p>
          <h2 id="titinm2" data-section="Inmobiliarias" data-value="TitProComisi"style="color: brown;">Proceso para el cobro de comisión:</h2>
          <ul>
            <li id="txtinm2" data-section="Inmobiliarias" data-value="Pas1Comisi">Se requiere la confirmación y comprobante del pago del enganche.</li>
            <li id="txtinm3" data-section="Inmobiliarias" data-value="Pas2Comisi">Contar con todas las firmas requeridas del cliente.</li>
            <li id="txtinm4" data-section="Inmobiliarias" data-value="Pas3Comisi">La comisión es sobre el precio base, no participando los adicionales.</li>
            <li id="txtinm5" data-section="Inmobiliarias" data-value="Pas4Comisi">La comisión se le paga a la agencia que deposite el apartado y el enganche.</li>
            <li id="txtinm6" data-section="Inmobiliarias" data-value="Pas5Comisi">La persona que solicita el cobro de la comisión deberá ser el titular de la agencia inmobiliaria.</li>
            <li id="txtinm7" data-section="Inmobiliarias" data-value="Pas6Comisi">La solicitud del cobro se hace mediante correo, el correo debe venir del correo del titular.</li>
            <li id="txtinm8" data-section="Inmobiliarias" data-value="Pas7Comisi">Si el titular no puede pasar al cobro, en el correo deberá mencionar quién es la persona que se apersonará y esta persona deberá presentar su INE para identificarse.</li>
            <li id="txtinm9" data-section="Inmobiliarias" data-value="Pas8Comisi">La persona que cobrará la comisión deberá de llevar impreso el formato de cobro de comisión.</li>
            <li id="txtinm10" data-section="Inmobiliarias" data-value="Pas9Comisi">El tiempo promedio que se libera la comisión será de 15 a 30 días máximo.</li>
            <li id="txtinm11" data-section="Inmobiliarias" data-value="Pas10Comisi">De acuerdo con la NOM 247 la comisión podrá solicitarse pasando los 5 días con los que cuenta el cliente para solicitar su devolución de enganche.</li>
            <li id="txtinm12" data-section="Inmobiliarias" data-value="Pas11Comisi"> Si hubiere algún atraso en la liberación de la comisión, se le notificará al titular a través de un mensaje o correo.</li>
          </ul>
        </div>
        </div>
      </div>

    <div class="tab-pane fade" id="v-pills-newsec1" role="tabpanel" aria-labelledby="v-pills-newsec1-tab" tabindex="0"><!--Curriculum de la desarrolladora-->
    
    
      <div class="w-100">
        <h4 id="titinm3" class="subtitle text-center">Curriculum </h4>
        <h1 id="stitinm2" class="tit text-center"style="color: brown;">de la desarrolladora</h1>

        <div class="w-100">
          <embed src="documentos/cv.pdf" type="application/pdf" width="100%" height="600px" />
          <div class="movil">
            <div class="text-center">
              <a href="documentos/cv.pdf" class="boton aos-init aos-animate mx-2" target="_blank"><i class="fas fa-eye"></i><span id="btninm5">Ver Curriculum de la desarrolladora</span> </a>
              <a href="documentos/cv.pdf"  download="cv.pdf" class="boton aos-init aos-animate mx-2" target="_blank"><i class="fas fa-download" aria-hidden="true"></i> <span id="btninm6">Descaragar Curriculum de la desarrolladora</span> </a>
            </div>
          </div>
        </div>


      </div>
    
    
    </div>
 <div class="tab-pane fade" id="v-pills-newsec2" role="tabpanel" aria-labelledby="v-pills-newsec1-tab" tabindex="0"><!--Ficha Tecnica-->
  <div class="w-100 text-center">
    <h4 id="titinm4" class="subtitle">Ficha</h4>
    <h1 id="stitinm3" class="tit" style="color: brown;">técnica</h1>
    <div class="w-100">
        <iframe src="https://drive.google.com/file/d/1ivmEZIsK3nBQb2I6rHXCr3hbwPXjwLXP/view?usp=drive_link" width="100%" height="600px"></iframe>
    </div>
</div>
        </div>
<div class="tab-pane fade" id="v-pills-newsec3" role="tabpanel" aria-labelledby="v-pills-newsec3-tab" tabindex="0"><!--Formatos-->

    
      <div class="w-100">
        <h4 id="" class="subtitle text-center">Royal County San José Chakan</h4>
        <h1 id="titinm5" class="tit text-center" style="color: brown;">Formatos</h1>

        <div class="row mt-5">
          <div class="col-md-2 mx-2 mb-3">
            <a class="text-decoration-none" href="documentos/DocumentacionInmuebles.pdf" download="DocumentacionInmuebles.pdf">
              <img class="w-100" src="img/pdfd.png" alt="">
              <h5 id="fdoc1" class="text-center mt-2 text-black">Documentos para la compraventa</h5>
            </a>
          </div>
          <div class="col-md-2 mx-2 mb-3">
            
            <a class="text-decoration-none" href="documentos/Formatodegenerales.xlsx" download="Formatodegenerales.xlsx">
              <img class="w-100" src="img/pdfd.png" alt="">
              <h5 id="fdoc2" class="text-center mt-2 text-black">Formato de generales</h5>
            </a>

          </div>
          <div class="col-md-2 mx-2 mb-3">
            <a class="text-decoration-none" href="documentos/ConstanciaSituacionFiscal.pdf" download="ConstanciaSituacionFiscal.pdf">
              <img class="w-100" src="img/pdfd.png" alt="">
              <h5 id="fdoc3" class="text-center mt-2 text-black">Para solicitar tu Constancia de Situación Fiscal</h5>
            </a>
          </div>
                  

        </div>  
      </div>
    
    
    </div>
    <div class="tab-pane fade" id="v-pills-newsec4" role="tabpanel" aria-labelledby="v-pills-newsec4-tab" tabindex="0"><!--Fotos y videos de avance-->
    
    
      

      <div class="w-100">
        <h4 id="stitinm4" class="subtitle text-center">Fotos y videos</h4>
        <h1 id="titinm6" class="tit text-center" style="color: brown;"> de avance</h1>
        
      </div>
      







    
    
    </div>
    <div class="tab-pane fade" id="v-pills-newsec5" role="tabpanel" aria-labelledby="v-pills-newsec5-tab" tabindex="0"><!--Lista de precios y disponibilidad-->
    
    
      <div class="w-100">
        <h4 id="stitinm5" class="subtitle text-center">Lista de precios y  </h4>
        <h1 id="titinm7" class="tit text-center" style="color: brown;">disponibilidad</h1>

        <div class="w-100">
          <embed src="documentos/Listadepreciosyfinanciamientos2.pdf" type="application/pdf" width="100%" height="600px"/>
          <div class="movil">
            <div class="text-center">
              <a href="documentos/Listadepreciosyfinanciamientos2.pdf" class="boton aos-init aos-animate mx-2" target="_blank"><i class="fas fa-eye"></i><span id="btninm7">Ver Lista de precios</span> </a>
              <a href="documentos/Listadepreciosyfinanciamientos2.pdf"  download="Listadepreciosyfinanciamientos2.pdf" class="boton aos-init aos-animate mx-2" target="_blank"><i class="fas fa-download" aria-hidden="true"></i> <span id="btninm8">Descaragar Lista de precios</span> </a>
            </div>
          </div>
        </div>


      </div>
    
    
    </div>
    <div class="tab-pane fade" id="v-pills-newsec8" role="tabpanel" aria-labelledby="v-pills-newsec8-tab" tabindex="0"><!--Renders-->
      <div class="w-100">
        <h4 id="" class="subtitle text-center">Royal County San José Chakan</h4>
        <h1 id="" class="tit text-center"style="color: brown;">Renders</h1>

     


          
        <div class="w-100">
            
            <div class="row img-zonas">
              
                <div class="col-md-3 m-0 p-2" data-aos="zoom-in">
                    <a class="example-image-link" href="img/renders/Estudios1.jpg" data-lightbox="example-2" data-title="">
                        <div class="img-zona-gallery sombra" style="height: 200px !important; background-image: url('img/renders/Estudios1.jpg') !important;">
                            <div class="overlay-img-index w-100 h-100 p-2">
                                <!--div class="line-int w-100 h-100 p-2 d-flex align-items-end">
                                    <div class="d-flex tit-prod text-white sombre-txt"><i class="fas fa-school me-2"></i><h3 id="imhtitlist1colegio" class="tit-prod text-white sombre-txt"> Colegio</h3></div>
                                </!--div-->
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 m-0 p-2" data-aos="zoom-in">
                    <a class="example-image-link" href="img/renders/Estudios2.jpg" data-lightbox="example-2" data-title="">
                        <div class="img-zona-gallery sombra" style="height: 200px !important; background-image: url('img/renders/Estudios2.jpg') !important;">
                            <div class="overlay-img-index w-100 h-100 p-2">
                                <!--div class="line-int w-100 h-100 p-2 d-flex align-items-end">
                                    <div class="d-flex tit-prod text-white sombre-txt"><i class="fas fa-campground me-2"></i> <h3 id="imhtitlist1glamping" class="tit-prod text-white sombre-txt">Glamping</h3></div>
                                </!--div-->
                            </div>
                        </div>
                    </a>
                </div>
               
                <div class="col-md-3 m-0 p-2" data-aos="zoom-in">
                    <a class="example-image-link" href="img/renders/Estudios3.jpg" data-lightbox="example-2" data-title="">
                        <div class="img-zona-gallery sombra" style="height: 200px !important; background-image: url('img/renders/Estudios3.jpg') !important;">
                            <div class="overlay-img-index w-100 h-100 p-2">
                                <!--div class="line-int w-100 h-100 p-2 d-flex align-items-end">
                                    <div class="d-flex tit-prod text-white sombre-txt"><i class="fas fa-campground me-2"></i> <h3 id="imhtitlist1glamping" class="tit-prod text-white sombre-txt">Glamping</h3></div>
                                </!--div-->
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 m-0 p-2" data-aos="zoom-in">
                    <a class="example-image-link" href="img/renders/Estudios4.jpg" data-lightbox="example-2" data-title="">
                        <div class="img-zona-gallery sombra" style="height: 200px !important; background-image: url('img/renders/Estudios4.jpg') !important;">
                            <div class="overlay-img-index w-100 h-100 p-2">
                                <!--div class="line-int w-100 h-100 p-2 d-flex align-items-end">
                                    <div class="d-flex tit-prod text-white sombre-txt"><i class="fas fa-campground me-2"></i> <h3 id="imhtitlist1glamping" class="tit-prod text-white sombre-txt">Glamping</h3></div>
                                </!--div-->
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 m-0 p-2" data-aos="zoom-in">
                    <a class="example-image-link" href="img/renders/Estudios5.jpg" data-lightbox="example-2" data-title="">
                        <div class="img-zona-gallery sombra" style="height: 200px !important; background-image: url('img/renders/Estudios5.jpg') !important;">
                            <div class="overlay-img-index w-100 h-100 p-2">
                                <!--div class="line-int w-100 h-100 p-2 d-flex align-items-end">
                                    <div class="d-flex tit-prod text-white sombre-txt"><i class="fas fa-campground me-2"></i> <h3 id="imhtitlist1glamping" class="tit-prod text-white sombre-txt">Glamping</h3></div>
                                </!--div-->
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3 m-0 p-2" data-aos="zoom-in">
                    <a class="example-image-link" href="img/renders/Estudios6.jpg" data-lightbox="example-2" data-title="">
                        <div class="img-zona-gallery sombra" style="height: 200px !important; background-image: url('img/renders/Estudios6.jpg') !important;">
                            <div class="overlay-img-index w-100 h-100 p-2">
                                <!--div class="line-int w-100 h-100 p-2 d-flex align-items-end">
                                    <div class="d-flex tit-prod text-white sombre-txt"><i class="fas fa-campground me-2"></i> <h3 id="imhtitlist1glamping" class="tit-prod text-white sombre-txt">Glamping</h3></div>
                                </!--div-->
                            </div>
                        </div>
                    </a>
                </div>
                

               
            </div>
        </div>



        


      </div>
     </div>
    <div class="tab-pane fade" id="v-pills-newsec9" role="tabpanel" aria-labelledby="v-pills-newsec9-tab" tabindex="0"> <!--Ubicacion Satelital-->
    
    
      <div class="w-100">
        <h4 id="stitinm6" class="subtitle text-center">Ubicación </h4>
        <h1 id="titinm8" class="tit text-center mb-5" style="color: brown;">satelital</h1>

        <div class="text-center w-100">
          <a href="documentos/HaciendaSanJoseChakan.kml" download="HaciendaSanJoseChakan.kml" class="boton aos-init aos-animate mx-2" target="_blank"><i class="fas fa-download"></i> <span id="btninm9" >Descargar</span></a>
        </div>

        <div class="mt-5"></div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14749.169054701486!2d-89.4902364627086!3d21.133623218247063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f567166cf2b9e13%3A0xc83b63dda1101f2d!2sHacienda%20San%20Jos%C3%A9%20Chak%C3%A1n!5e0!3m2!1ses-419!2smx!4v1711030524807!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        
        <div class="row mt-4">
          <div class="col-md-6">
            <h5 id="txtger1">Gerente a cargo:</h5> <h5><strong>Yolanda Taboada Saavedra</strong></h5> 
            <h6><i class="fas fa-phone-alt"></i> +52 (999) 700 15 85</h6>
            <h6><i class="fas fa-envelope"></i> yolanda.taboada@royalcountychochola.com</h6>
          </div>
          <div class="col-md-6">
            <h5 id="txtger2">Gerente comercial:</h5> <h5><strong>Jesús David Flores Pool</strong></h5> 
            <h6><i class="fas fa-phone-alt"></i> +52 1 999 193 4724</h6>
            <h6><i class="fas fa-envelope"></i> info@sanjosechakan.com</h6>
          </div>
        </div>
        
        

      </div>
    
    
    </div>
</div>
</div>

<script>
  // Obtén el elemento select y el contenido de las pestañas
  const select = document.getElementById('v-pills-select');
  const tabContent = document.querySelector('.tab-content');

  // Agrega un event listener para el cambio en el select
  select.addEventListener('change', (event) => {
    // Obtén el valor seleccionado en el select
    const selectedValue = event.target.value;

    // Encuentra la pestaña correspondiente en el contenido
    const tabPane = tabContent.querySelector(selectedValue);

    // Activa la pestaña encontrada y desactiva las demás
    tabContent.querySelectorAll('.tab-pane').forEach((tab) => {
      tab.classList.remove('show', 'active');
    });

    tabPane.classList.add('show', 'active');
  });
</script>


<?php include('templates/modals.php'); ?>

<!--JAVASCRIPT ANIMACIONES-->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<?php include('templates/footer.php'); ?>
</body>
</html>