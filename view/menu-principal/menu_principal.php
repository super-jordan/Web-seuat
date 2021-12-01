  <div id="wrap">
  <header>
    <div class="inner relative">
      
    <?php 
    //<a class="logo pt-7" href="#"><img src="../images/logo_seuat_desktop_blanco.png" width="220" height="45" alt="SEUAT"></a>

    if ($paginaweb == 'raiz'){
      echo '
        <a class="logo pt-7" href="http://localhost/web-seuat/"><img src="../../public/images/logo_seuat_desktop_blanco.png" width="220" height="45" alt="SEUAT"></a>

    <a id="menu-toggle" class="button" href="#"><i class="fas fa-bars fa-xl white-text"></i></a>
      <nav id="navigation">
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
      ';
    }elseif ($paginaweb == 'primer_nivel'){
      echo '
       <a class="logo pt-7" href="http://localhost/web-seuat/"><img src="../../public/images/logo_seuat_desktop_blanco.png" width="220" height="45" alt="SEUAT"></a>

      <a id="menu-toggle" class="button" href="#"><i class="fas fa-bars fa-xl white-text"></i></a>
      <nav id="navigation">
        <ul id="main-menu">
          <li class="current-menu-item"><a href="http://localhost/web-seuat/">SEUAT</a></li>
          <li class="parent">
            <a href="#">Planteles</a>
            <ul class="sub-menu">
              <li><a href="http://localhost/web-seuat/view/planteles/Tuxtla_Gtrz.php"> Tuxtla Gutiérrez</a></li>
              <li><a href="http://localhost/web-seuat/view/planteles/Yajalon.php">  Yajalón</a></li>
              <li><a href="#"> Reforma</a></li>
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
      ';
    }else{
      echo '
        <a class="logo pt-4" href="http://localhost/web-seuat/"><img src="../../public/images/logo_seuat_desktop.png" width="220" height="45"  alt="SEUAT"></a>

              <a id="menu-toggle" class="button" href="#"><i class="fas fa-bars fa-xl white-text"></i></a>
      <nav id="navigation">
        <ul id="main-menu">
          <li class="current-menu-item"><a href="http://localhost/web-seuat/">SEUAT</a></li>
          <li class="parent">
            <a href="#">Planteles</a>
            <ul class="sub-menu">
              <li><a href="http://localhost/web-seuat/view/planteles/Tuxtla_Gtrz.php"> Tuxtla Gutiérrez</a></li>
              <li><a href="http://localhost/web-seuat/view/planteles/Yajalon.php">  Yajalón</a></li>
              <li><a href="#"> Reforma</a></li>
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
      ';
    }
    ?>


    </div>
  </header> 
  </div> 