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

  <div class="overlay h-100 w-100 d-flex justify-content-center align-items-end">
  
      
  </div>

</div>


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
    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
    
    
      <div class="container text-center" data-aos="fade-up">
          <h4 id="" class="subtitle text-center">Royal County San José Chakan</h4>
          <h1 id="" class="tit text-center">Master Plan</h1>
          <p id="txtinm0" class="text-center">Pongase en contacto para adquirir alguno de nuestros lotes disponibles o para resolver sus dudas.</p>
          <div class="py-2"></div>
          <div class="d-flex justify-content-center cont-btn-inm">
            <a id="btninm1" href="https://wa.link/ebt4dl" class="boton aos-init aos-animate mx-2" target="_blank"><i class="fab fa-whatsapp" aria-hidden="true"></i> Contáctanos</a>
          </div>
          
          <div class="row mt-5">
              <div class="col-md-9 bg-center sombra mp-cont-inm" style="">
                
                <div class="movil">
                  <div class="text-center">
                    <a href="documentos/MASTER PLAN_.pdf" class="boton aos-init aos-animate mx-2" target="_blank"><i class="fas fa-eye"></i><span id="btninm2">Ver Master Plan</span> </a>
                    <a href="documentos/MASTER PLAN_.pdf"  download="MASTER PLAN_.pdf" class="boton aos-init aos-animate mx-2" target="_blank"><i class="fas fa-download" aria-hidden="true"></i> <span id="btninm3">Descaragar Master Plan</span> </a>
                  </div> 
                </div>
                <embed src="documentos/MASTER PLAN_.pdf" type="application/pdf" width="100%" height="700px" />

                  
              </div>
              <div class="col-md-3 p-4">
                  <div class="d-flex mb-4 align-items-center">
                      <div class="p-3 me-2" style="background: red; border-radius: 50px;"></div>
                      <h6 id="infocolorinm1" class="m-0">Vendidos.</h6>
                  </div>
                  <div class="d-flex mb-4 align-items-center">
                      <div class="p-3 me-2" style="background: blue; border-radius: 50px;"></div>
                      <h6 id="infocolorinm2" class="m-0">Disponibles.</h6>
                  </div>
                  <div class="d-flex mb-4 align-items-center">
                      <div class="p-3 me-2" style="background: green; border-radius: 50px;"></div>
                      <h6 id="infocolorinm3" class="m-0">Reservados.</h6>
                  </div>
                  <div class="d-flex mb-4 align-items-center">
                      <div class="p-3 me-2" style="background: yellow; border-radius: 50px;"></div>
                      <h6 id="infocolorinm4" class="m-0">No Disponible.</h6>
                  </div>
              </div>
            
          </div>
      </div>
          
    
    </div>
    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
    
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
        <h1 id="" class="tit text-center">Brochure</h1>

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
    <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">
    
      <div class="w-100">
        <h4 id="" class="subtitle text-center">Royal County San José Chakan</h4>
        <h1 id="" class="tit text-center">Chepinas</h1>


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
          
          <!-- Aqui Termina la manzana 4-->

          <!-- Aqui Empieza la manzana 5-->
          <!--
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button id="btnche5" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
                MANZANA 05
              </button>
            </h2>
            <div id="collapseThree2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">



                <div class="row">
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA05/AREAVERDE01.pdf" download="AREAVERDE01.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 id="mzn04" class="text-center mt-2 text-black">ÁREA VERDE 01</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA05/LOTE41.pdf" download="LOTE41.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 41</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA05/LOTE42.pdf" download="LOTE42.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 42</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA05/LOTE43.pdf" download="LOTE43.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 43</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA05/LOTE44.pdf" download="LOTE44.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 44</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA05/LOTE45.pdf" download="LOTE45.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 45</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA05/LOTE46.pdf" download="LOTE46.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 46</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA05/LOTE47.pdf" download="LOTE47.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 47</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA05/LOTE48.pdf" download="LOTE48.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 48</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA05/LOTE49.pdf" download="LOTE49.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 49</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
-->
          <!-- Aqui Termina la manzana 5-->

          <!-- Aqui Empieza la manzana 6-->
          <!--
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button id="btnche6" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                MANZANA 06
              </button>
            </h2>
            <div id="collapseThree3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div class="row">
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA06/AREADEPARTAMENTOS01.pdf" download="AREADEPARTAMENTOS01.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 id="mzn05" class="text-center mt-2 text-black">ÁREA DEPARTAMENTOS 01</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA06/AREAVERDE02.pdf" download="AREAVERDE02.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">ÁREA VERDE 02</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA06/LOTE50.pdf" download="LOTE50.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 50</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA06/LOTE51.pdf" download="LOTE51.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 51</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA06/LOTE52.pdf" download="LOTE52.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 52</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA06/LOTE53.pdf" download="LOTE53.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 53</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA06/LOTE54.pdf" download="LOTE54.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 54</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA06/LOTE55.pdf" download="LOTE55.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 55</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
-->
          <!-- Aqui Termina la manzana 6-->

          <!-- Aqui Empieza la manzana 7-->
          <!--
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button id="btnche7" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4">
                MANZANA 07
              </button>
            </h2>
            <div id="collapseThree4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div class="row">
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA07/LOTE56.pdf" download="LOTE56.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 56</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA07/LOTE57.pdf" download="LOTE57.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 57</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA07/LOTE58.pdf" download="LOTE58.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 58</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA07/LOTE59.pdf" download="LOTE59.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 59</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA07/LOTE60.pdf" download="LOTE60.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 60</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA07/LOTE61.pdf" download="LOTE61.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 61</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA07/LOTE62.pdf" download="LOTE62.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 62</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA07/LOTE63.pdf" download="LOTE63.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 63</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
-->
          <!-- Aqui Termina la manzana 7-->

          <!-- Aqui Empieza la manzana 8-->
          <!--
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button id="btnche8" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree5" aria-expanded="false" aria-controls="collapseThree5">
                MANZANA 08
              </button>
            </h2>
            <div id="collapseThree5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div class="row">
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA08/LOTE64.pdf" download="LOTE64.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 64</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA08/LOTE65.pdf" download="LOTE65.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 65</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA08/LOTE66.pdf" download="LOTE66.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 66</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA08/LOTE67.pdf" download="LOTE67.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 67</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA08/LOTE68.pdf" download="LOTE68.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 68</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA08/LOTE69.pdf" download="LOTE69.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 69</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA08/LOTE70.pdf" download="LOTE70.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 70</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA08/LOTE71.pdf" download="LOTE71.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 71</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
-->
          <!-- Aqui Termina la manzana 8-->

          <!-- Aqui Empieza la manzana 9-->
          <!--
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button id="btnche9" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree6" aria-expanded="false" aria-controls="collapseThree6">
                MANZANA 09
              </button>
            </h2>
            <div id="collapseThree6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div class="row">
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA09/LOTE72.pdf" download="LOTE72.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 72</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA09/LOTE73.pdf" download="LOTE73.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 73</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA09/LOTE74.pdf" download="LOTE74.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 74</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA09/LOTE75.pdf" download="LOTE75.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 75</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA09/LOTE76.pdf" download="LOTE76.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 76</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA09/LOTE77.pdf" download="LOTE77.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 77</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA09/LOTE78.pdf" download="LOTE78.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 78</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA09/LOTE79.pdf" download="LOTE79.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 79</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA09/LOTE80.pdf" download="LOTE80.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 80</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA09/LOTE81.pdf" download="LOTE81.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 81</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA09/LOTE82.pdf" download="LOTE82.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 82</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
-->
          <!-- Aqui Termina la manzana 9-->

          <!-- Aqui Empieza la manzana 10-->
          <!--
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button id="btnche10" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree7" aria-expanded="false" aria-controls="collapseThree7">
                MANZANA 10
              </button>
            </h2>
            <div id="collapseThree7" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div class="row">
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA10/LOTE83.pdf" download="LOTE83.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 83</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA10/LOTE84.pdf" download="LOTE84.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 84</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA10/LOTE85.pdf" download="LOTE85.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 85</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA10/LOTE86.pdf" download="LOTE86.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 86</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA10/LOTE87.pdf" download="LOTE87.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 87</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA10/LOTE88.pdf" download="LOTE88.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 88</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA10/LOTE89.pdf" download="LOTE89.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 89</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA10/LOTE90.pdf" download="LOTE90.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 90</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA10/LOTE91.pdf" download="LOTE91.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 91</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA10/LOTE92.pdf" download="LOTE92.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 92</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA10/LOTE93.pdf" download="LOTE93.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 93</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA10/LOTE94.pdf" download="LOTE94.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 94</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA10/LOTE95.pdf" download="LOTE95.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 95</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
-->
          <!-- Aqui Termina la manzana 10-->

          <!-- Aqui Empieza la manzana 11-->
          <!--
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button id="btnche11" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree8" aria-expanded="false" aria-controls="collapseThree8">
                MANZANA 11
              </button>
            </h2>
            <div id="collapseThree8" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">



                <div class="row">
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA11/LOTE96.pdf" download="LOTE96.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 96</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA11/LOTE97.pdf" download="LOTE97.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 97</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA11/LOTE98.pdf" download="LOTE98.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 98</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA11/LOTE99.pdf" download="LOTE99.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 99</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA11/LOTE100.pdf" download="LOTE100.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 100</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA11/LOTE101.pdf" download="LOTE101.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 101</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA11/LOTE102.pdf" download="LOTE102.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 102</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA11/LOTE103.pdf" download="LOTE103.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 103</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
-->
          <!-- Aqui Termina la manzana 11-->

          <!-- Aqui Empieza la manzana 12-->
          <!--
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button id="btnche12" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree9" aria-expanded="false" aria-controls="collapseThree9">
                MANZANA 12
              </button>
            </h2>
            <div id="collapseThree9" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div class="row">
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA12/DEPARTAMENTOS2.pdf" download="DEPARTAMENTOS2.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 id="mzn06" class="text-center mt-2 text-black">DEPARTAMENTOS 02</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA12/LOTE104.pdf" download="LOTE104.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 104</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA12/LOTE105.pdf" download="LOTE105.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 105</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA12/LOTE106.pdf" download="LOTE106.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 106</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA12/LOTE107.pdf" download="LOTE107.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 107</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA12/LOTE108.pdf" download="LOTE108.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 108</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA12/LOTE109.pdf" download="LOTE109.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 109</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA12/LOTE110.pdf" download="LOTE110.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 110</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
-->
          <!-- Aqui Termina la manzana 12-->

        </div>
      
      </div>

     
    
    
    </div>
    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
    
    
      <div class="w-100">
        <h4 id="titinm1" class="subtitle text-center">Pago de comisiones.</h4>
        <h1 id="stitinm1" class="tit text-center mb-5">Comisión: 4%</h1>

        <div class="text-center w-100">
          <a href="documentos/Formatodecobrodecomisión.xlsx" download="Formatodecobrodecomisión.xlsx" class="boton aos-init aos-animate mx-2 btninm" target="_blank"><i class="fas fa-download"></i> <span id="btninm4"> Descaragar Formato de cobro de comisión</span></a>
        </div>

        <div class="px-5 mt-5">
          <p id="txtinm1">La comisión se paga en la promesa de compraventa una vez que el cliente 
          haya dado el 30% de enganche. El pago de la comisión es en efectivo, en moneda 
          nacional.</p>
          <h2 id="titinm2">Proceso para el cobro de comisión:</h2>
          <ul>
            <li id="txtinm2">Se requiere la confirmación y comprobante del pago del enganche.</li>
            <li id="txtinm3">Contar con todas las firmas requeridas del cliente.</li>
            <li id="txtinm4">La comisión es sobre el precio base, no participando los adicionales.</li>
            <li id="txtinm5">La comisión se le paga a la agencia que deposite el apartado y el enganche.</li>
            <li id="txtinm6">La persona que solicita el cobro de la comisión deberá ser el titular de la agencia inmobiliaria.</li>
            <li id="txtinm7">La solicitud del cobro se hace mediante correo, el correo debe venir del correo del titular.</li>
            <li id="txtinm8">Si el titular no puede pasar al cobro, en el correo deberá mencionar quién es la persona que se apersonará y esta persona deberá presentar su INE para identificarse.</li>
            <li id="txtinm9">La persona que cobrará la comisión deberá de llevar impreso el formato de cobro de comisión.</li>
            <li id="txtinm10">El tiempo promedio que se libera la comisión será de 15 a 30 días máximo.</li>
            <li id="txtinm11">De acuerdo con la NOM 247 la comisión podrá solicitarse pasando los 5 días con los que cuenta el cliente para solicitar su devolución de enganche.</li>
            <li id="txtinm12"> Si hubiere algún atraso en la liberación de la comisión, se le notificará al titular a través de un mensaje o correo.</li>
          </ul>
        </div>
        
      </div>
    
    
    </div>
    <div class="tab-pane fade" id="v-pills-newsec1" role="tabpanel" aria-labelledby="v-pills-newsec1-tab" tabindex="0">
    
    
      <div class="w-100">
        <h4 id="titinm3" class="subtitle text-center">Curriculum </h4>
        <h1 id="stitinm2" class="tit text-center">de la desarrolladora</h1>

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
    <div class="tab-pane fade" id="v-pills-newsec2" role="tabpanel" aria-labelledby="v-pills-newsec2-tab" tabindex="0">
    
    
      <div class="w-100">
        <h4 id="titinm4" class="subtitle text-center">Ficha  </h4>
        <h1 id="stitinm3" class="tit text-center">técnica</h1>

        <div class="w-100">
          <embed src="documentos/Fichatecnica.pdf" type="application/pdf" width="100%" height="600px" />
          <div class="movil">
            <div class="text-center">
              <a href="documentos/Fichatecnica.pdf" class="boton aos-init aos-animate mx-2" target="_blank"><i class="fas fa-eye"></i><span id="btninm5">Ver Ficha técnica</span> </a>
              <a href="documentos/Fichatecnica.pdf"  download="Fichatecnica.pdf" class="boton aos-init aos-animate mx-2" target="_blank"><i class="fas fa-download" aria-hidden="true"></i> <span id="btninm6">Descaragar Ficha técnica</span> </a>
            </div>
          </div>
        </div>


      </div>  
    
    
    </div>
    <div class="tab-pane fade" id="v-pills-newsec3" role="tabpanel" aria-labelledby="v-pills-newsec3-tab" tabindex="0">
    
    
      <div class="w-100">
        <h4 id="" class="subtitle text-center">Royal County San José Chakan</h4>
        <h1 id="titinm5" class="tit text-center">Formatos</h1>

        <div class="row mt-5">
          <div class="col-md-2 mx-2 mb-3">
            <a class="text-decoration-none" href="documentos/DOCUMENTACIONPARALACOMPRAVENTADEINMUEBLES..pdf" download="DOCUMENTACIONPARALACOMPRAVENTADEINMUEBLES..pdf">
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
            <a class="text-decoration-none" href="documentos/ConstanciadeSituacionFiscal.pdf" download="ConstanciadeSituacionFiscal.pdf">
              <img class="w-100" src="img/pdfd.png" alt="">
              <h5 id="fdoc3" class="text-center mt-2 text-black">Para solicitar tu Constancia de Situación Fiscal</h5>
            </a>
          </div>
                  

        </div>  
      </div>
    
    
    </div>
    <div class="tab-pane fade" id="v-pills-newsec4" role="tabpanel" aria-labelledby="v-pills-newsec4-tab" tabindex="0">
    
    
      

      <div class="w-100">
        <h4 id="stitinm4" class="subtitle text-center">Fotos y videos</h4>
        <h1 id="titinm6" class="tit text-center"> de avance</h1>
        
      </div>
      







    
    
    </div>
    <div class="tab-pane fade" id="v-pills-newsec5" role="tabpanel" aria-labelledby="v-pills-newsec5-tab" tabindex="0">
    
    
      <div class="w-100">
        <h4 id="stitinm5" class="subtitle text-center">Lista de precios y  </h4>
        <h1 id="titinm7" class="tit text-center">disponibilidad</h1>

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
    <!--div class="tab-pane fade" id="v-pills-newsec6" role="tabpanel" aria-labelledby="v-pills-newsec6-tab" tabindex="0">
    
    
      <div class="w-100">
        <h4 id="" class="subtitle text-center">Memoria </h4>
        <h1 id="" class="tit text-center">descriptiva</h1>

        <div class="w-100">
          <embed src="documentos/MEMORIADESCRIPTIVA2.pdf" type="application/pdf" width="100%" height="600px" />

        </div>


      </div>
    
    
    </!--div-->
    <div class="tab-pane fade" id="v-pills-newsec7" role="tabpanel" aria-labelledby="v-pills-newsec7-tab" tabindex="0">
    
    
      <div class="w-100">
        <h4 id="" class="subtitle text-center">Royal County San José Chakan</h4>
        <h1 id="" class="tit text-center">PLANOS</h1>


        <div class="accordion W-100" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                MANZANA 01
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">


              
                <div class="row">
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA01/LOTE01.pdf" download="LOTE01.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 01</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA01/LOTE02.pdf" download="LOTE02.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 02</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA01/LOTE03.pdf" download="LOTE03.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 03</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA01/LOTE04.pdf" download="LOTE04.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 04</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA01/LOTE05.pdf" download="LOTE05.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 05</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA01/LOTE06.pdf" download="LOTE06.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 06</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA01/LOTE07.pdf" download="LOTE07.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 07</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA01/MANZANA01.pdf" download="MANZANA01.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">MANZANA 01</h5>
                    </a>
                  </div>
                </div>



              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                MANZANA 02
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">



                <div class="row">
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE08.pdf" download="LOTE08.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 08</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE09.pdf" download="LOTE09.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 09</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE10.pdf" download="LOTE10.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 10</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE11.pdf" download="LOTE11.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 11</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE12.pdf" download="LOTE12.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 12</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE13.pdf" download="LOTE13.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 13</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE14.pdf" download="LOTE14.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 14</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/LOTE15.pdf" download="LOTE15.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 15</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA02/MANZANA02.pdf" download="MANZANA02.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">MANZANA 02</h5>
                    </a>
                  </div>
                </div>
              
              
              
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                MANZANA 03
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">



                <div class="row">
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA03/LOTE16.pdf" download="LOTE16.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 16</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA03/LOTE17.pdf" download="LOTE17.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 17</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA03/LOTE18.pdf" download="LOTE18.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 18</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA03/LOTE19.pdf" download="LOTE19.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 19</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA03/LOTE20.pdf" download="LOTE20.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 20</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA03/LOTE21.pdf" download="LOTE21.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 21</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA03/LOTE22.pdf" download="LOTE22.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 22</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA03/LOTE23.pdf" download="LOTE23.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 23</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA03/LOTE24.pdf" download="LOTE24.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 24</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA03/LOTE25.pdf" download="LOTE25.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 25</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA03/LOTE26.pdf" download="LOTE26.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 26</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA03/LOTE27.pdf" download="LOTE27.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 27</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA03/MANZANA03.pdf" download="MANZANA03.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">MANZANA 03</h5>
                    </a>
                  </div>
                </div>
              
              
              
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
                MANZANA 04
              </button>
            </h2>
            <div id="collapseThree1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">



                <div class="row">
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA04/LOTE28.pdf" download="LOTE28.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 28</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA04/LOTE29.pdf" download="LOTE29.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 29</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA04/LOTE30.pdf" download="LOTE30.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 30</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA04/LOTE31.pdf" download="LOTE31.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 31</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA04/LOTE32.pdf" download="LOTE32.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 32</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA04/LOTE33.pdf" download="LOTE33.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 33</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA04/LOTE34.pdf" download="LOTE34.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 34</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA04/LOTE35.pdf" download="LOTE35.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 35</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA04/LOTE36.pdf" download="LOTE36.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 36</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA04/LOTE37.pdf" download="LOTE37.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 37</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA04/LOTE38.pdf" download="LOTE38.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 38</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA04/LOTE39.pdf" download="LOTE39.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 39</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA04/LOTE40.pdf" download="LOTE40.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 40</h5>
                    </a>
                  </div>
                </div>
              
              
              
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
                MANZANA 05
              </button>
            </h2>
            <div id="collapseThree2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">



                <div class="row">
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA05/AREAVERDE01.pdf" download="AREAVERDE01.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">ÁREA VERDE 01</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA05/LOTE41.pdf" download="LOTE41.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 41</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA05/LOTE42.pdf" download="LOTE42.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 42</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA05/LOTE43.pdf" download="LOTE43.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 43</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA05/LOTE44.pdf" download="LOTE44.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 44</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA05/LOTE45.pdf" download="LOTE45.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 45</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA05/LOTE46.pdf" download="LOTE46.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 46</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA05/LOTE47.pdf" download="LOTE47.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 47</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA05/LOTE48.pdf" download="LOTE48.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 48</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA05/LOTE49.pdf" download="LOTE49.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 49</h5>
                    </a>
                  </div>
                  
                </div>
              
              
              
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                MANZANA 06
              </button>
            </h2>
            <div id="collapseThree3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">



                <div class="row">
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA06/AREADEPARTAMENTOS01.pdf" download="AREADEPARTAMENTOS01.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">ÁREA DEPARTAMENTOS 01</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA06/AREAVERDE02.pdf" download="AREAVERDE02.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">ÁREA VERDE 02</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA06/LOTE50.pdf" download="LOTE50.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 50</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA06/LOTE51.pdf" download="LOTE51.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 51</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA06/LOTE52.pdf" download="LOTE52.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 52</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA06/LOTE53.pdf" download="LOTE53.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 53</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA06/LOTE54.pdf" download="LOTE54.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 54</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA06/LOTE55.pdf" download="LOTE55.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 55</h5>
                    </a>
                  </div>
                </div>
              
              
              
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4">
                MANZANA 07
              </button>
            </h2>
            <div id="collapseThree4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">



                <div class="row">
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA07/LOTE56.pdf" download="LOTE56.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 56</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA07/LOTE57.pdf" download="LOTE57.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 57</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA07/LOTE58.pdf" download="LOTE58.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 58</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA07/LOTE59.pdf" download="LOTE59.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 59</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA07/LOTE60.pdf" download="LOTE60.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 60</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA07/LOTE61.pdf" download="LOTE61.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 61</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA07/LOTE62.pdf" download="LOTE62.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 62</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA07/LOTE63.pdf" download="LOTE63.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 63</h5>
                    </a>
                  </div>
                </div>
              
              
              
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree5" aria-expanded="false" aria-controls="collapseThree5">
                MANZANA 08
              </button>
            </h2>
            <div id="collapseThree5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">



                <div class="row">
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA08/LOTE64.pdf" download="LOTE64.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 64</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA08/LOTE65.pdf" download="LOTE65.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 65</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA08/LOTE66.pdf" download="LOTE66.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 66</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA08/LOTE67.pdf" download="LOTE67.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 67</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA08/LOTE68.pdf" download="LOTE68.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 68</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA08/LOTE69.pdf" download="LOTE69.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 69</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA08/LOTE70.pdf" download="LOTE70.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 70</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA08/LOTE71.pdf" download="LOTE71.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 71</h5>
                    </a>
                  </div>
                </div>
              
              
              
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree6" aria-expanded="false" aria-controls="collapseThree6">
                MANZANA 09
              </button>
            </h2>
            <div id="collapseThree6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">



                <div class="row">
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA09/LOTE72.pdf" download="LOTE72.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 72</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA09/LOTE73.pdf" download="LOTE73.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 73</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA09/LOTE74.pdf" download="LOTE74.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 74</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA09/LOTE75.pdf" download="LOTE75.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 75</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA09/LOTE76.pdf" download="LOTE76.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 76</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA09/LOTE77.pdf" download="LOTE77.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 77</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA09/LOTE78.pdf" download="LOTE78.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 78</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA09/LOTE79.pdf" download="LOTE79.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 79</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA09/LOTE80.pdf" download="LOTE80.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 80</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA09/LOTE81.pdf" download="LOTE81.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 81</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA09/LOTE82.pdf" download="LOTE82.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 82</h5>
                    </a>
                  </div>
                </div>
              
              
              
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree7" aria-expanded="false" aria-controls="collapseThree7">
                MANZANA 10
              </button>
            </h2>
            <div id="collapseThree7" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">



                <div class="row">
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA10/LOTE83.pdf" download="LOTE83.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 83</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA10/LOTE84.pdf" download="LOTE84.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 84</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA10/LOTE85.pdf" download="LOTE85.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 85</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA10/LOTE86.pdf" download="LOTE86.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 86</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA10/LOTE87.pdf" download="LOTE87.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 87</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA10/LOTE88.pdf" download="LOTE88.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 88</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA10/LOTE89.pdf" download="LOTE89.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 89</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA10/LOTE90.pdf" download="LOTE90.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 90</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA10/LOTE91.pdf" download="LOTE91.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 91</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA10/LOTE92.pdf" download="LOTE92.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 92</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA10/LOTE93.pdf" download="LOTE93.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 93</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA10/LOTE94.pdf" download="LOTE94.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 94</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA10/LOTE95.pdf" download="LOTE95.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 95</h5>
                    </a>
                  </div>
                </div>
              
              
              
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree8" aria-expanded="false" aria-controls="collapseThree8">
                MANZANA 11
              </button>
            </h2>
            <div id="collapseThree8" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">



                <div class="row">
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA11/LOTE96.pdf" download="LOTE96.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 96</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA11/LOTE97.pdf" download="LOTE97.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 97</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA11/LOTE98.pdf" download="LOTE98.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 98</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA11/LOTE99.pdf" download="LOTE99.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 99</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA11/LOTE100.pdf" download="LOTE100.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 100</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA11/LOTE101.pdf" download="LOTE101.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 101</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA11/LOTE102.pdf" download="LOTE102.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 102</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA11/LOTE103.pdf" download="LOTE103.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 103</h5>
                    </a>
                  </div>
                </div>
              
              
              
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree9" aria-expanded="false" aria-controls="collapseThree9">
                MANZANA 12
              </button>
            </h2>
            <div id="collapseThree9" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">



                <div class="row">
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA12/DEPARTAMENTOS2.pdf" download="DEPARTAMENTOS2.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">DEPARTAMENTOS 02</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA12/LOTE104.pdf" download="LOTE104.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 104</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA12/LOTE105.pdf" download="LOTE105.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 105</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA12/LOTE106.pdf" download="LOTE106.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 106</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA12/LOTE107.pdf" download="LOTE107.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 107</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA12/LOTE108.pdf" download="LOTE108.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 108</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA12/LOTE109.pdf" download="LOTE109.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 109</h5>
                    </a>
                  </div>
                  <div class="col-md-2 mx-2 mb-3">
                    <a class="text-decoration-none" href="documentos/MANZANA12/LOTE110.pdf" download="LOTE110.pdf">
                      <img class="w-100" src="img/pdfd.png" alt="">
                      <h5 class="text-center mt-2 text-black">LOTE 110</h5>
                    </a>
                  </div>
                </div>
              
              
              
              </div>
            </div>
          </div>
        </div>
      
      </div>

    
    
    </div>
    <div class="tab-pane fade" id="v-pills-newsec8" role="tabpanel" aria-labelledby="v-pills-newsec8-tab" tabindex="0">
    
    
      <div class="w-100">
        <h4 id="" class="subtitle text-center">Royal County San José Chakan</h4>
        <h1 id="" class="tit text-center">Renders</h1>

     


          
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
    <div class="tab-pane fade" id="v-pills-newsec9" role="tabpanel" aria-labelledby="v-pills-newsec9-tab" tabindex="0">
    
    
      <div class="w-100">
        <h4 id="stitinm6" class="subtitle text-center">Ubicación </h4>
        <h1 id="titinm8" class="tit text-center mb-5">satelital</h1>

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