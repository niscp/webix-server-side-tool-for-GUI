<!DOCTYPE HTML>
    <html>
    <head>
        <link rel="stylesheet" href="../css/main_page.css">
        </link>
        <link rel="stylesheet" href="../css/side_menu.css">
        </link><link rel="stylesheet" href="../css/footer.css">
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
	   <td><a href="../hardware/burner/"><img src="../hardware/burner/images/icon.gif" alt="load"></img>CD Burner</a></td>
	   <td><a href="../hardware/grub/"><img src="../hardware/grub/images/icon.gif" alt="load"></img>GRUB Bootloader</a></td>
	   <td><a href="../hardware/raid/"><img src="../hardware/raid/images/icon.gif" alt="load"></img>Linux Raid</a></td>
	   <td><a href="../hardware/lvm/"><img src="../hardware/lvm/images/icon.gif" alt="load"></img>Logical Volume Management</a></td>
	 </tr><tr>
	   <td><a href="../hardware/fdisk/"><img src="../hardware/fdisk/images/icon.gif" alt="load"></img>Partition on Local Disk</a></td>
	   <td><a href="../hardware/lpadmin/"><img src="../hardware/lpadmin/images/icon.gif" alt="load"></img>Printer Admin</a></td>
	   <td><a href="../hardware/smart-status/"><img src="../hardware/smart-status/images/icon.gif" alt="load"></img>Smart Drive Status</a></td>
	   <td><a href="../hardware/time/"><img src="../hardware/time/images/icon.gif" alt="load"></img>System Time</a></td>
	 </tr> <tr>
	   <td><a href="../hardware/vgetty/"><img src="../hardware/vgetty/images/icon.gif" alt="load"></img>Voicemail Server</a></td>
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