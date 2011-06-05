<?php
 $title = "SIGCSE 2012 - Attendees";
 $onload = "pageLoad('attendees', 'attendeesKeynotes');";
 include("../parts/top.php");
?>
<div class="SectionHeader"><div class="Full">
<h1>SIGCSE 2012 - Keynote Speakers</h1>
</div></div>

<ul>
 <li><a href="#thursday">Frederick P. Brooks, Jr.</a> (Thursday, March 1, 2012)</li>
 <li><a href="#saturday">Fernanda Viégas and Martin Wattenberg</a> (Saturday, March 3, 2012)</li>
</ul>

<div class="SectionHeader"><div class="Full">
<h2><a name="thursday">Frederick P. Brooks, Jr</a></h2>
</div></div>

<p>
<img src="/sigcse2012/attendees/images/brooks.jpg" align="left" class="headshot" />
<strong>Frederick P. Brooks, Jr.</strong><br/>
Kenan Professor of Computer Science<br/>
University of North Carolina at Chapel Hill
</p>

<div class="SectionHeader" style="clear: left;"><div class="Full">
<h2><a name="saturday">Fernanda Viégas and Martin Wattenberg</a></h2>
</div></div>

<p>
<img src="/sigcse2012/attendees/images/fm.jpg" align="left" class="headshot" />
<strong>Fernanda Viégas and Martin Wattenberg</strong><br/>
Google's "Big Picture" visualization research group in Cambridge, Massachusetts
</p>

<?php
 $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
 $mainPage = true;
 include("../parts/bottom.php");
?>