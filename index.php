<?php
 $title = "SIGCSE 2012 - Home";
 $onload = "pageLoad(null, 'home');";
 include("parts/top.php");
?>

<div class="Alert"><strong>BREAKING NEWS:</strong> <a href="/sigcse2012/attendees/news.php">Entrance, Street, and parking closures during SIGCSE</a>.</div>

<div class="GoodMessage">
<ul>
 <li><a href="http://www.streamtext.net/text.aspx?event=SIGCSE">Closed captioning for plenary sessions</a> Thursday 8:30am - 10:00am, Friday 8:30am - 10:00am, and Saturday 12:30pm - 2:30pm</li>
</ul>
</div>

<div class="SectionHeader"><div class="Full">
<h2>Welcome to SIGCSE 2012!</h2>
</div></div>
<p>SIGCSE 2012 continues our long tradition of bringing together colleagues from around the world to present papers, panels, posters, special sessions, and workshops, and to discuss computer science education in birds-of-a-feather sessions and informal settings. The SIGCSE Technical Symposium addresses problems common among educators working to develop, implement and/or evaluate computing programs, curricula, and courses. The symposium provides a forum for sharing new ideas for syllabi, laboratories, and other elements of teaching and pedagogy, at all levels of instruction.</p>
<p>Our three-sided conference theme, "Teaching, Learning, and Collaborating," commemorates North Carolina's renowned "Research Triangle" where SIGCSE 2012 will be held. Teaching, learning, and collaborating occur inside and outside of the classroom, among various combinations of students, academics, industry professionals, and others.</p>
<h2>Call for participation</h2>
<p><a href="/sigcse2012/authors/index.php">View the SIGCSE 2012 call for participation.</a></p>

<h2>Our Venue: The Raleigh Convention Center</h2>
<p>The <a href="http://www.raleighconvention.com/about/facilities">Raleigh Convention Center</a> (500 South Salisbury Street, Raleigh, NC 27601) is a nearly brand new convention center located directly in downtown Raleigh, NC. A variety of restaurants and activities are within a short walking distance, and a <a href="http://www.godowntownraleigh.com/get-around/r-line">free city bus</a> allows for quick and easy further exploration.

<div class="SectionHeader"><div class="Full">
<h2>SIGCSE 2012 Supporters and Exhibitors</h2>
</div></div> 

<table width="100%">
<tr>
 <td align="center" valign="top" colspan="2"><h3>Platinum Plus Supporter</h3></td>
</tr>
<tr>
 <td align="center" valign="middle" colspan="2">
   <a href="http://www.microsoft.com/education/highered/faculty/" alt="Microsoft Highered"><img src="/sigcse2012/images/logos/sponsors/microsoft.png" /></a>
 </td>
</tr>
<tr>
 <td align="center" valign="top" colspan="2"><h3>Platinum Supporters</h3></td>
</tr>
<tr>
<?php
 include("parts/platinum.php");
?>
</tr>
<tr>
 <td align="center" valign="top" colspan="2"><h3>Silver Supporters</h3></td>
</tr>
<tr>
 <td align="center" valign="middle" colspan="2"><img alt="SAP Logo" src="/sigcse2012/images/logos/sponsors/sap.png" />
 </td>
</tr>
<tr>
 <td align="center" valign="top" colspan="2"><h3>Additional Support Provided By:</h3></td>
</tr>
<tr>
<?php
 include("parts/additional.php");
?>
</tr>
</table>

<?php
 $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
 $mainPage = true;
 include("parts/bottom.php");
?>