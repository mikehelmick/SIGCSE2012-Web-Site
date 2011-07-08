<?php
 $title = "SIGCSE 2012 - Floor Plans";
 $onload = "pageLoad('attendees', 'attendeesFloorPlans');";
 include("../parts/top.php");
?>
<div class="SectionHeader"><div class="Full">
<h1>SIGCSE 2012 Floor Plans</h1>
</div></div>

<p><ul><li>The symposium is located in the Raleigh Convention Center.</li>
<li>A few events (some BOFs, e.g.) are located in the Marriott Hotel immediately across the street.
Attendees are welcome to walk across the street, or walk through an underground tunnel.</li></ul></p>

<h3>Raleigh Convention Center Rooms</h3>
<table><tr>
<td align="center" valign="top">Exhibit Level<br/>
<a href="images/rcc_exhibitLevel_full.jpg" rel="lightbox[floorplan]" title="Raleigh Convention Center, Exhibit Level"><img src="images/rcc_exhibitLevel_thumb.jpg" /></a></td>
<td align="center" valign="top">200 Level</br>
<a href="images/rcc_200Level_full.jpg" rel="lightbox[floorplan]" title="Raleigh Convention Center, 200 Level"><img src="images/rcc_200Level_thumb.jpg" /></a></td>
<td align="center" valign="top">300 Level<br/>
<a href="images/rcc_300Level_full.jpg" rel="lightbox[floorplan]" title="Raleigh Convention Center, 300 Level"><img src="images/rcc_300Level_thumb.jpg" /></a></td>
<td align="center" valign="top">Ballroom Level<br/>
<a href="images/rcc_ballroomLevel_full.jpg" rel="lightbox[floorplan]" title="Raleigh Convention Center, Ballroom Level"><img src="images/rcc_ballroomLevel_thumb.jpg" /></a></td>
</tr></table>

<h3>Rooms at the Marriott Hotel</h3>
<table><tr>
<td align="center" valign="top">Marriott Hotel meeting rooms<br/>
<a href="images/rmcc_floorplan_full.jpg" rel="lightbox[floorplan]" title="Marriott Hotel"><img src="images/rmcc_floorplan_thumb.jpg" /></a></td>
</tr></table>

<?php
 $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
 $mainPage = true;
 include("../parts/bottom.php");
?>