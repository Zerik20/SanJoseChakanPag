<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal County San José Chakan | Boletín</title>
    <?php
    include('templates/link.php');
    ?>


</head>
<body>
<?php include('templates/header.php'); ?>
<script src="idiomas/lengart.js"></script>




<div id="cont-acerca-de" class="" style="background-image: url('img/ac.jpg') !important;">

    <div class="overlay h-100 w-100 d-flex justify-content-center align-items-end">
    
        
    </div>

</div>

<div class="container cont1-boletin my-5 py-5">
    <div class="p-3"></div>
    <h1 id="actit" class="tit text-center" data-aos="fade-up" style="color: brown;" data-section="CuliArt" data-value="TitCuliArt">Arte Culinario</h1>
    <div class="p-4 m-4"></div>
    <div class="row">
        <div class="col-md-8">
            <h1 id="actit" class="tit" data-aos="fade-up" style="margin-bottom: 20px; text-align: center; color: brown;" data-section="CuliArt" data-value="NomRestCuliArt">Restaurante 1900</h1>
            <a data-section="CuliArt" data-value="RestDescCuliArt">Toma su nombre por la fecha en que fue fundada la hacienda, es atendido por la</a> <a style="font-weight: bolder; color: brown;" data-section="CuliArt" data-value="ChefCuliArt">Chef Helene Clauw</a> <a data-section="CuliArt" data-value="RestDesc2CuliArt"> quien además es la fundadora de </a> <a style="font-weight: bolder; color: brown;">San José Chakán,</a> <a data-section="CuliArt" data-value="RestDesc3CuliArt">vivirás una experiencia gastronómica sin igual, con un sinfín de platillos tradicionales de la comida francesa y europea.</a> <br><br>
            <p data-section="CuliArt" data-value="HorarioCuliArt">Horario: Domingo de 1-6 pm</p>
            <P data-section="CuliArt" data-value="AdverCuliArt">Solo con reservación:</p>
            <p data-section="CuliArt" data-value="ReserCuliArt">Reserva aquí:</p>
            <a href="tel:9997389321">999 738 93 21</a><br>
            <a href="tel:9997389319">999 738 93 19</a><br>
            <div class="text-left">
    <button data-section="CuliArt" data-value="BotonCuliArt" onclick="window.open('img/MenuFrances.png', '_blank')" style="background-color: brown; /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 30px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
        border-radius: 10px;">Visita el menú del día</button>
        <!--button data-section="CuliArt" data-value="BotonCuliArtPro" onclick="window.open('img/DiaDelPadre.png', '_blank')" style="background-color: brown; /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 30px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
        border-radius: 10px;">Promoción</!--button-->
</div>

        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-4">
                    <img src="img/res.jpeg" alt="Imagen 1" class="img-fluid">
                </div>
                <div class="col-6">
                    <img src="img/pavo1.jpeg" alt="Imagen 2" class="img-fluid">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-6">
                    <img src="img/res3.jpeg" alt="Imagen 3" class="img-fluid">
                </div>
                <div class="col-6">
                    <img src="img/res2.jpeg" alt="Imagen 4" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

</div>




<div class="p-5 m-5"></div>
<div class="p-5 m-5"></div>
<div class="p-5 m-5"></div>



<!--JAVASCRIPT ANIMACIONES-->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<?php include('templates/footer.php'); ?>
</body>
</html>