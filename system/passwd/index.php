<html>
<head>
<link rel="stylesheet" href="passwd.css"></link>
</head>
<body>
 <h1 id="n"><center>Change Password</center></h1>
<hr>
Select a user to change password
<?php
$a=shell_exec('./display.sh');
$a=file('./a.txt');


for($i=0;$i<count($a);$i++)
{echo "<a href='#'>";
echo "<div id='kl'>".$a[$i]."</div>";}
echo "</a>";
?>
</html>
