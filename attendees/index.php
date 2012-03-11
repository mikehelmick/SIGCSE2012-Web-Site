<?php
 $title = "SIGCSE 2012 - Attendees";
 $onload = "pageLoad('attendees', 'attendeesGeneral');";
 include("../parts/top.php");
?>
<div class="SectionHeader"><div class="Full">
<h1>SIGCSE 2012 - Information for Attendees</h1>
</div></div>

<table cellspacing="25px" width="99%">
<tr>
 <td valign="top" align="left">
   <ul>
	<li><a href="http://db.grinnell.edu/sigcse/sigcse2012/Program/Program.asp" target="_blank">SIGCSE 2012 Symposium Program</a></li>
	<li><a href="/sigcse2012/attendees/downloads/sigcse2012program.pdf">Download the program as a PDF file for offline viewing.</a></li>
	<li><a href="/sigcse2012/attendees/keynotes.php">Keynote Speakers</a></li>
	<li><a href="/sigcse2012/attendees/workshops.php">Workshop Schedule</a></li>
	<li><a href="http://experience-it.org/">Experience-It: Robot Circus</a></li>
	<li><a href="/sigcse2012/attendees/registration.php">Registration</a></li>
	<li><a href="/sigcse2012/attendees/fees.php">Symposium Fees</a></li>
	<li><a href="/sigcse2012/attendees/raleigh.php">About Raleigh</a></li>
	<li><a href="/sigcse2012/attendees/travel.php">Travel Information</a></li>
	<li><a href="/sigcse2012/attendees/accommodations.php">Accommodations</a></li>
	<li><a href="/sigcse2012/attendees/visas.php">Visa Information</a></li>
	<li><a href="/sigcse2012/attendees/kids_camp.php">Kids Camp</a></li>
	<li><a href="/sigcse2012/attendees/floor_plans.php">Floor Plans</a></li>
   </ul>
 </td>
 <td valign="top" align="center">
<div style='width: 240px; height: 420px; background-image: url( http://vortex.accuweather.com/adcbin/netweather_v2/backgrounds/spring2_240x420_bg.jpg ); background-repeat: no-repeat; background-color: #607041;' ><div id='NetweatherContainer' style='height: 405px;' ><script src='http://netweather.accuweather.com/adcbin/netweather_v2/netweatherV2ex.asp?partner=netweather&tStyle=normal&logo=1&zipcode=27602&lang=eng&size=12&theme=spring2&metric=0&target=_self'></script></div><div style='text-align: center; font-family: arial, helvetica, verdana, sans-serif; font-size: 10px; line-height: 15px; color: #FDEA11;' ><a style='font-size: 10px; color: #FDEA11' href='http://www.accuweather.com/us/nc/raleigh/27602/city-weather-forecast.asp?partner=accuweather' >Weather Forecast</a> | <a style='color: #FDEA11' href='http://www.accuweather.com/maps-satellite.asp' >Weather Maps</a> | <a style='color: #FDEA11' href='http://www.accuweather.com/index-radar.asp?partner=accuweather&zipcode=27602' >Weather Radar</a></div></div>
 </td>
</tr>
</table>

<?php
 $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
 $mainPage = true;
 include("../parts/bottom.php");
?>