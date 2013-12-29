<?php
include("header.php")
?>
<?php
require('config.php');

if(isset($_POST['submit'])){
	$uname = mysql_real_escape_string($_POST['uname']);
	$pass = mysql_real_escape_string($_POST['pass']);
	
	$sql = mysql_query("SELECT * FROM `users` WHERE `uname` = '$uname' AND `pass` = '$pass'");
	if(mysql_num_rows($sql) >0){
	echo "Welcome, you are logged in.";
	exit();
	}
	
}else{


$form = <<<EOT
<fieldset><legend><span> </span></legend>
<h3> Welcome! </h3>
<form action="login.php" method="POST">
<label> Username: </label> <input type="text" name="uname" /><br />
<label> Password: </label><input type="password" name="pass" /><br />
<input type="submit" name="submit" class="reg" value="Log in" />
</form>
EOT;
}



echo $form
?>

