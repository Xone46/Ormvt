<html>
<?php
session_start();
$date=date("D dS M Y | h:i a");
?>
<head>

  <!-- ////////////////////////////////////////// -->
  <link rel="stylesheet" href="font/web-fonts-with-css/css/fontawesome-all.min.css">
  <!-- /////////////// Bootstrap ////////////////// -->
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap-4.1.1-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap-4.1.1-dist/css/bootstrap.min.js">
<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap-4.1.1-dist/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <!-- ///////////////// uikit /////////// -->
<link rel="stylesheet" href="uikit-3.0.0-beta.42/css/uikit.min.css"/>
<script src="uikit-3.0.0-beta.42/js/uikit.min.js"></script>
<script src="uikit-3.0.0-beta.42/js/uikit-icons.min.js"></script>
<!-- ///////////////// semantic ////////////////////// -->
<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="semantic/dist/semantic.min.js"></script>
<style type="text/css">
.b{
    background-color: white;
    height: 200px;
    width: 1200px;
    border: 5px #55acee solid;
    margin:auto;
    margin-top:20px;
    border-radius:40px;
}
.ba{
  float: left;
/*  padding-top:20px;*/
  margin:auto;
  margin-top:20px; 
  margin-left:220px;
}
.ba img {
  margin-top:10px; 
}
.ba span p{

  color:#55acee;
  width:#55acee ;
  size:20px;
}
.a{
  background-color: #f7f7f7;
  height:100px;
  margin:0px;

}
.aa{
  float:left;
  background-color: #f7f7f7;
  height:100px;
  width:800;
  margin:0px;
}
.aa img{
  height:80px;
  width:400;
  margin-left:200px;
}
.ab{
  float:left;
  background-color: #f7f7f7;
  height:100px;
  width:700;
  margin:0px;
}
.a .ab .aba {

   margin-left:300px;
   margin-top:25px;
}
#cssmenu ul,
#cssmenu li,
#cssmenu span,
#cssmenu a {
  margin: 0;
  padding: 0;
  position: relative;
}
#cssmenu {
  line-height: 1;
  border-radius: 5px 5px 0 0;
  -moz-border-radius: 5px 5px 0 0;
  -webkit-border-radius: 5px 5px 0 0;
  background: #141414;
  background: -moz-linear-gradient(top, #333333 0%, #141414 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #333333), color-stop(100%, #141414));
  background: -webkit-linear-gradient(top, #333333 0%, #141414 100%);
  background: -o-linear-gradient(top, #333333 0%, #141414 100%);
  background: -ms-linear-gradient(top, #333333 0%, #141414 100%);
  background: linear-gradient(to bottom, #333333 0%, #141414 100%);
  border-bottom: 2px solid #0fa1e0;
  width: auto;
}
#cssmenu:after,
#cssmenu ul:after {
  content: '';
  display: block;
  clear: both;
}
#cssmenu a {
  background: #141414;
  background: -moz-linear-gradient(top, #333333 0%, #141414 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #333333), color-stop(100%, #141414));
  background: -webkit-linear-gradient(top, #333333 0%, #141414 100%);
  background: -o-linear-gradient(top, #333333 0%, #141414 100%);
  background: -ms-linear-gradient(top, #333333 0%, #141414 100%);
  background: linear-gradient(to bottom, #333333 0%, #141414 100%);
  color: #ffffff;
  display: block;
  font-family: Helvetica, Arial, Verdana, sans-serif;
  padding: 19px 20px;
  text-decoration: none;
}
#cssmenu ul {
  list-style: none;
}
#cssmenu > ul > li {
  display: inline-block;
  float: left;
  margin: 0;
}
#cssmenu.align-center {
  text-align: center;
}
#cssmenu.align-center > ul > li {
  float: none;
}
#cssmenu.align-center ul ul {
  text-align: left;
}
#cssmenu.align-right > ul {
  float: right;
}
#cssmenu.align-right ul ul {
  text-align: right;
}
#cssmenu > ul > li > a {
  color: #ffffff;
  font-size: 12px;
}
#cssmenu > ul > li:hover:after {
  content: '';
  display: block;
  width: 0;
  height: 0;
  position: absolute;
  left: 50%;
  bottom: 0;
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-bottom: 10px solid #0fa1e0;
  margin-left: -10px;
}
#cssmenu > ul > li:first-child > a {
  border-radius: 5px 0 0 0;
  -moz-border-radius: 5px 0 0 0;
  -webkit-border-radius: 5px 0 0 0;
}
#cssmenu.align-right > ul > li:first-child > a,
#cssmenu.align-center > ul > li:first-child > a {
  border-radius: 0;
  -moz-border-radius: 0;
  -webkit-border-radius: 0;
}
#cssmenu.align-right > ul > li:last-child > a {
  border-radius: 0 5px 0 0;
  -moz-border-radius: 0 5px 0 0;
  -webkit-border-radius: 0 5px 0 0;
}
#cssmenu > ul > li.active > a,
#cssmenu > ul > li:hover > a {
  color: #ffffff;
  box-shadow: inset 0 0 3px #000000;
  -moz-box-shadow: inset 0 0 3px #000000;
  -webkit-box-shadow: inset 0 0 3px #000000;
  background: #070707;
  background: -moz-linear-gradient(top, #262626 0%, #070707 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #262626), color-stop(100%, #070707));
  background: -webkit-linear-gradient(top, #262626 0%, #070707 100%);
  background: -o-linear-gradient(top, #262626 0%, #070707 100%);
  background: -ms-linear-gradient(top, #262626 0%, #070707 100%);
  background: linear-gradient(to bottom, #262626 0%, #070707 100%);
}
#cssmenu .has-sub {
  z-index: 1;
}
#cssmenu .has-sub:hover > ul {
  display: block;
}
#cssmenu .has-sub ul {
  display: none;
  position: absolute;
  width: 200px;
  top: 100%;
  left: 0;
}
#cssmenu.align-right .has-sub ul {
  left: auto;
  right: 0;
}
#cssmenu .has-sub ul li {
  *margin-bottom: -1px;
}
#cssmenu .has-sub ul li a {
  background: #0fa1e0;
  border-bottom: 1px dotted #31b7f1;
  font-size: 11px;
  filter: none;
  display: block;
  line-height: 120%;
  padding: 10px;
  color: #ffffff;
}
#cssmenu .has-sub ul li:hover a {
  background: #0c7fb0;
}
#cssmenu ul ul li:hover > a {
  color: #ffffff;
}
#cssmenu .has-sub .has-sub:hover > ul {
  display: block;
}
#cssmenu .has-sub .has-sub ul {
  display: none;
  position: absolute;
  left: 100%;
  top: 0;
}
#cssmenu.align-right .has-sub .has-sub ul,
#cssmenu.align-right ul ul ul {
  left: auto;
  right: 100%;
}
#cssmenu .has-sub .has-sub ul li a {
  background: #0c7fb0;
  border-bottom: 1px dotted #31b7f1;
}
#cssmenu .has-sub .has-sub ul li a:hover {
  background: #0a6d98;
}
#cssmenu ul ul li.last > a,
#cssmenu ul ul li:last-child > a,
#cssmenu ul ul ul li.last > a,
#cssmenu ul ul ul li:last-child > a,
#cssmenu .has-sub ul li:last-child > a,
#cssmenu .has-sub ul li.last > a {
  border-bottom: 0;
}
.grame{
   margin-left:80px;
   margin-top:60px;
}
.grame div{
      float: left;
    list-style: none;
    padding-left: 5;
    background-color: #4a88cb;
    height: 35px;
    margin-left:5px;
    margin-right: 5px;
    border-radius:10px ;

}
.grame div h2{
      color:white;
}


