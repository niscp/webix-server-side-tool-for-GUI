<html>
<head>
<link rel="stylesheet" href="bind.css"></link>
</head>
<body>
 <h1 id="n">BIND DNS SERVER</h1>
<hr>
<h3 id="ht">Global Server option</h3>
<table id="k"border="1">
<tr>
<td>other DNS Server</td>
<td>Logging & Error</td>
<td>Access Control List</td>
<td>Files & Directory</td>
</tr>
<tr>
<td>Forwarding & Transfer</td>
<td>Address & Topology</td>
<td>Miscellaneous Options</td>
<td>Control Interface Option</td>
</tr>
<tr>
<td>DNS keys</td>
<td>Zone Defaults</td>
<td>Cluster slave Servers</td>
<td>Setup RNCDC</td>
</tr>
<tr>
<td>Edit Config File</td>

</tr>
</table>
<hr>
<h3 id="ht">Existing DNS Zone</h3>
<a href="#">Create Master Zone</a>|<a href="#">Create Slave Zone</a>|<a href="#">Create Stub Zone</a>|<a href="#">Create Forward Zone</a>|<a href="#">Create Delegation zone</a>|<a href="#">Create Zones from Batch File</a>
<table border="1" id="k">
<tr>
<td>Root Zone</td>
<td>Localhost</td>
<td>Localdoamin</td>
<tr>
</table><hr>
<h3 id="ht">Existing Client view</h3>
<a href="#">Create a client View</a>
<form>
<input type="submit" value="Apply Changes">::Click this button to restart the running BIND server. This will cause the current configuration to become active
</form>
<form>
<input type="submit" value="Stop Name Server">::Click this button to stop the BIND server. Any clients using it will be unable to resolve hostnames until it is restarted.</body>
</html>
