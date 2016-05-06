<html>
<head>
</head>
<body>
<form method="post">Last   
<input type="text" name="length" placeholder="enter no. of line">lines of /var/log/messages
<input type="submit" value="refresh" name="smt">
</form>
<?php
$ln=20;
$b=$_GET['name'];
if(isset($_POST['smt']))
{ 
  $ln=$_POST['length'];
  $c='sudo cat /var/log/'.$b.' | tail -'.$ln;
  $a=shell_exec($c);
  echo "<pre>".$a."</pre>";
  echo "last ".$ln." Lines of log messages";
}

?>
</body>
</html>