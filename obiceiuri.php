<?php 
require('./includes/functions.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo SITETITLE;?></title>
<style>
body { 
    background-image: url(berries.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center; 
    background-attachment: fixed;
}




div.transbox {
  position:absolute;
  left:45px;
  Width: 1170px;
  height: 1100px;
  background-color: #ffffff;
  border: transparent;
  opacity: 0.8;
  filter: alpha(opacity=60); 
}

div.transbox p {
  margin: 3%;
  font-weight: bold;
  color: black;
}


#header {
    background-color:black;
    color:white;
    opacity: 0.9;
    padding:5px;
    margin: 3%;
}

a:link {
    color: white;
    background-color: transparent;
    text-decoration: none;
}


h1{
   text-align: center
}

/*drop down table*/
.dropbtn {
	background-color:black;
	color: white;
	padding: 16px;
	font-size: 35px;
	border: none;
	cursor: pointer;
}

.dropdown {
	position: relative;
	display: inline-block;
}
.dropdown-content {
	display: none;
	position: absolute;
	right: 0;
	background-color: indigo;
	min-width: 500px;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
opacity: 0.9;
}


.dropdown-content a {
	color: white;
	padding: 12px 16px;
	text-decoration: none;
	display: block;
}

.dropdown-content a:hover {background-color: indigo}

.dropdown:hover .dropdown-content {
	display: block;
}

.dropdown:hover .dropbtn {
	background-color: pink;
opacity: 0.9;
}

/*Galerie*/
div.img {
    border: 1px solid #ccc;
}

div.img:hover {
    border: 1px solid #777;
}

div.img img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}

* {
    box-sizing: border-box;
}

.responsive {
    padding: 0 6px;
    float: left;
    width: 24.99999%;
}

@media only screen and (max-width: 700px){
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
}

@media only screen and (max-width: 500px){
    .responsive {
        width: 100%;
    }
}

.clearfix:after {
    content: "";
    display: table;
    clear: both;
}

</style>
</head>
<body>
<div id="wrapper">

	<div id="logo"><a href="<?php echo DIR;?>"><img src="images/logos.png" alt="<?php echo SITETITLE;?>" title="<?php echo SITETITLE;?>" border="0" /></a></div><!-- close logo -->
	



<BODY>


<br>
<div class="transbox" >
<p><h1><style="font-size:500%;">



<div class="responsive">
  <div class="img">
    <a target="_blank" href="dupaanatr.jpg" >
      <a href="ce sa mananci dupa antrenament.php"><img src="dupaantr.jpg"  width="300" height="200"></a>
    </a>
    <div class="desc">Ce sa mananci dupa antrenament?</div>
  </div>
</div>

<div class="responsive">
  <div class="img">
    <a target="_blank" href="inainte.jpg">
      <a href="ce sa mananci inainte de antrenament.php"><img src="inainte.jpg"  width="600" height="400"></a>
    </a>
    <div class="desc">Ce sa mananci inainte de antrenament?</div>
  </div>
</div>

<div class="responsive">
  <div class="img">
    <a target="_blank" href="20s.jpg">
      <a href="20 de alimente.php"><img src="20s.jpg"  width="600" height="400"></a>
    </a>
    <div class="desc">20 de alimente care scad apetitul</div>
  </div>
</div>

<div class="responsive">
  <div class="img">
    <a target="_blank" href="carbohidrati.jpg">
      <a href="Carbohidrati buni VS Carbohidrati rai.php"><img src="carbohidrati.jpg"  width="600" height="400"></a>
    </a>
    <div class="desc">Carbohidrati buni VS Carbohidrati rai</div>
  </div>
</div>



<div class="responsive">
  <div class="img">
    <a target="_blank" href="secrete.jpg">
      <a href="Secretele nutritionistilor.php"><img src="secrete.jpg"  width="300" height="200"></a>
    </a>
    <div class="desc">Secretele nutritionistilor</div>
  </div>
</div>

<div class="responsive">
  <div class="img">
    <a target="_blank" href="grasimi.jpg">
      <a href="Grasimi alimentare.php"><img src="grasimi.jpg"  width="600" height="400"></a>
    </a>
    <div class="desc">Grasimi alimentare</div>
  </div>
</div>


<div class="responsive">
  <div class="img">
    <a target="_blank" href="ghid.jpg">
      <a href="Ghid pentru trecerea la un stil de viata sanatos.php"><img src="ghid.jpg"  width="600" height="400"></a>
    </a>
    <div class="desc">Ghid pentru trecerea la un stil de viata sanatos</div>
  </div>
</div>

<div class="responsive">
  <div class="img">
    <a target="_blank" href="reteta.jpg">
      <a href="10idei.php"><img src="reteta.jpg"  width="600" height="400"></a>
    </a>
    <div class="desc">10 idei de gustari proaspete</div>
  </div>
</div>


<div class="responsive">
  <div class="img">
    <a target="_blank" href="comb.jpg">
      <a href="grasimi carbohidrati.php"><img src="comb.jpg"  width="600" height="400"></a>
    </a>
    <div class="desc">Este bine sa combinam grasimi si carbohidrati?</div>
  </div>
</div>


<div class="responsive">
  <div class="img">
    <a target="_blank" href="cesicat.jpg">
      <a href="ce si cat mancam.php"><img src="cesicat.jpg"  width="300" height="200"></a>
    </a>
    <div class="desc">Ce si cat trebuie sa mancam pentru o dieta echilibrata</div>
  </div>
</div>


<div class="responsive">
  <div class="img">
    <a target="_blank" href="sanatos.jpg">
      <a href="cum sa mananci sanatos.php"><img src="sanatos.jpg"  width="600" height="400"></a>
    </a>
    <div class="desc">Cum sa mananci sanatos – 5 sfaturi simple si practice</div>
  </div>
</div>



<div class="responsive">
  <div class="img">
    <a target="_blank" href="gogosi.jpg">
      <a href="dependenta dulciuri.php"><img src="gogosi.jpg"  width="600" height="400"></a>
    </a>
    <div class="desc">Esti dependenta de dulciuri/ fast food?</div>
  </div>
</div>

<div class="clearfix"></div>


</div>




</p></h1></p>
</div>

</div><!-- close wrapper -->

</BODY>
</HTML>