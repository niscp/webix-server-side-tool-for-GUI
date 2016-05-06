<html>
<head>
<link rel="stylesheet" href="boot.css"></link>
</head>
<body>
 <h1 id="n"><center>System logs</center></h1>
<hr>

<?php

shell_exec('./display.sh');
$a=file('./a.txt');
for($i=0;$i<count($a);$i++)
{
  $tmp=explode(':',$a[$i]);
  $a[$i]=array('service'=> $tmp[0]);
  
}echo "<table id='ni' width='100%' border='1'>";
echo "<th>System log file</th><th></th>";
for($i=0;$i<count($a);$i++)
{echo "<tr><td>";
echo $a[$i][service];
echo "</td><td>";
echo "<a href='viewlog.php?name=".$a[$i][service]."'>view</a>";
echo "</td>";
echo "</tr>";
}
echo "</table>";
?>
</html>
