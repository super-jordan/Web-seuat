<?php 
    if ($paginaweb == 'raiz'){
      echo '
      <link rel="stylesheet" href="../../public/css/estilos.css">
      <link rel="stylesheet" href="../../public/css/bootstrap-reboot.min.css">
      <link rel="stylesheet" href="../../public/css/bootstrap-grid.min.css">
      <link rel="stylesheet" href="../../public/css/menu.css">
      <link rel="stylesheet" href="../../public/css/pie_de_pagina.css">
      ';
    }elseif ($paginaweb == 'primer_nivel'){
      echo '
      <link rel="stylesheet" href="../../public/css/estilos.css">
      <link rel="stylesheet" href="../../public/css/bootstrap-reboot.min.css">
      <link rel="stylesheet" href="../../public/css/bootstrap-grid.min.css">
      <link rel="stylesheet" href="../../public/css/menu.css">
      <link rel="stylesheet" href="../../public/css/pie_de_pagina.css">
      ';
    }elseif ($paginaweb == 'index_carpetas'){
      echo '
      <link rel="stylesheet" href="../../public/css/estilos.css">
      <link rel="stylesheet" href="../../public/css/bootstrap-reboot.min.css">
      <link rel="stylesheet" href="../../public/css/bootstrap-grid.min.css">
      <link rel="stylesheet" href="../../public/css/menu.css">
      <link rel="stylesheet" href="../../public/css/pie_de_pagina.css">
      ';
    }elseif ($paginaweb == 'home'){
      echo '
      <link rel="stylesheet" href="public/css/estilos.css">
      <link rel="stylesheet" href="public/css/bootstrap-reboot.min.css">
      <link rel="stylesheet" href="public/css/bootstrap-grid.min.css">
      <link rel="stylesheet" href="public/css/menu_home.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
      <link rel="stylesheet" href="public/css/pie_de_pagina.css">
      ';
    }else{
      echo '';
    }
?>