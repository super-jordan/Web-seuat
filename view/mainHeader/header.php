
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <link rel="stylesheet" href="../../public/css/estilos.css">
  <link rel="stylesheet" href="../../public/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="../../public/css/bootstrap-grid.min.css">

  	<link rel="stylesheet" type="text/css" href="../../public/css/menu_home.css">
	<script type="text/javascript" src="../../public/js/jquery.js"></script>
	<script type="text/javascript" src="../../public/js/function.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
  
  
  
  <div class="container-fluid AzulOficialSeuat ">  

    <div class="container">
        <div class="row pt-10 white-text SizeTexto-12">
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                <p> <i class="fas fa-headset fa-sm white-text"></i> 01 800 8908403  &nbsp;&nbsp; | &nbsp;&nbsp; <i class="fas fa-envelope fa-sm white-text"></i> inscripcion@seuat.mx</p>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                <!--<p><a class="logo pt-4" href="#"><img src="images/logo_seuat_desktop_blanco.png" width="220" height="40" alt="fresh design web"></a></p>-->
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 align-right">
                <p> <a href="#"><i class="fab fa-facebook-f white-text"></i></a> &nbsp;&nbsp; <a href="#"><i class="fab fa-youtube white-text"></i></a> &nbsp;&nbsp; <a href="#"><i class="fab fa-instagram white-text"></i></a>  &nbsp;&nbsp; <a href="#" class="white-text"> Escribenos</a> &nbsp;&nbsp;|&nbsp;&nbsp;  <a href="#" class="white-text"> Preinscripción</a>  </p>
            </div>	
            <!--<div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 align-right">
                <p><a class="logo pt-4" href="#"></a>Escribenos</p>
            </div>-->
        </div>
    </div>
</div>





<div class="container-fluid">  <!--purple accent-4-->

	<div class="container">
		<div class="row">
		    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
          <div id="wrap">
            <header>
              <div class="inner relative">
                <a class="logo pt-4" href="http://localhost/web-seuat/"><img 
                  <?php 
                      if ($paginaweb == 'index_carpetas'){
                        echo 'src="../../public/images/logo_seuat_desktop.png" width="220" height="45"  alt="SEUAT"';
                      }elseif ($paginaweb == 'home'){
                        echo 'src="public/images/logo_seuat_desktop.png" width="220" height="45"  alt="SEUAT"';
                      }else{
                        echo '';
                      }
                  ?>>
                </a>
                <a id="menu-toggle" class="button" href="#"><i class="fas fa-bars fa-xl text-darken-2"></i></a>
                <nav id="navigation">
                  <!-- <ul id="main-menu">
                    <li class="current-menu-item"><a href="index">SEUAT</a></li>
                    <li class="parent">
                      <a href="#">Planteles</a>
                      <ul class="sub-menu">
                        <li><a href="#"> Tuxtla Gutiérrez</a></li>
                        <li><a href="#">  Yajalón</a></li>
                        <li><a href="#"> Reforma</a></li>
                        <li>
                          <a class="parent" href="#"> Tapachula</a>
                          
                          <ul class="sub-menu">
                            <li><a href="#">1</a></li>
                            <li><a href="#">2r</a></li>
                            <li><a href="#">3r</a></li>
                            <li><a href="#">4</a></li>
                          </ul>--
                        </li>
                      </ul>
                    </li>
                    <li><a href="#">Secundaria</a></li>
                    <li><a href="#">Bachillerato</a></li>
                    <li><a href="#">Licenciaturas</a></li>
                    <li class="parent">
                      <a href="#">Posgrados</a>
                      <ul class="sub-menu">
                        <li><a href="#">Especialidades</a></li>
                        <li><a href="#">Maestrías</a></li>
                        <li><a href="#">Doctorados</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Directorio</a></li>
                    <li><a href="#">Egresados</a></li>
                    <li><a href="#">Contacto</a></li>
                  </ul> -->
          
                  <ul id="main-menu">
                <li class="current-menu-item"><a href="http://localhost/web-seuat/">SEUAT</a></li>
                <li class="parent">
                  <a href="#">Planteles</a>
                  <ul class="sub-menu">
                    <li><a href="http://localhost/web-seuat/view/planteles/Tuxtla_Gtrz.php"> Tuxtla Gutiérrez</a></li>
                    <li><a href="http://localhost/web-seuat/view/planteles/Yajalon.php">  Yajalón</a></li>
                    <li><a href="http://localhost/web-seuat/view/planteles/Reforma.php"> Reforma</a></li>
                    <li>
                      <a class="parent" href="http://localhost/web-seuat/view/planteles/Tapachula.php"> Tapachula</a>
                      <!--
                      <ul class="sub-menu">
                        <li><a href="#">1</a></li>
                        <li><a href="#">2r</a></li>
                        <li><a href="#">3r</a></li>
                        <li><a href="#">4</a></li>
                      </ul>-->
                    </li>
                    <li><a href="http://localhost/web-seuat/view/planteles/Tapilula.php"> Tapilula</a></li>
                    <li><a href="http://localhost/web-seuat/view/planteles/Comitan.php"> Comitán</a></li>
                    <li><a href="http://localhost/web-seuat/view/planteles/Campeche.php"> Campeche</a></li>
                  </ul>
                </li>
                <li><a href="http://localhost/web-seuat/view/secundaria/">Secundaria</a></li>
                <li class="parent">
                  <a href="#">Media Superior</a>
                  <ul class="sub-menu">
                    <li><a href="http://localhost/web-seuat/view/bachillerato_general/">Bachillerato General <!--CEJHET--></a></li>
                    <li><a href="http://localhost/web-seuat/view/preparatoria_abierta/">Centro de Asesoría de Preparatoria Abierta <!--CEJHET--></a></li>
                    <li><a href="http://localhost/web-seuat/view/bachillerato_tecnologico/">Bachillerato Tecnológico <!--ITECH--></a></li>
                  </ul>
                </li>
                <li><a href="http://localhost/web-seuat/view/licenciaturas/">Licenciaturas</a></li>
                <li class="parent">
                  <a href="#">Posgrados</a>
                  <ul class="sub-menu">
                    <li><a href="http://localhost/web-seuat/view/especialidades/">Especialidades</a></li>
                    <li><a href="http://localhost/web-seuat/view/maestrias/">Maestrías</a></li>
                    <li><a href="http://localhost/web-seuat/view/doctorados/">Doctorados</a></li>
                  </ul>
                </li>
                <li><a href="http://localhost/web-seuat/view/egresados/">Egresados</a></li>
                <li><a href="http://localhost/web-seuat/view/directorios/">Directorio</a></li>
              </ul>
          
                </nav>
                <div class="clear"></div>
              </div>
            </header> 
          </div> 
		    </div>
		</div>
	</div>
</div>

  