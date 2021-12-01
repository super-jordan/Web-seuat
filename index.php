
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <link rel="stylesheet" href="public/css/estilos.css">
  <link rel="stylesheet" href="public/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="public/css/bootstrap-grid.min.css">

  	<link rel="stylesheet" type="text/css" href="public/css/menu_home.css">
	<script type="text/javascript" src="public/js/jquery.js"></script>
	<script type="text/javascript" src="public/js/function.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    


	

</head>

<body>

	<?php 
		$paginaweb = 'home';
		
		include 'view/seleccion_menu/seleccion_menu.php'; 

		include 'view/mainHeader/header.php';
	?>



      <!--
        <div class="row no-gutters">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 align-center Cover">
          	<img src="public/images/beneficios_seuat_2020.png" alt="" width="2500" height="450" class="responsivo">
          	<!--<img src="images/slider-25-aniversario.jpg" alt="" width="2124" height="450" class="responsivo">
          	
          </div>
        </div>
      -->

        <!--Banner-->

        <div class="container-fuid">
           <div class="row">
             <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

               <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
               <div class="carousel-inner">

                 <div class="carousel-item active">
                   <img src="public/images/beneficios_seuat_2020.png" width="100%" height="300px" class="d-block w-100" alt="...">
                 </div>

                <div class="carousel-item">
                   <img src="public/images/foto_lic_administracion_aduanas.jpeg" width="100%" height="300px" class="d-block w-100" alt="...">
                </div>

               <div class="carousel-item">
                  <img src="public/images/foto_lic_mercadotecnia.jpeg" width="100%" height="300px" class="d-block w-100" alt="...">
               </div>

               	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
               </button>

              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
              </button>

                </div>

  
                </div>
             </div>
           </div>
        </div>





         <div class="container-fluid FondoGris pt-27 pb-27">
         	<div class="container"><br>
        	  <div class="row">
        	    <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3">
        	   		<p><img src="public/images/logo.png" alt="" width="250" height="250" class="responsivo"></p>
        	    </div>
        	    <div class="col-sm-12 col-md-12 col-lg-9 col-xl-9"><br>
        	   	<p>El Sistema Educativo Universitario Azteca con sede en la ciudad de Tuxtla Gutiérrez, Chiapas, México, oferta más de 33 carreras relacionados al sector salud y administrativo. A 25 años de brindar servicios educativos en el nivel medio superior, superior y posgrados ha logrado consolidarse como universidad de calidad educativa, permitiendo realizar su expansión y establecerse en puntos específicos del estado de Chiapas y Campeche, beneficiando con ello a la educación de nuevos profesionistas altamente capacitados en su formación académica y práctica.</p><br>
        	   	<a class="btn-principal-borde" href="#" type="button">Conocer más</a>
        	    </div>    
        	  </div>
         	</div>
        </div>

          <br>


       <div class="container">



        <div class="row pt-27">
        	<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 align-center border">
            <p><img src="public/images/admisiones.png" alt="Admisiones" width="60" height="60" class="responsivo">
           	<h2>Admisiones</h2>
            	Información y requisitos para alumnos de nuevo ingreso todos los niveles.
            </p>
          </div>
        	<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 AzulOficialSeuat align-center white-text pt-17">
            <p><h2>¡Una elección inteligente!</h2>Nuestra misión formar jóvenes profesionistas, con aptitud emprendedora que les permita incorporarse y desarrollarse con éxito en el campo laboral.</p>
          </div>
        	<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 align-center border">
            <p><img src="public/images/becas.png" alt="Becas" width="60" height="60" class="responsivo">
           	<h2>Becas</h2>
            	Por que tu futuro sí nos importa, ofertamos diferentes planes de becas.
            </p>
          </div>
        </div>

      <br>
      <div class="division"></div>


        <div class="row pt-10">
        	<div class="col-sm-12 col-md-12 col-lg-3 col-xl-3  align-center">
            <p><img src="public/images/secundaria-op.png" alt="Secundaria" width="550" height="100" class="responsivo">
           	<!--<h2>Secundaria</h2>-->
            	Oferta educativa 2020, carreras del sector salud y administrativas.
            </p>
          </div>
        	<div class="col-sm-12 col-md-12 col-lg-3 col-xl-3  align-center">
            <p><img src="public/images/medio-superior-op.png" alt="Bachillerato" width="550" height="100" class="responsivo">
           	<!--<h2>Bachillerato</h2>-->
            	Estudia bachillerato escolarizado ó fines de semana.
            </p>
          </div>
        	<div class="col-sm-12 col-md-12 col-lg-3 col-xl-3  align-center">
            <p><img src="public/images/licenciaturas-op.png" alt="Licenciaturas" width="550" height="100" class="responsivo">
           	<!--<h2>Licenciaturas</h2>-->
            	Administrativas y en salud. Plan semestral y cuatrimestral.
            </p>
          </div>
        	<div class="col-sm-12 col-md-12 col-lg-3 col-xl-3  align-center">
            <p><img src="public/images/posgrados-op.png" alt="Posgrados" width="550" height="100" class="responsivo">
           	<!--<h2>Posgrados</h2>-->
            	Especialidades, Maestrías y Doctorados en 1 año y cuatro meses.
            </p>
          </div>    
        </div>

      </div>



      <br>

      <div class="container-fluid AzulOficialSeuat white-text align-center pt-27 pb-27 mt-20">
      	<div class="container">
      		<div class="row">
      	  		<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
      	  			<h2><br>Radio Universitaria<br>
      					Radiofónicos informativos y musicales<br><br>
      				</h2>
      			</div>	
      	  		<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
      	  			<h2><br>Educación a distancia<br>
      					Educación a Mixta<br><br>
      				</h2>
      	  		</div>
      	  	</div>
      	</div>
      </div>




      <br>
      <div class="container pt-27 mt-10">




        <div class="row">
        	<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h2>Noticias </h2>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
          	<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 secondary">
      	      <p><br><br><br><br>Foto <br><br><br><br></p>
      	    </div>
            <p>
      		Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
            </p>

          </div>

              <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
          	<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 secondary">
      	      <p><br><br><br><br>Foto <br><br><br><br></p>
      	    </div>
            <p>
      		Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
            </p>

          </div>

              <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
          	<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 secondary">
      	      <p><br><br><br><br>Foto <br><br><br><br></p>
      	    </div>
            <p>
      		Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
            </p>

          </div>

        </div>


      <div class="division"></div>






       </div>

      <!-- Optional JavaScript; choose one of the two! -->

          <!-- Option 1: Bootstrap Bundle with Popper -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

          <!-- Option 2: Separate Popper and Bootstrap JS -->
          <!--
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
          -->




           <?php include 'view/mainFooter/footer.php'; ?>

</body>
</html>
