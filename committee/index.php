<?php
 $title = "SIGCSE 2012 - Home";
 $onload = "pageLoad(null, 'committee');";
 include("../parts/top.php");
?>
<div class="SectionHeader"><div class="Full">
<h2>SIGCSE 2010 Program Committee</h2>
</div></div>
<table class="FadeTable" cellspacing="0" cellpadding="0">
  <tr class="header"><td colspan="3" align="center">PROGRAM COMMITTEE</td></tr> 
  <tr><td align="left" valign="top">
<p><strong>Symposium Chairs</strong><br /> 
Laurie Smith King<br /> 
College of the Holy Cross<br />
&nbsp;<br/>
Dave Musicant<br/>
Carleton College<br/>
<script>write_email("sigcse12-symposium", "cs.holycross.edu");</script>
</p>

<p>
<strong>Program Chairs</strong><br>
Tracy Camp<br/>
Colorado School of Mines<br/>
&nbsp;<br/>
Paul Tymann<br/>
Rochester Institute of Technology<br/>
<script>write_email("sigcse12-program", "cs.holycross.edu");</script></p>

<p><b>Panels and Special Sessions</b><br/>
Chuck Leska<br/>
Randolph Macon College<br/>
<script>write_email("sigcse12-panels", "cs.holycross.edu");</script><br/>
<script>write_email("sigcse12-specials", "cs.holycross.edu");</script></p>

<p><b>Workshops</b><br/>
Adrienne Decker<br/>
University at Buffalo (SUNY)<br/>
&nbsp;<br/>
Lester I. McCann<br/>
The University of Arizona<br/>
<script>write_email("sigcse12-workshops", "cs.holycross.edu");</script>
</p>

<p><b>Publications</b><br/>
Brad Miller<br/>
Luther College<br/>
<script>write_email("sigcse12-publications", "cs.holycross.edu");</script>
</p>

<p><b>Registration</b><br/>
Cary Laxer and Lynn Degler<br/>
Rose-Hulman Institute of Technology<br/>
&nbsp;<br/>
Larry Merkle<br/>
Wright State University<br/>
<script>write_email( "sigcse12-registration", "cs.holycross.edu" );</script></p>

</td><td align="left" valign="top">

<p><b>Posters</b><br/>
Kris Nagel<br/>
Georgia Gwinnett College<br/>
<script>write_email("sigcse12-posters", "cs.holycross.edu");</script></p>

<p><b>Birds Of A Feather</b><br/>
Olaf Hall-Holt<br/>
St. Olaf College<br/>
<script>write_email("sigcse12-bofs", "cs.holycross.edu");</script>
</p>

<p><b>Student Volunteers and Student Activities</b><br/>
Mary Anne Egan<br/>
Siena College<br/>
&nbsp;<br/>
Steven Huss-Lederman<br/>
Beloit College<br/>
<script>write_email("sigcse12-volunteers", "cs.holycross.edu");</script>
</p>

<p><b>Treasurer</b><br/>
Scott McElfresh<br/>
Wake Forest University<br/>
<script>write_email("sigcse12-treasurer", "cs.holycross.edu");</script>
</p>

<p><b>Database Administrators</b><br/>
Henry Walker <br/>
Grinnell College <br/>
<br/> 
John Dooley <br/>
Knox College <br/>
<script>write_email("sigcse12-database", "cs.holycross.edu");</script>
</p>

<p><b>Webmaster</b><br/>
Michael T. Helmick <br/>
Google <br/>
<script>write_email( "sigcse12-webmaster", "cs.holycross.edu" );</script></p>

</td><td align="left" valign="top">

<p><b>Evaluations</b><br/>
Carl Alphonce<br/>
University at Buffalo, SUNY<br/>
<script>write_email("sigcse12-evaluations", "cs.holycross.edu");</script>
</p>

<p><b>Kids' Camp</b><br/>
Susan Fox<br/>
Macalester Collage<br/>
&nbsp;<br/>
Sarah Monisha Pulimood<br/>
The College of New Jersey<br/>
<script>write_email("sigcse12-kidscamp", "cs.holycross.edu");</script>
</p>

<p><b>Support/Exhibitor Liaison</b><br/>
Susan Rodger<br/>
Duke University<br />
<script>write_email("sigcse12-exhibitors", "cs.holycross.edu");</script></p>

<p><b>Pre-Conference Events Liaison</b><br/>
Briana Morrison<br/>
Southern Polytechnic State University<br/>
<script>write_email("sigcse12-preconference", "cs.holycross.edu");</script></p>

<p><b>K-12 Liaison</b><br/>
John Harrison<br/>
Princess Ann High School<br/>
Virginia Beach, VA<br/>
<script>write_email("sigcse12-k12", "cs.holycross.edu");</script>
</p>

<p><b>International Liaison</b><br/>
Raymond Lister<br/>
University of Technology<br/>
<script>write_email("sigcse12-international", "cs.holycross.edu");</script>
</p>

<p><b>Local Arrangements</b><br/>
Sarah Heckman<br/>
NC State University<br/>
<script>write_email("sigcse12-local", "cs.holycross.edu");</script>
</p>

<p><b>Student Research Competition</b><br/>
Ann Sobel <br/>
Miami University (Ohio) <br/>
<script>write_email( "sigcse12-src", "cs.holycross.edu" );</script></p>
</td></tr>
</table>

<?php
 $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
 $mainPage = true;
 include("../parts/bottom.php");
?>