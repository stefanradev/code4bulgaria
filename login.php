
<h1>LOL</h1>
<?php
//	$username = $_POST["uxsername"];
//	$password = $_POST["password"];
session_start();
	$host = "sql101.byethost24.com";
	$username = "b24_16295096";
	$password = "M@!KAti";
	$db_name = "b24_16295096_jalba";
	$tbl_name = "users";


	/*if ($username && $password) {
		$connect = mysqli_connect($database_host, $database_acc, $database_pw) or die("Could not connect");
		$pdo = new PDO('mysql:host=sql300.byethost14.com dbname=b14_15955874_sofiatravel', $database_acc, $database_pw) or die ("ERROR!");
		//header("location: welcome.php"); 
	} else die("Invalid username or password");*/

	/*if ($_POST["username"] == 'username' && $_POST["password"] == 'password') {
	include 'welcome.php'; 
	// If correct, we set the session to YES
	  session_start();
	  $_SESSION["Login"] = "YES";
	  echo "You are now logged in.</br></br>";
	  echo "<a href='list-contacts.php'>Proceed to contacts...</a>";

} */


// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$myID = $_POST['ID'];
$myemail=$_POST['email']; 
$mypassword=$_POST['password']; 

// To protect MySQL injection (more detail about MySQL injection)
$myemail = stripslashes($myemail);
$mypassword = stripslashes($mypassword);
$myemail = mysql_real_escape_string($myemail);
$mypassword = mysql_real_escape_string($mypassword);


$_SESSION['login_user'] = $myID;
echo $_SESSION['login_user'];

$sql="SELECT * FROM $tbl_name WHERE email='$myemail' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

	// Register $myusername, $mypassword and redirect to file "login_success.php"
	//session_register("myusername");
	//session_register("mypassword"); 

	header("location:welcome.html");
 
}
else {
	//echo "Wrong Username or Password";
	header("location:index_error.html");
}

?>