<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> INSE </title>
<meta name="author" content="Group">
<link rel="stylesheet" type="text/css" href="Style.css">


<?php 
session_start();
echo "<!DOCTYPE html>\n<html><head><script src='OSC.js'></script>";

include 'config.php';

$userstr = ' (Guest)';

if (isset($_SESSION['user']))
{
    $user     = $_SESSION['user'];
    $loggedin = TRUE;
    $userstr  = " ($user)";
}
else $loggedin = FALSE;


if ($loggedin)
{
    echo "<br ><ul class='menu'>" .
         "<li><a href='members.php?view=$user'>Home</a></li>" .
         "<li><a href='WBT.php'>WBT</a></li>" .
         "<li><a href='PERT.php'>PERT</a></li>" .
         "<li><a href='logout.php'>Log out</a></li></ul><br />";
}
else
{
    echo ("<br /><ul class='menu'>" .
         "<li><a href='index.php'>Home</a></li>" .
         "<li><a href='Register.php'>Register</a></li>" .
         "<li><a href='login.php'>Log in</a></li></ul><br />" .
         "<span class='info'>&#8658; You must be logged in to " .
         "view this page.</span><br /><br />");
}
?>
