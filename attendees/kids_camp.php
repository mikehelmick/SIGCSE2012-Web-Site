<?php
 $title = "SIGCSE 2012 - Floor Plans";
 $onload = "pageLoad('attendees', 'attendeesKidsCamp');";
 include("../parts/top.php");
?>

<div class="SectionHeader"><div class="Full">
<h1>SIGCSE 2012 - Kids Camp</h1>
</div></div>

<div class="Alert">Details for the SIGCSE 2012 Kids Camp are not yet available, please check back soon.</div>

<p><img src="/sigcse2011/images/logos/sponsors/microsoft.png" align="left"  class="headshot"/> Computers and t-shirts for Kids Camp are available due to the generous support of Microsoft. Thank you!
&nbsp;<br/>&nbsp;<br/>&nbsp;</p>

<?php
 $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
 $mainPage = true;
 include("../parts/bottom.php");
?>