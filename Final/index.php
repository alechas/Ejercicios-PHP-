<!DOCTYPE html>
<html>
<title>Final</title>

<?php  
session_start();
?>
<!-- JS Files -->
<script src="js/jquery.tools.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script type="text/javascript" src="FuncionesJava.js"></script>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2{font-family: "Raleway", sans-serif}
body, html {height: 100%}
p {line-height: 2}
.bgimg, .bgimg2 {
    min-height: 100%;
    background-position: center;
    background-size: cover;
    background-color: #FDC57E;
}
.bgimg2 {background-image: url("/w3images/flowers.jpg")}
</style>
<body style="background-color:#FDC57E;">
<!-- Caarga de botonera -->
<div class="w3-bottom w3-hide-small">
  <div class="w3-bar w3-white w3-center w3-padding w3-opacity-min w3-hover-opacity-off">
    <?php 
      require_once"php\gestor.php";
      Gestor::CargarBotonera();
    ?>
  </div>
</div>

<!-- Cargar secciones -->
    <?php 
      require_once"php\gestor.php";
      Gestor::CargarSecciones();
    ?>


<!-- RSVP modal -->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="padding:32px;max-width:600px">
    <div class="w3-container w3-white w3-center">
      <h1 class="w3-wide">CAN YOU COME?</h1>
      <p>We really hope you can make it.</p>
      <form>
        <input class="w3-input w3-border" type="text" placeholder="Name(s)" name="name">
      </form>
      <p><i>Sincerely, John & Jane</i></p>
      <div class="w3-row">
        <div class="w3-half">
          <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-block w3-green">Going</button>
        </div>
        <div class="w3-half">
          <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-block w3-red">Can't come</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-container w3-teal w3-black ">
  <!--<p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>   -->
<p align="center">Usuario <?php 
                                      require_once"php\gestor.php";
                                      Gestor::LogOut();
                                      ?>
                                        
                                      </p>
</footer>
<div class="w3-hide-small" style="margin-bottom:32px"> </div>

</body>
</html>