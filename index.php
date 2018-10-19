<?php 
//require('includes/config.php'); 
require('includes/functions.php'); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo SITETITLE;?></title>
<link rel="stylesheet" href="style/style.css" >
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/desktop-tablet-mobile.css" rel="stylesheet" type="text/css">
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/drop-down-menu.js"></script>
<style>
body{ 
    background-image: url(berries.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center; 
    background-attachment: fixed;
}
a:link {
    color: white;
    background-color: transparent;
    text-decoration: none;
}
div.transbox {
  position:center;
  margin-top:20px;
  Width: 970px;
  height: 1600px;
  background-color: #ffffff;
  border: transparent;
  opacity: 0.9;
  filter: alpha(opacity=60); 
  padding: 10px;
}

div.transbox p {
  margin: 3%;
  font-weight: bold;
  color: black;
}

</style>
</head>
<body>

<div id="wrapper">

	<div id="logo"><a href="<?php echo DIR;?>">Nutritie&Alimentatie<title="<?php echo SITETITLE;?>" border="0" /></a></div><!-- close logo -->

	<!-- NAV -->
<div style="position: relative; z-index: 3000">
  
<div class="container">
       <div class="navigation_bar" style="z-index:9999">
<h4>
<ul class="tablet_mobile">
	<li><a href="<?php echo DIR;?>">Home</a></li>
<?php 
  $select_nav="select * from pages where parentID='0' AND isRoot='1'";
  $run_nav=mysqli_query($conn,$select_nav);
  while($row_nav=mysqli_fetch_array($run_nav)){
  
	 getNavigation($row_nav);
	  }
?>

        <a href="./admin/login.php" style="color:white">Admin</style></a>
</h4>	
 </ul>       
	</div></style>
</div>
</div>
	<!-- END NAV -->
	
	<div id="content">
<div class="transbox" >
	<?php	
	//if no page clicked on load home page default to it of 1
	if(!isset($_GET['nav_id'])){
		$q = mysqli_query($conn,"SELECT * FROM pages WHERE pageID='1'");
	} else { //load requested page based on the id
		$id = $_GET['nav_id']; //get the requested id
		$id = mysqli_real_escape_string($conn,$id); //make it safe for database use
		$q = mysqli_query($conn,"SELECT * FROM pages WHERE pageID='$id'");
	}
	
	//get page data from database and create an object
	$r = mysqli_fetch_object($q);
	
	//print the pages content
	
	echo "$r->pageCont";
	?>
</div>
	</div><!-- close content div -->

	<div id="footer">	
			<div class="copy">&copy; <?php echo SITETITLE.' '. date('Y');?> </div>
	</div><!-- close footer -->

</div><!-- close wrapper -->
</body>
</html>