<html>
<head>
<link rel="stylesheet" href="passwd.css"></link>
</head>
<body>
 <h1 id="n"><center>Change Password</center></h1>
<hr>
<?php
$user=$_GET['user'];
echo "Changing Password for $user";
?>
<form>
enter password
<input type="password" name="pass">
Confirm password
<input type="password" name="passw">
<input type="submit" name="smt" value="change">
</form>
<?php
if(isset($_GET['smt']))
{
 $a=shell_exec('echo '$_GET['pass']' | sudo passwd --stdin nishank');
 echo $a;
 }
?>
</html>
