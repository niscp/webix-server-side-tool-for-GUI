<html>
<head>
<link rel="stylesheet" href="boot.css"></link>
</head>
<body>
 <h1 id="n"><center>System Documentation</center></h1>
<hr>
<form>
Enter keyword for your query:
<input name="cmd" type="text" value="search">
<input name="smt" type="submit" value="search">
</form>
<?php
if(isset($_GET['smt']))
{ 
  $cmnd=$_GET['cmd'];
}

shell_exec('sudo man '.$cmnd.' > n.txt');
$a=file('./n.txt');
for($i=0;$i<count($a);$i++)
{
  $tmp=explode(':',$a[$i]);
  $a[$i]=array('service'=> $tmp[0]);
}
echo "<pre>";
for($i=0;$i<count($a);$i++)
{
  echo $a[$i][service];
  }
  echo "</pre>";
?>
</html>
