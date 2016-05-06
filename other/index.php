
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
	   <td><a href="../other/shell/"><img src="../other/shell/images/icon.gif" alt="load"></img>Command Shell</a></td>
	   <td><a href="../other/custom/"><img src="../other/custom/images/icon.gif" alt="load"></img>Custom Commands</a></td>
	   <td><a href="../other/tunnel/"><img src="../other/tunnel/images/icon.gif" alt="load"></img>HTTP Tunnel</a></td>
	   <td><a href="../other/up/"><img src="../other/up/images/icon.gif" alt="load"></img>Upload & Download</a></td>
	 </tr><tr>

	   <td><a href="../other/php/"><img src="../other/php/images/icon.gif" alt="load"></img>PHP Config</a></td>
	   <td><a href="../other/perl/"><img src="../other/perl/images/icon.gif" alt="load"></img>Perl Modules</a></td>
	   <td><a href="../other/pro/"><img src="../other/pro/images/icon.gif" alt="load"></img>Protected Web Directories</a></td>
	   <td><a href="../other/sys/"><img src="../other/sys/images/icon.gif" alt="load"></img>System & Server Status</a></td>
	   </tr></table>
	 
</section>
<aside id="new">
        <?php include('../aside_m.php'); ?>
</aside>
    
</div>


<footer id="main_footer">
   <a href="#" >System</a>|
   <a href="#" >Server</a>|
   <a href="#" >Networking</a>|
   <a href="#" >Hardware</a>|
   <a href="#" >Other</a>
   <h5>&copy Nettech pvt. ltd. 2010-2014</h5>
    
   

  
</footer>
</div>
</body>
    </html>