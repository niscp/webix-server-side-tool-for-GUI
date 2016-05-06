<html>
<head>
<link rel="stylesheet" href="./useradmin.css"></link>
</head>
<body>
 <h1 id="head"><center>Users And Group management</center></h1>
<hr>
<h2 id="lu">Local Users</h2>
<?php
shell_exec('./display.sh');
$a=file('./user.txt');
for($i=0;$i<count($a);$i++)
{
  $tmp=explode(':',$a[$i]);
  $a[$i]=array('service'=> $tmp[0],'status1'=>$tmp[1],'status2'=>$tmp[2],'status3'=>$tmp[3],'status4'=>$tmp[4],'status5'=>$tmp[5],'status6'=>$tmp[6]);
  
}echo "<table id='ni' border='0'>";
echo "<th>Username</th><th>User ID</th><th>Group ID</th><th>Real Name</th><th>Home directory</th><th>Shell</th>";
for($i=0;$i<count($a);$i++)
{echo "<tr><td>";
echo "<a href='detail.php/?id=";echo $a[$i][status2]."'>";
echo $a[$i][service];
echo "</a>";
echo "</td>";

echo "<td>";
echo $a[$i][status2];
echo "</td><td>";
echo $a[$i][status3];
echo "</td><td>";
echo $a[$i][status4];
echo "</td><td>";
echo $a[$i][status5];
echo "</td><td>";
echo $a[$i][status6];
echo "</td>";
echo "</tr>";
}
echo "</table>";
?>

<?php

    echo "<h2 id='lu'>local Group</h2>";
    $a=file('./group.txt');
    for($i=0;$i<count($a);$i++)
    {
           $tmp=explode(':',$a[$i]);
           $a[$i]=array('service'=> $tmp[0],'status1'=>$tmp[1],'status2'=>$tmp[2],'status3'=>$tmp[3],'status4'=>$tmp[4],'status5'=>$tmp[5],'status6'=>$tmp[6]);
  
    }
echo "<table id='ni' border='0'>";
echo "<th>Group_name</th><th>Group ID</th><th>Member</th>";
for($i=0;$i<count($a);$i++)
{echo "<tr><td>";echo "<a href='grp.php/?id=";echo $a[$i][status2]."'>";
echo $a[$i][service];
echo "</a>";
echo "</td>";

echo "<td>";
echo $a[$i][status2];
echo "</td><td>";
echo $a[$i][status3];
echo "</td>";

echo "</tr>";
}
echo "</table>";
	
?>
</html>
