<?php

 //require('../includes/config.php');
require('../includes/functions.php'); 
//if(logged_in()) {header('Location: 'index.php);}//------.DIRADMIN.-----------------------
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo SITETITLE;?></title>
<link rel="stylesheet" href="../style/login.css" >
</head>
<body>
<div class="lwidth">
	<div class="page-wrap">
		<div class="content">
		
		<?php 
		if(isset($_POST['submit'])){
			login($_POST['username'], $_POST['password']);
		}
		?>

<div id="login">
	<p><?php echo messages();?></p>        
	<form method="post" action="">
	<p><label><strong>Username</strong><input type="text" name="username" /></label></p>
	<p><label><strong>Password</strong><input type="password" name="password" /></label></p>
	<p><br /><input type="submit" name="submit" class="button" value="Login" /></p>                       
	</form>	  	  
</div>
		
		</div>	
		<div class="clear"></div>		
	</div>
<div class="footer">&copy; <?php echo SITETITLE.' '. date('Y');?> </div>	
</div>
</body>
</html>