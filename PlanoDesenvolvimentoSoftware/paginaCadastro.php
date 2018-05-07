<!-- <!DOCTYPE html>
<html>
<title>W3.CSS Template/PacJogosIfc</title>
<title>W3.CSS Template/PacJogosIfc</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../css/estilo.css">


<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
.w3-sidebar {
  z-index: 3;
  width: 250px;
  top: 43px;
  bottom: 0;
  height: inherit;
}
</style>
<body>


<!-- Navbar -->
<!-- <div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    <a href="../index.html" class="w3-bar-item w3-button w3-theme-l1">PacJogosIfc</a>
    <a href="paginaLogin.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Login</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Values</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">News</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">Clients</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">Partners</a>
  </div>
</div> --> 

<!-- Cadasreo das Resenhas -->


<?php
if(isset($_SESSION['login'])){        
?>    
    
    <form method="POST"  action="insereProfessor.php" enctype="multipart/form-data" class="ajeita">
          <label for="siape">SIAPE</label>
          <input type="text" name="siape">
          <br>
          <label for="nome">Nome</label>
          <input type="text" name="nome">
          <br>
          <label for="email">E-mail</label>
          <input type="email" name="email">
          <br>
          <label for="foto">Foto</label>
          <input type="file" name="foto">
          <br><br>
          <input type="submit" name="Gravar" value="enviar">
    </form>
  </div>

<?php
  }else{
    echo('<meta http-equiv="refresh"content="0;url=listaProfessores.php">');
  }
?>
    </section>
  
  </article>

<?php 
  include ("rodape.php");
 ?>
