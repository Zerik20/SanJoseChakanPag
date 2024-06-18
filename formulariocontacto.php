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
<div id="cont-acerca-de" class="" style="background-image: url('img/GolfBall.jpg') !important;">

    <div class="overlay h-100 w-100 d-flex justify-content-center align-items-end">
    
        
    </div>

</div>
<style>
    .responsive-iframe-container {
        position: relative;
        width: 100%;
        max-width: 800px; /* Ancho máximo del formulario */
        height: 800px; /* Altura máxima del formulario */
        margin: 0 auto; /* Centrar el contenedor */
    }
    
    .responsive-iframe-container iframe {
        width: 100%;
        height: 100%;
        border: none; /* Quitar el borde del iframe */
    }
</style>

<div style="text-align: center; margin-bottom: 20px;">
    <div class="responsive-iframe-container">
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSc4hDKdL6SBvFJ8AmnACNd8JwP4hH8OAJZSfkk0iZ1any0vxA/viewform?embedded=true" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>
    </div>
</div>




<!--JAVASCRIPT ANIMACIONES-->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<?php include('templates/footer.php'); ?>
</body>
</html>