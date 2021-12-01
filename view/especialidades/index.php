<?php 
$paginaweb = 'primer_nivel';
include '../seleccion_menu/seleccion_menu.php'; 
?>





<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Especialidades</title>
</head>

<body>

    <?php 
        /*$paginaweb = 'index_carpetas';
        
        include '../seleccion_menu/seleccion_menu.php'; 

        include '../mainHeader/header.php';*/
    ?>

<div class="container-fluid FondoColorPosgrados">  <!--purple accent-4-->

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <p><?php include '../menu-principal/menu_principal.php'; ?></p>
        </div>
    </div>
</div>	



<div class="container mt-2">
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-10 col-xl-10">
    <div class="NivelEducativo pt-7">IESSIC - IESA</div>
      <div class="TituloCarreraCabecera">Especialidades</div><br>
  <div class="ReconocimientoyValidez pt-3">Instituto de Estudios Superiores Sor Juana Inés de la Cruz | Instituto de Estudios Superiores Aduanales</div>
</div>
</div>

</div>
</div>


<p><br></p>


<div class="container pt-27">

<!--
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <h2 class="text-muted text-center"><b>Licenciaturas</b> <img class="" style="display: block; margin-left: auto; margin-right: auto;" src="/images/bg-line.png" alt="" width="264" height="14" /> <br /><br /></h2>
    </div>
</div>
-->

<div class="row" mt-20><!--
    <div class="col-sm-12 col-md-12 col-lg-12">
        <p style="font-size: 24px;"><b>Áreas de salud</b></p>
        <p>Estudia Licenciaturas en salud en plan semestral y cuatrimestral disponibles en la Modalidad Escolarizado y Semiescolarizado Horarios flexibles.</p>
    </div>-->
</div>


<div class="row">

    <div class="col-sm-12 col-md-4 col-lg-4">
        <div class="card-carreras text-center pt-27 pb-27">
            <a href="http://localhost/web-seuat/view/especialidades/enfermeria-quirurgica.php"><b>Efermeria Quirurgica</b></a><br>
            <small><b>Disponible en:</b> Tuxtla Gutiérrez</small>
        </div>
    </div>

    <div class="col-sm-12 col-md-4 col-lg-4">
        <div class="card-carreras text-center pt-27 pb-27">
            <a href="http://localhost/web-seuat/view/especialidades/cuidados-intensivos.php"><b>Efermeria en cuidados intensivos</b></a><br>
            <small><b>Disponible en:</b> Tuxtla Gutiérrez</small>
        </div>
    </div>

    <!--


    <div class="col-sm-12 col-md-4 col-lg-2">
        <div class="card-carreras text-center pt-27 pb-27">
            <a href="http://localhost/web-seuat/view/especialidades/obstetricia.php"><b>Obstetricia</b></a>
            <small><b>Disponible en:</b>Tuxtla Gutiérrez</small>
        </div>
    </div>

-->

            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="card-carreras text-center pt-27 pb-27">
                    <a href="http://localhost/web-seuat/view/maestrias/obstetricia.php"><b>Obstetricia</b></a><br>
                    <small><b>Disponible en:</b> Tuxtla Gutiérrez</small>
                </div>
            </div>
</div>

</div>

<p><br /><br /><br /></p>

<p><br /><br /><br /></p>


</div>


<p><br /><br /><br /></p>




    
    <br>
    <?php include '../mainFooter/footer.php'; ?>
    
</body>
</html>