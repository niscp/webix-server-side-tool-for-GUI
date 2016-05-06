<html>
<head>
<link rel="stylesheet" href="boot.css"></link>
</head>
<body>
 <h1 id="n"><center>Bootup and ShutDown</center></h1>
<hr>

<?php

shell_exec('./display.sh');
$a=file('./a.txt');
for($i=0;$i<count($a);$i++)
{
  $tmp=explode(':',$a[$i]);
  $a[$i]=array('service'=> $tmp[0],'status1'=>$tmp[1],'status2'=>$tmp[2],'status3'=>$tmp[3],'status4'=>$tmp[4],'status5'=>$tmp[5],'status6'=>$tmp[6]);
  
}echo "<table id='ni' border='1'>";
echo "<th>Service</th><th>Run level0</th><th>Run level1</th><th>Run level2</th><th>Run level3</th><th>Run level4</th><th>Run level5</th>";
for($i=0;$i<count($a);$i++)
{echo "<tr><td>";
echo $a[$i][service];
echo "</td><td>";
echo $a[$i][status1];
echo "<img src='";
echo $a[$i][status1].".jpg";
echo "'></img>";
echo "</td><td>";
echo $a[$i][status2];
echo "<img src='";
echo $a[$i][status2].".jpg";
echo "'></img>";
echo "</td><td>";
echo $a[$i][status3];
echo "<img src='";
echo $a[$i][status3].".jpg";
echo "'></img>";
echo "</td><td>";
echo $a[$i][status4];
echo "<img src='";
echo $a[$i][status4].".jpg";
echo "'></img>";
echo "</td><td>";
echo $a[$i][status5];
echo "<img src='";
echo $a[$i][status5].".jpg";
echo "'></img>";
echo "</td><td>";
echo $a[$i][status6];
//echo "<img src='";
echo $a[$i][status6].".jpg";
//echo "'></img>";
echo "</td>";
echo "</tr>";
}
echo "</table>";
?>
</html>
