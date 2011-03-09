<?php
 $title = "SIGCSE 2012 - Home";
 $onload = "pageLoad(null, 'home');";
 include("parts/top.php");
?>
<div class="SectionHeader"><div class="Full">
<h2>Welcome to SIGCSE 2012!</h2>
</div></div>
<p>SIGCSE 2012 continues our long tradition of bringing together colleagues from around the world to present papers, panels, posters, special sessions, and workshops, and to discuss computer science education in birds-of-a-feather sessions and informal settings. The SIGCSE Technical Symposium addresses problems common among educators working to develop, implement and/or evaluate computing programs, curricula, and courses. The symposium provides a forum for sharing new ideas for syllabi, laboratories, and other elements of teaching and pedagogy, at all levels of instruction.</p>
<p>Our three-sided conference theme, "Teaching, Learning, and Collaborating," commemorates North Carolina's renowned "Research Triangle" where SIGCSE 2012 will be held. Teaching, learning, and collaborating occur inside and outside of the classroom, among various combinations of students, academics, industry professionals, and others.</p>
<h2>Call for participation</h2>
<p><a href="/sigcse2012/authors/index.php">View the SIGCSE 2012 call for participation.</a></p>
<h2>Help select the SIGCSE 2012 Logo!</h2>
<p>Stop by the SIGCSE 2012 both in the SIGCSE 2011 exhibit hall during the symposium (March 9 - 13th) in Dallas, TX. The winning logo will be announced on Saturday. The candidate logs appear below:</p>

<table width="100%">
<tr><td align="center"><img src="/sigcse2012/logo/logo01.png" /></td></tr>
<tr><td align="center"><img src="/sigcse2012/logo/logo02.png" /></td></tr>
<tr><td align="center"><img src="/sigcse2012/logo/logo03.png" /></td></tr>
</td></tr></table>

<?php
 $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
 $mainPage = true;
 include("parts/bottom.php");
?>