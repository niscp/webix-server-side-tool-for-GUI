<html>
<head>
<link rel="stylesheet" href="dhcp.css"></link>
</head>
<body>
 <h1 id="n">DHCP SERVER</h1>
<hr>
<h3 id="ht">Subnets and Shared Networks</h3>
<a href="#">Add a new subnet</a>|<a href="#">Add a new shared network</a>
<hr>
<h3 id="ht">Hosts and Host Groups</h3>
<a href="#">Add a new host</a>|<a href="#">Add a new host group</a>
<hr>
<h3 id="ht">DNS-zones</h3>
<a href="#">Add a new DNS zone</a>
<table id="m">
<tr>
<td><form>
<input type="submit" value="Edit client options"></td>
<td>Edit DHCP client options that apply to all subnets, shared networks, hosts and groups</td>
</tr><tr>
<td><form>
<input type="submit" value="Edit TSI G keys"></td>
<td>Edit TSIG-keys (used for authenticating updates to DNS servers)</td>
</tr><tr>
<td><form>
<input type="submit" value="ConfigFile"></td>
<td>Edit configfile in texteditor (caution!)</td>
</tr><tr>
<td><form>
<input type="submit" value="Edit Network Interface"></td>
<td>Set the network interfaces that the DHCP server listens on when started.</td>
</tr>
<tr>
<td><form>
<input type="submit" value="List lease"></td>
<td>List leases currently issued by this DHCP server for dynamically assigned IP addresses.</td>
</tr>
<tr>
<td><form>
<input type="submit" value="Start Server"></td>
<td>Click this button to start the DHCP server on your system, using the current configuration.</td>
</tr>
</table>
</html>
