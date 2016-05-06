<html>
<head>
<link rel="stylesheet" href="./boot.css"></link>
</head>

<body>
<h1 id="n"><center>Edit Group</center></h1>
<hr>
<div id="ud">Group details</div>
<?php
$id=$_GET['id'];
$a=file('./group.txt');
for($i=0;$i<count($a);$i++){
  $tmp=explode(':',$a[$i]);
  $a[$i]=array('service'=> $tmp[0],'status1'=>$tmp[1],'status2'=>$tmp[2],'status3'=>$tmp[3],'status4'=>$tmp[4],'status5'=>$tmp[5],'status6'=>$tmp[6]);
  
}
echo "Groupname=<input type='text' value=".$a[$id][service].">";
echo "<br>Group_id=<input type='text' value=".$a[$id][status2].">";
echo "<br>Member=<input type='text' value=".$a[$id][status3].">";

?>
</body>
</html>