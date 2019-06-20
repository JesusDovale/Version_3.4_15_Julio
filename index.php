<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Toro - Herbalife</title>
      <link rel="stylesheet" href="css/estilos.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">
      <link rel="icon" type="text/css" href="images/logo4.png">
      <script src="js/galeria.js"></script>
   </head>

   <style>
         .parallax { 
           background-image: url("images/imagen65.jpg");
           height: 800px; 
           background-attachment: fixed;
           background-position: center;
           background-repeat: no-repeat;
           background-size: cover;
         }

         .parallax2 { 
           background-image: url("images/2.gif");
           height: 758px; 
           opacity: 0.5;
           background-attachment: fixed;
           background-position: center;
           background-repeat: no-repeat;
           background-size: cover;
         }
      </style>

   <body>
      <div class="wrapper">
         <header class="parallax">
            <nav>
               <div class="menu-icon">
                  <i class="fa fa-bars fa-2x" ></i>
               </div>
               <div class="logo">
                  <img src="images/logo3.png" style="width: 50px; height: auto;">
               </div>
               <div class="menu">
                  <ul>
                     <li><a href="#"><i class="fas fa-home"></i> Inicio</a></li>
                     <li><a href="#"><i class="fas fa-book-medical"></i> Mi historia</a></li>
                     <li><a href="productos.php"><i class="fas fa-shopping-cart"></i> Productos</a></li>
                     <li><a href="#"><i class="fas fa-users"></i> Club Herbalife</a></li>
                     <li><a href="#"><i class="far fa-image"></i> Galeria</a></li>
                  </ul>
               </div>
            </nav>
            <div class="section">
              <h1>Herbalife Nutrition</h1>
              <h3>Para un mejor cuidado de tu cuerpo, prueba productos herbalife</h3>
              <button class="boton1">Ver mas</button> <button class="boton2">Sobre mi</button>
            </div>
         </header>

        <!-- Grid row -->
<div class="row">

  <!-- Grid column -->
  <center>
    <h1 style="color: gray;">Galeria de fotos</h1>
  </center>
 
  <!-- Grid column -->
  <br><br>
</div>
<!-- Grid row -->

<!-- Grid row -->
<div class="gallery" id="gallery">

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="images/imagen44.jpg" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="images/imagen56.jpg" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="images/imagen37.jpg" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="images/imagen15.jpg" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="images/imagen52.jpg" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="images/imagen14.jpg" alt="Card image cap">
  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->
<br><br>
<center>
<a href="galeria.html"><button class="btn-mas">Ver Mas</button></a>
</center>
<br><br>      
      </div>


      <div class="parallax2">
        
        
          <div class="section" style="height: 100vh">
            <div class="flex-center flex-column rgba-stylish-strong">

              <h2 class="" id="date" style="font-size: 45px"></h2>
              <h2 class="" id="time" style="font-size: 45px"></h2>
              <h2 style="font-size: 45px">Tiempo para un alimento balanceado <i class="far fa-thumbs-up"></i></h2>

            </div>
          </div>
      </div>


      
      <footer class="footer-distributed" style="background: url(images/textura.png);z-index: 2; background-attachment: fixed;">

      <div class="footer-left">

        <img src="images/logo4.png" style="height: 50px; width: 50px;">

        <p class="footer-links">
          <a href="#">Inicio</a>
          ·
          <a href="#">Ofertas</a>
          ·
          <a href="#">ubicacion</a>
          ·
          <a href="#">Sobre nosotros</a>
          ·
          <a href="#">Preguntas</a>
          ·
          <a href="#">Contactos</a>
        </p>

        <p class="footer-company-name">Del toro &copy; 2019</p>

        <div class="footer-icons">

          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-whatsapp"></i></a>

        </div>

      </div>

      <div class="footer-right">

        <p>Contactanos</p>

        <form action="#" method="post">

          <input type="text" name="email" placeholder="Email" />
          <textarea name="message" placeholder="mensage"></textarea>
          <button>enviar</button>

        </form>

      </div>

    </footer>





<!-----------------Codigos javascript-------------------->

<!--------------Header---------------->
      <script>
         $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });

      // Efecto Fade

      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
            }

            else {
                  $('nav').removeClass('black');
            }
      })
      </script>
<!--------------Header---------------->      


<!-------------Boton Flotante----------------->
      <span class="ir-arriba fas fa-chevron-up"></span>

      <script>
        
        $(document).ready(function(){
  $('.ir-arriba').click(function(){
    $('body, html').animate({
      scrollTop: '0px'
    }, 300);
  });
 
  $(window).scroll(function(){
    if( $(this).scrollTop() > 0 ){
      $('.ir-arriba').slideDown(300);
    } else {
      $('.ir-arriba').slideUp(300);
    }
  });
 
});
      </script>
<!-------------Boton Flotante----------------->

<!-----------TIEMPO------------>
<script>

function formatMmSs(arg) {
  if (arg < 10) return '0' + arg;
  else return arg;
}

function formatDateTime() {
  var formatted = new Date(Date.now()), day = formatted.getDay();
  var days = { 0: "Domingo", 1:"Lunes", 2:"Martes", 3:"Miercoles", 4:"Jueves", 5:"Viernes", 6:"Sabado"};
  var hours = formatted.getHours(), formatHours;
  if (hours > 12) formatHours = '' + (hours - 12) + 'PM';
  else if (hours == 0) formatHours = '12 PM';
  else formatHours = '' + hours + 'AM';
  $('#date').html('Hoy es ' + days[day]);
  $('#time').html(formatHours + ':' + formatMmSs(formatted.getMinutes()) + ':' + formatMmSs(formatted.getSeconds()));
}

setInterval(formatDateTime, 1000);

</script>
<!-----------TIEMPO------------>

<!----------------------Codigo Javascript--------------------->


      <script src="scroll.js"></script>
      <script src="https://kit.fontawesome.com/3c1091c862.js"></script>
      <script src="http://code.jquery.com/jquery-latest.js"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

   </body>
</html>