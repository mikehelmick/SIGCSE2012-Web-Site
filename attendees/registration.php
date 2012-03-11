<?php
 $title = "SIGCSE 2012 - Registration";
 $onload = "pageLoad('attendees', 'attendeesRegistration');";
 include("../parts/top.php");
?>
<h1>SIGCSE 2012 Registration Gateway</h1>

<div class="Alert">SIGCSE 2012 is over, and registration is closed.</div>

<?php
 $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
 $mainPage = true;
 include("../parts/bottom.php");
?>