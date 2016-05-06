<html>
<head>
<link rel="stylesheet" href="./boot.css"></link>
</head>

<body>
<h1 id="n"><center>Edit User</center></h1>
<hr>
<div id="ud">User details</div>
<?php
$id=$_GET['id'];
$a=file('./user.txt');
for($i=0;$i<count($a);$i++){
  $tmp=explode(':',$a[$i]);
  $a[$i]=array('service'=> $tmp[0],'status1'=>$tmp[1],'status2'=>$tmp[2],'status3'=>$tmp[3],'status4'=>$tmp[4],'status5'=>$tmp[5],'status6'=>$tmp[6]);
  
}
echo "username=<input type='text' value=".$a[$id][service].">";
echo "<br>Uid=<input type='text' value=".$a[$id][status2].">";
echo "<br>Gid=<input type='text' value=".$a[$id][status3].">";
echo "<br>Real Name=<input type='text' value=".$a[$id][status4].">";
echo "<br>Home Directory=<input type='text' value=".$a[$id][status5].">";
echo "<br>Shell=<input type='text' value=".$a[$id][status6].">";

?>
</body>
</html>