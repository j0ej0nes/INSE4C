<?php
include("header.php")
?>

<?php
require('config.php');



if(isset($_POST['submit'])){

 // Verification of form
	$email1 = $_POST['email1'];
	$email2 = $_POST['email2'];
	$pass1 = $_POST['pass1'];
	$pass2 = $_POST['pass2'];
	
	if($email1 == $email2){
		if($pass1 == $pass2){
		
			$name = mysql_real_escape_string($_POST['name']);
			$lname = mysql_real_escape_string($_POST['lname']);
			$uname = mysql_real_escape_string($_POST['uname']);
			$email1 = mysql_real_escape_string($email1);
			$email2 = mysql_real_escape_string($email2);
			$pass1= mysql_real_escape_string($pass2);
			$pass2 = mysql_real_escape_string($pass2);
			
			$pass1 = md5($pass1);
			
			$sql = mysql_query("SELECT * FROM `users` WHERE `uname` = `$uname`");
			if(mysql_num_rows($sql) > 0){
				echo "Sorry that users exists already";
				exit();
				}

		mysql_query ("INSERT INTO `users` (`id`, `name`, `lname`, `uname`, `email`, `pass`) VALUES (NULL, '$name', '$lname', '$uname', '$email1', '$pass1')") or die(mysql_error());
		
		}else{
			echo "The passwords do not match. <br />";
			exit();
		
		}
	}else{
		echo "The Email does not match<br />";
	}
			

}else{
$form = <<<EOT
<fieldset><legend>  <span></span></legend>
<h3> Please register an account to get started.</h3>
<form action="Register.php" method="POST">
<label> First Name: </label> <input type="text" name="name" /><br />
<p>
<label> Last Name: </label> <input type="text" name="lname" /><br />
<p>
<label> Username: </label> <input type="text" name="uname" /><br />
<p>
<label> Email: </label> <input type="text" name="email1" /><br />
<p>
<label> Confirm Email </label> <input type="text" name="email2" /><br />
<p>
<label> Password: </label><input type="password" name="pass1" /><br />
<p>
<label> Confirm Password: </label> <input type="password" name="pass2" /><br />
<p>
<input type="submit" value="Register" class="reg" name="submit" />
</form
EOT;

echo $form;

}
?>