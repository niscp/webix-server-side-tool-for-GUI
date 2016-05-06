<!DOCTYPE HTML>
    <html>
    <head>
        <link rel="stylesheet" href="../css/main_page.css">
        </link>
        <link rel="stylesheet" href="../css/side_menu.css">
        </link>
		<link rel="stylesheet" href="../css/footer.css">
        </link>
         
         <link rel="stylesheet" href="../css/header.css">
        </link>
		
         <link rel="icon" type="image/ico" href="favicon.ico"></link> 
         <link rel="shortcut icon" href="favicon.ico"></link>
       
         
    </head>
    <body>
        <div id="main">
        <header id="main_header"><? include '../header.php'; ?>
           </header>
    
<div id="m_sec"><aside id="m_aside">
  <nav id="nav">
    
    <?php include('../side_menu.php'); ?>
    </nav>
</aside>
<section id="main_sec">
   <table id="main_t" border="1">
   <tr>
	   <td><a href="../system/useradmin/"><img src="../system/useradmin/images/icon.gif" alt="load"></img>Users & Group</a></td>
	   <td><a href="../system/passwd/"><img src="../system/passwd/images/icon.gif" alt="load"></img>Change Password</a></td>
	   <td><a href="../system/syslog/"><img src="../system/syslog/images/icon.gif" alt="load"></img>System Logs</a></td>
	   <td><a href="../system/man/"><img src="../system/man/images/icon.gif" alt="load"></img>System Documentation</a></td>
	 </tr>
	  <tr>
	   <td><a href="../system/software/"><img src="../system/software/images/icon.gif" alt="load"></img>Software Packages</a></td>
	   <td><a href="../system/at/"><img src="../system/at/images/icon.gif" alt="load"></img>Scheduled Commands</a></td>
	   <td><a href="../system/mailcap/"><img src="../system/mailcap/images/icon.gif" alt="load"></img>MIME Type Programs</a></td>
	   <td><a href="../system/mon/"><img src="../system/mon/images/icon.gif" alt="load"></img>MON Server</a></td>
	 </tr>
	 
	  <tr>
	   <td><a href="../system/pam/"><img src="../system/pam/images/icon.gif" alt="load"></img>PAM Authentication</a></td>
	   <td><a href="../system/proc"><img src="../system/proc/images/icon.gif" alt="load"></img>Running Processes</a></td>
	   <td><a href="../system/ldap-useradmin/"><img src="../system/ldap-useradmin/images/icon.gif" alt="load"></img>LDAP Users & Groups</a></td>
	   <td><a href="../system/ldap-client/"><img src="../system/ldap-client/images/icon.gif" alt="load"></img>LDAP Clients</a></td>
	 </tr>
	 
	  <tr>
	   <td><a href="../system/fsdump/"><img src="../system/fsdump/images/icon.gif" alt="load"></img>Filesystem backup</a></td>
	   <td><a href="../system/mount/"><img src="../system/mount/images/icon.gif" alt="load"></img>Disk & Network File System</a></td>
	   <td><a href="../system/quota/"><img src="../system/quota/images/icon.gif" alt="load"></img>Disk Quota</a></td>
	   <td><a href="../system/init/"><img src="../system/init/images/icon.gif" alt="load"></img>Bootup & Shutdown</a></td>
	 </tr>
	 </table>
</section>
    <aside id="new">
            <?php include('../aside_m.php'); ?>

    </aside>
</div>


<footer id="main_footer">
   <footer id="main_footer">
<a href="#" >System</a>|
   <a href="#" >Server</a>|
   <a href="#" >Networking</a>|
   <a href="#" >Hardware</a>|
   <a href="#" >Other</a>
   <h5>&copy Nettech pvt. ltd. 2010-2014</h5>
    
   
  
</footer>

  
</footer>
</div>
</body>
    </html>