</style>
</head>
<body>
  <div class='a'>
    <div class='aa'> 
         <img src='logo.png'>
    </div >
    <div class ='ab'>
       <div class = 'aba'>
      <button class="ui circular facebook icon button">
           <i class="facebook icon"></i>
      </button>
      <button class="ui circular twitter icon button">
          <i class="twitter icon"></i>
     </button>
     </button>
     <button class="ui circular google plus icon button">
         <i class="google plus icon"></i>
    </button>
      </div>
    </div>
  </div>
<div id='cssmenu'>
<ul style='float:left;'>
   <li><a href='#'><span>Accueil</span></a></li>
   <li class='active has-sub'><a href='#'><span>Presentation</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span>Mot du Directeur</span></a></li>
         <li class='has-sub'><a href='#'><span>Missions du Directeur</span></a></li>
         <li class='has-sub'><a href='#'><span>Localisation</span></a></li>
         <li class='has-sub'><a href='#'><span>Organigramme DRA</span></a></li>
         <li class='has-sub'><a href='#'><span>Biographie de Membres DRA</span></a></li>
         <li class='has-sub'><a href='#'><span>Ressources Humaines DRATT</span></a></li>
      </ul>
   </li>
  <li class='active has-sub'><a href='#'><span>DPA</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span></span></a></li>
         <li class='has-sub'><a href='#'><span></span></a></li>
         <li class='has-sub'><a href='#'><span></span></a></li>
         <li class='has-sub'><a href='#'><span></span></a></li>
         <li class='has-sub'><a href='#'><span></span></a></li>
         <li class='has-sub'><a href='#'><span>ORMVAL</span></a></li>
      </ul>
   </li>
    <li class='active has-sub'><a href='#'><span>Formations</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span>EFPA</span></a>
              <ul>
                <li class='has-sub'><a href='#'><span>Les Missions EFPA</span></a></li>
                <li class='has-sub'><a href='#'><span>Les Niveaux EFPA</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Mode de Formation</span></a>
             <ul>
                <li class='has-sub'><a href='#'><span>Formation  Initiale</span></a></li>
                <li class='has-sub'><a href='#'><span>Formation par Apprentissage</span></a></li>
            </ul>

         </li>
         <li class='has-sub'><a href='#'><span>Conditions d'accés</span></a>
             <ul>
                <li class='has-sub'><a href='#'><span>Niveau Technicien Spécialisé</span></a></li>
                <li class='has-sub'><a href='#'><span>Niveau Technicien</span></a></li>
                <li class='has-sub'><a href='#'><span>Niveau Qualifié</span></a></li>
                <li class='has-sub'><a href='#'><span>Niveau Apprentissage</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Vie dans l'etablissement</span></a></li>
      </ul>
   </li>
   <li class='active has-sub'><a href='#'><span>Suivi FDA</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span>Etat des subventions</span></a>
             <ul>
                <li class='has-sub'><a href='#'><span>Etat subventions 2011</span></a></li>
                <li class='has-sub'><a href='#'><span>Etat subventions 2012</span></a></li>
                <li class='has-sub'><a href='#'><span>Etat subventions 2013</span></a></li>
                <li class='has-sub'><a href='#'><span>Etat subventions 2014</span></a></li>
                <li class='has-sub'><a href='#'><span>Etat subventions 2015</span></a></li>
            </ul>
         </li>
      </ul>
   </li>
   <li class='active has-sub'><a href='#'><span>Galerie DRATT</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span>Galerie de photos</span></a></li>
         <li class='has-sub'><a href='#'><span>Galerie de vidèos</span></a></li>
      </ul>
   </li>
   <li class='last'><a href='#'><span>Contact</span></a></li>
