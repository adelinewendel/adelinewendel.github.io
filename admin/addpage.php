<?php  
require('../includes/functions.php');
if(isset($_POST['submit'])){
	global $conn;
	$title = $_POST['pageTitle'];
	$content = $_POST['pageCont'];
	$parentID = $_POST['parentID'];	

	$title = mysqli_real_escape_string($conn, $title);
	$content = mysqli_real_escape_string($conn, $content);
	$parentID = mysqli_real_escape_string($conn, $parentID);
	
	mysqli_query($conn,"INSERT INTO pages (pageTitle,pageCont,parentID) VALUES ('$title','$content','$parentID')")or die(mysqli_error($conn));
	$_SESSION['success'] = 'Page Added';
	header('Location: '.DIRADMIN);
	exit();

}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nutritie&Alimentatie</title>
<link href="../style/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">

<!-- NAV -->
<div id="navigation">
<ul class="menu">
<li><a href="./index.php">Admin</a></li>
<li><a href="../index.php" target="_blank">View Website</a></li>
<li><a href="./index.php?logout">Logout</a></li>
</ul>
</div>
<!-- END NAV -->

<div id="content">

<h1>Add Page</h1>

<form action="" method="post">
<p>Title:<br /> <input name="pageTitle" type="text" value="" size="103" /></p>
<p>Parent ID:<br /> <input name="parentID" type="text" value="" size="103" /></p>
<p>content<br /><textarea name="pageCont" cols="100" rows="20"></textarea></p>
<p><input type="submit" name="submit" value="Submit" class="button" /></p>
</form>

</div>

<div id="footer">	
		<div class="copy">&copy; <?php echo SITETITLE.' '. date('Y');?> </div>
</div><!-- close footer -->
</div><!-- close wrapper -->

</body>
</html>