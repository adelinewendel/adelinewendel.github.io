<?php


ob_start();
session_start();

// db properties
define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DBNAME','cms');

// make a connection to mysql here
$conn = mysqli_connect('localhost', 'root', '', 'cms');
if(!$conn){
	die( "Sorry! There seems to be a problem connecting to our database.");
}


// define site path
define('DIR','index.php');

// define admin site path
define('DIRADMIN','index.php');

// define site title for top of the browser
define('SITETITLE','Nutritie&Alimentatie');

//define include checker
define('included', 1);
//------------------------------------------------------------
if (!defined('included')){
die('You cannot access this file directly!');
}

//log user in ---------------------------------------------------
function login($user, $pass){
   global $conn;
   //strip all tags from varible   
   $user = strip_tags(mysqli_real_escape_string($conn, $user));
   $pass = strip_tags(mysqli_real_escape_string($conn,$pass));

   $pass = md5($pass);

   // check if the user id and password combination exist in database
   $sql = "SELECT * FROM members WHERE username = '$user' AND password = '$pass'";
   $result = mysqli_query($conn ,$sql) or die('Query failed. ' . mysqli_error($conn));
      
   if (mysqli_num_rows($result) == 1) {
      // the username and password match,
      // set the session
	  $_SESSION['authorized'] = true;
					  
	  // direct to admin
      header('Location: '.DIRADMIN);
	  exit();
   } else {
	// define an error message
	$_SESSION['error'] = 'Sorry, wrong username or password';
   }
}

// Authentication
function logged_in() {
	if(isset($_SESSION['authorized']) && ($_SESSION['authorized']== true)) {
		return true;
	} else {
		return false;
	}	
}

function login_required() {
	if(logged_in()) {	
		return true;
	} else {
		header('Location: ../admin/login.php');
		exit();
	}	
}

function logout(){
	unset($_SESSION['authorized']);
	header('Location: ../admin/login.php');
	exit();
}

// Render error messages
function messages() {
    $message = '';
    if(isset($_SESSION['success'])&&($_SESSION['success'] != '')) {
        $message = '<div class="msg-ok">'.$_SESSION['success'].'</div>';
        $_SESSION['success'] = '';
    }
    if(isset($_SESSION['error'])&&($_SESSION['error'] != '')) {
        $message = '<div class="msg-error">'.$_SESSION['error'].'</div>';
        $_SESSION['error'] = '';
    }
    echo "$message";
}

function errors($error){
	if (!empty($error))
	{
			$i = 0;
			while ($i < count($error)){
			$showError.= "<div class=\"msg-error\">".$error[$i]."</div>";
			$i ++;}
			echo $showError;
	}// close if empty errors
} // close function


function getNavigation($row){
	global $conn;
 echo "<li><a href=index.php?nav_id={$row['pageID']}&parentID={$row['parentID']}>".$row['pageTitle']."</a>";
 $select_subnav="select * from pages where isRoot='1' and parentID=".$row['pageID']."";
 $run_subnav=mysqli_query($conn,$select_subnav);
 if(mysqli_num_rows($run_subnav)>0){
	 echo "<ul>";
	 while($row=mysqli_fetch_array($run_subnav)){
		  getNavigation($row);
		 }
	 echo "</ul>";
	 }
	 echo "</li>";
	}
// getting category list
function cat_list($p_id=0,$space=''){  
global $conn;
$q="SELECT * FROM pages WHERE isRoot='1' and parentID='$p_id' order by position ASC ";  
$r=mysqli_query($conn,$q);  
$count=mysqli_num_rows($r);  
 
if($p_id==0){  
    $space='';  
}else{  
   $white_space= "&nbsp; &nbsp; &nbsp;";
   
    $space = $space . $white_space;
}  
if($count > 0){  
      
    while($row=mysqli_fetch_array($r)){  
	    
        echo "<option value=".$row['pageID'].">".$space.$row['pageTitle']."</option>";  
          
        cat_list($row['pageID'],$space);  
    }  
      
}  
  
  
}  	

?>