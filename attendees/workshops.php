<?php
 $title = "SIGCSE 2012 - Workshop Program";
 $onload = "pageLoad('attendees', 'attendeesWorkshops');";
 include("../parts/top.php");
?>
<div class="SectionHeader"><div class="Full">
<h1>SIGCSE 2012 - Workshop Schedule</h1>
</div></div>

<ul>
 <li>View the workshops for <a href="http://db.grinnell.edu/sigcse/sigcse2012/Program/viewAcceptedDayTime.asp?timeID=1080">Wednesday, Feb 29th, 2012</a> (7pm to 10pm)</li>
 <li>View the workshops for <a href="http://db.grinnell.edu/sigcse/sigcse2012/Program/viewAcceptedDayTime.asp?timeID=3180">Friday, March 2nd, 2012</a> (7pm to 10pm)</li>
 <li>View the workshops for <a href="http://db.grinnell.edu/sigcse/sigcse2012/Program/viewAcceptedDayTime.asp?timeID=4100">Saturday, March 3rd, 2012</a> (3pm to 6pm)</li>
</ul>

<?php
 $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
 $mainPage = true;
 include("../parts/bottom.php");
?>