<?php 


//require('../includes/config.php'); 
require('../includes/functions.php');

//make sure user is logged in, function will redirect use if not logged in
login_required();

//if logout has been clicked run the logout function which will destroy any active sessions and redirect to the login page
if(isset($_GET['logout'])){
	logout();
}

//run if a page deletion has been requested
if(isset($_GET['delpage'])){
		
	$delpage = $_GET['delpage'];
	$delpage = mysqli_real_escape_string($conn,$delpage);
	$sql = mysqli_query($conn, "DELETE FROM pages WHERE pageID = '$delpage'");
    $_SESSION['success'] = "Page Deleted"; 
    header('Location: ' .DIRADMIN);
   	exit();
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo SITETITLE;?></title>
<link rel="stylesheet" href="../style/style.css" >
<script language="JavaScript" type="text/javascript">
	function delpage(id, title)
	{
	   if (confirm("Are you sure you want to delete '" + title + "'"))
	   {
		  window.location.href = '<?php echo DIRADMIN;?>?delpage=' + id;
	   }
	}
</script>
</head>
<body>

<div id="wrapper">

<div id="logo"><a href="<?php echo DIR;?>">Nutritie&Alimentatie<title="<?php echo SITETITLE;?>" border="0" /></a></div><!-- close logo -->

<!-- NAV -->
<div id="navigation">
	<ul class="menu">
		//<li><a href="index.php">Admin</a></li>		
		<li><a href="../index.php" target="_blank">View Website</a></li>
		<li><a href="login.php">Logout</a></li>
	</ul>
</div>
<!-- END NAV -->

<div id="content">

<?php 
	//show any messages if there are any.
	messages();
?>

<h1>Manage Pages</h1>

<table>
<tr>
	<th><strong>Title</strong></th>
	<th><strong>Action</strong></th>
</tr>

<?php
 global $conn;
$sql = mysqli_query($conn, "SELECT * FROM pages ORDER BY pageID");
while($row = mysqli_fetch_object($sql)) 
{
	echo "<tr>";
		echo "<td>$row->pageTitle</td>";
		if($row->pageID == 1){ //home page hide the delete link
			echo "<td><a href=\"editpage.php?id=$row->pageID\">Edit</a></td>";
		} else {
			echo "<td><a href=\"editpage.php?id=$row->pageID\">Edit</a> | <a href=\"javascript:delpage('$row->pageID','$row->pageTitle');\">Delete</a></td>";
		}
		
	echo "</tr>";
}
?>
</table>

<p><a href="addpage.php" class="button">Add Page</a></p>
</div>

<div id="footer">	
		<div class="copy">&copy; <?php echo SITETITLE.' '. date('Y');?> </div>
</div><!-- close footer -->
</div><!-- close wrapper -->

</body>
</html>