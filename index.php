<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Guemil</title>
    <meta name="robots" content="noindex">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--ahora llamo los datos-->
    <?php
    $json = file_get_contents('data.json');
    $json_data = json_decode($json,true);
    $datos = array_values( $json_data );
    ?>
    <!--ya llamé a los dato-->
    <!--acá estoy parchando de manera cuma-->
    <?php $nombre_de_hoja = array("01_Man","02_Woman","05_Assembly_group","06_Assembly_family","07_Girl","08_Boy","09_Authority_instruction","25_Food");?>
    <!--dejo el arreglo para otro día-->
</head>
<body>
<div class="container">
<div class="row">
<div class="col-sm-12">
<h1>Probando-probando</h1>
<h2>Estoy leyendo a <a href="data.json">data.json</a></h2>
</div>

<?php for ($a = 0; $a < $all = count($datos); $a++) {?>
<div class="col-sm-12">
<h2>Qué nos han respondido para <?php echo($nombre_de_hoja[$a]);?></h2>
<h4>Tenemos <?echo (count($datos[$a]))?> respuestas:</h4>
<ol>
<?php for ($b = 0; $b < $respuesta = count($datos[$a]); $b++) {?>
<li><?php echo($datos[$a][$b]['respuesta']);?> <code><?php echo($datos[$a][$b]['puntaje']);?></code></li>
<?php };?>
</ol>
</div>
<?php };?>

<div class="clearfix"></div>
<div class="col-sm-12">
<code>
<?php echo '<pre>', print_r($datos), '</pre>';;?>
</code>
</div>

</div><!--/row-->
</div><!--/container-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
