<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal County San José Chakan | Cotizador</title>
    <?php
    include('templates/link.php');
    ?>



</head>
<body>
<?php include('templates/header.php'); ?>
<script src="idiomas/lengacerca.js"></script>




<div id="cont-acerca-de" class="" style="background-image: url('img/img3.jpg') !important;">

    <div class="overlay h-100 w-100 d-flex justify-content-center align-items-end">
    
        
    </div>

</div>

<div class="container cont1-acerca-de my-5 py-5">
    <div class="row w-100 m-0 p-0 d-flex">
        <div class="col-md-6 row acerca-img">
            <div class="col-md-6 p-2">
                <div class="image-acerca" style="background-image: url('img/img4.jpg') !important; margin-top: -20px;"></div>
            </div>
            <div class="col-md-6 p-2">
                <div class="image-acerca" style="background-image: url('img/Pavo.jpeg') !important; margin-top: 20px;"></div>
            </div>
        </div>
        <div class="col-md-6 d-flex align-items-center p-5 acerca-info">
            <div data-aos="fade-up">
                <h4 id="subtitac" class="subtitleroboto " >Royal County San José Chakan</h4>
                <h1 id="titac" class="tit" data-section="AcercaDe" data-value="AcerTitCoti" style="color: brown;">Cotizador</h1>
                <div class="container">
    <form id="cotizador">
        <div class="form-group">
            <label for="precio">Precio Total de la casa:</label>
            <input type="number" id="precio" name="precio" value="0" class="form-control">
        </div>            
        <div class="form-group">
            <label for="enganche">Porcentaje de enganche:</label>
            <select id="enganche" name="enganche" class="form-control">
                <option value="30">30%</option>
                <option value="40">40%</option>
                <option value="50">50%</option>
                <option value="60">60%</option>
                <option value="70">70%</option>
                <option value="80">80%</option>
            </select>
        </div>
        <div class="form-group">
            <button type="button" onclick="calcularTotal()" class="btn btn-primary">Calcular Total</button>
        </div>
    </form>
    <div id="resultado" class="resultado"></div>
</div>

                </div>
                
            </div>
        </div>
        <br />
        <h3 class="tit" style="text-align: center;" >Aviso Legal</h3>
        <br />
        <p style="font-size: 12px;">
        El cotizador solo es para referencia, no representa las cantidades y los montos reales que deberán cubrirse al momento de la firma de contrato de promesa o escritura publica, no representa compromiso legal, material o económico por parte del PROYECTO “ROYAL COUNTY SAN JOSÉ CHAKAN” ni por parte de HEDONAI S.A DE C.V. o Constructora Multi-Servicios M.S. S.A de C.V.
        </p>
    </div>
    
</div>

<style>

.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
}

.form-group {
    margin-bottom: 20px;
}

.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.btn {
    padding: 10px 20px;
    background-color: #96443a;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.btn:hover {
    background-color: #964453;
}

.resultado {
    margin-top: 20px;
}

</style>

<!--JAVASCRIPT ANIMACIONES-->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
  function calcularTotal() {
    var precio = parseInt(document.getElementById('precio').value);
    var enganchePorcentaje = parseInt(document.getElementById('enganche').value);
    var enganche = precio * (enganchePorcentaje / 100);
    var precioRestante = precio - enganche;
    var mensualidad = precioRestante / 60;

    document.getElementById('resultado').innerHTML = 
        'Enganche: $' + enganche.toLocaleString('es-MX') + '<br>' +
        'Precio restante a 60 meses: $' + precioRestante.toLocaleString('es-MX') + '<br>' +
        'Mensualidad: $' + mensualidad.toLocaleString('es-MX');
}


</script>
<?php include('templates/footer.php'); ?>
</body>
</html>