</ul>
<div class="uk-margin" style="float:left; height:20px; margin-left:800px; margin-top:-10px ;" >
              <form class="uk-search uk-search-default">
                <span uk-search-icon></span>
                <input class="uk-search-input" type="search" placeholder="Search..." style='height:30px; margin-top:-25px ;'>
              </form>
</div>
</div>
<?php

if(isset($_GET['org']) or isset($_SESSION['org']) or isset($_SESSION['directeur']))
{
echo '
<button class="ui primary button" style=" margin-left: 680px; border-radius:10px; margin-top: 100px; width:300px;">
   <a href="index.php?directeur=1"><h3 style="color:white;"> Directeur Regional</h3></a>
</button>
';
$_SESSION['org'] = 1;
}

if(isset($_GET['directeur']) or isset($_SESSION['directeur']))
{

echo '
<div style=""></div>
<div style=""></div>
<div class = "grame">
<div><a href=""><a href=""><h2>Communication & Promotion</h2></a></div>
<div> <a href=""><h2>Statistique</h2></a> </div>
<div><a href=""><h2>ITA</h2></a></div>
<div><a href=""><h2>DBA</h2></a></div>
<div><a href=""><h2>Lycee Agricoles</h2></a></div>
<div><a href=""><h2>Coordination avec l ADA</h2></a> </div>
<div><a href=""> <h2>Controle de gestion</h2></a></div>
<div><a href=""><h2>Centre d insemination</h2></a></div>
</div>
<div class = "grame2">
<div><a href=""><h2>Developpement des filieres Agricoles</a></h2></div>
<div> <a href=""><h2>Irrigation et amenagement de l espace Agricole</h2></a></div>
<div><a href=""><h2>Partenariat et appui au developpement</h2></a></div>
<div><a href=""><h2>Support et Finances</h2></a></div>
</div>
';
$_SESSION['directeur'] = 2;
}

