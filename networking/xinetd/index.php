<html>
<head>
<link rel="stylesheet" href="boot.css"></link>
</head>
<body>
 <h1 id="n"><center>Xinetd Services</center></h1>
<hr>

<?php

shell_exec('./display.sh');
$a=file('./a.txt');
for($i=0;$i<count($a);$i++)
{
  $tmp=explode(':',$a[$i]);
  $a[$i]=array('service'=> $tmp[0],'status1'=>$tmp[1]);
  
}echo "<table id='ni' border='1'>";
echo "<th>Service</th><th>Enable</th>";
for($i=0;$i<count($a);$i++)
{echo "<tr><td>";
echo $a[$i][service];
echo "</td><td>";
echo $a[$i][status1];
echo "</td>";
echo "</tr>";
}
echo "</table>";
?>
</html>
