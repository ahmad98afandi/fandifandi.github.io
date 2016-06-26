<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ahmad Afandi</title>
<link rel="stylesheet" href="http://localhost/dua/assets/css/master.css" media="screen" title="no title" charset="utf-8">
<link rel="shortcut icon" href="http://localhost/dua/icon.jpg">
  </head>
  <body>
<nav>
<h1><a href="http://localhost/dua">Ahmad Afandi</a></h1>

  <ul>
<input type="text" class="search" name="name" maxlength="150" placeholder="Search here..."><input type="button" class="cari" name="name" value="Cari">
    <li><a href="http://localhost/dua">Home</a></li>
    <li><a href="http://localhost/dua/kanal/cerpen/">Cerpen</a></li>
    <li><a href="http://localhost/dua/kanal/puisi/">Puisi</a></li>
    <li><a href="http://localhost/dua/kanal/celoteh/">Ngalor-Ngidul</a></li>
    <li><a href="http://localhost/dua/kanal/gallery/">Gallery</a></li>
    <li><a href="#">Page</a>
      <ul>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </li>
    <!--<li><a href="http://localhost/dua/artikel/pertama/">1</a></li>-->
  </ul>
</nav>

<div id="atas">
<?php
  if(isset($_GET['i'])){
    if($_GET['i']=="cerpen"){include 'page/cerpen.php';}
    if($_GET['i']=="puisi"){include 'page/puisi.php';}
    if($_GET['i']=="celoteh"){include 'page/celoteh.php';}
    if($_GET['i']=="gallery"){include 'page/gallery.php';}
  }
  #else if(isset($_GET['page'])){
  #  if($_GET['page']=="about"){echo "Artikel pertama";}
  #  if($_GET['page']=="pertama"){echo "Artikel pertama";}
  #}
else{
  echo "
  </div>
  <div id=\"bawah\">
    <p class=\"greeting\">
      Pelajar Teknik yang gemar sastra serta jurnalistik, tanpa meninggalkan bidangnya (( :
    </p>

    <img src=\"assets/img/1fan.JPG\" alt=\"Ahmad Afandi\" height=\"350\" width=\"350\" />

    <div class=\"more\"><a class=\"link\" href=\"#kontak\">Contact</a></div>
    <br>

    <div id=\"kontak\"></div>


  </div>
  ";
}
?>





  </body>
</html>