if(!isset($_GET['org']) and !isset($_GET['directeur'])){
echo "
<div class='uk-position-relative uk-visible-toggle uk-light' uk-slider='center: true' style='margin-top:20px;'>
    <ul class='uk-slider-items uk-grid uk-grid-match' uk-height-viewport='offset-top: true; offset-bottom: 30' style='height:400px;'>
        <li class='uk-width-3-4' style='height:400px;'>
            <div class='uk-cover-container'>
                <img src='3.jpg' alt='' uk-cover>
                <div class='uk-position-center uk-panel'></div>
            </div>
        </li>
        <li class='uk-width-3-4'>
            <div class='uk-cover-container' style='height:400px;'>
                <img src='2.jpg' alt='' uk-cover>
                <div class='uk-position-center uk-panel'></div>
            </div>
        </li>
        <li class='uk-width-3-4' style='height:400px;'>
            <div class='uk-cover-container'>
                <img src='1.jpg' alt='' uk-cover>
                <div class='uk-position-center uk-panel'>></div>
            </div>
        </li>
        <li class='uk-width-3-4'>
            <div class='uk-cover-container' style='height:400px;'>
                <img src='5.jpg' alt='' uk-cover height='400px'>
                <div class='uk-position-center uk-panel'></div>
            </div>
        </li>
    </ul>

    <a class='uk-position-center-left uk-position-small uk-hidden-hover' href='#' uk-slidenav-previous uk-slider-item='previous'></a>
    <a class='uk-position-center-right uk-position-small uk-hidden-hover' href='#' uk-slidenav-next uk-slider-item='next'></a>
</div>
<div class ='b'>
  <div class = 'ba'>
    <span><p>Application SIGEF </p></span>
    <img src='logoorg.jpg' height='120px' width='120px'>
    <p><a href='index.php?org=2' style=' color: #4183c4; text-decoration: none;position: relative;left: 50;top: 10px;'>Ici</a></p>
  </div>
  <div class = 'ba' >
    <span><p>Missions DRA  </p></span>
    <img src = 'logouser.jpg' height='100px' width='100px'>
   <p><a href='' style='position: relative; left: 40;'>Ici</a></p>
  </div>
    <div class = 'ba'>
      <span><p>Organigramme DRA </p></span>
    <img src='cap.jpg' height='100px' width='100px' style='position: relative; top: 10; '>
    <p><a href='' style='position: relative; top: 20; left: 45px; '>Ici</a></p>
  </div>
</div>";
}

?>


</body>
</html>
