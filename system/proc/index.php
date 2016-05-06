<html>
<head>
<link rel="stylesheet" href="boot.css"></link>
</head>
<body>
 <h1 id="n"><center>Running Processes</center></h1>
<hr>

<?php

shell_exec('./display.sh');
$a=file('./a.txt');
for($i=0;$i<count($a);$i++)
{
  $tmp=explode(':',$a[$i]);
  $a[$i]=array('pid'=> $tmp[0],'cmd'=>$tmp[1]);
  
}echo "<table id='ni' border='1'>";
echo "<th>PID</th><th>CMD</th>";
for($i=0;$i<count($a);$i++)
{echo "<tr><td>";
echo $a[$i][pid];
echo "</td><td>";
echo $a[$i][cmd];

echo "</td>";
echo "</tr>";
}
echo "</table>";
?>
</html>
