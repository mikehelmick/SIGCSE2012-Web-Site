<?php
 $title = "SIGCSE 2012 - Travel Information";
 $onload = "pageLoad('attendees', 'attendeesTravel');";
 include("../parts/top.php");
?>
<div class="SectionHeader"><div class="Full">
<h1>SIGCSE 2012 Travel Information</h1>
</div></div>
<p><ul>
 <li><a href="#airline">Airline Service</a></li>
 <li><a href="#ground">Ground Transportation</a></li>
 <li><a href="#parking">Driving / Parking Information</a></li>
</ul></p>

<div class="SectionHeader"><div class="Full">
<h2><a name="#airline">Airline Service</a></h2>
</div></div>
<p>Commercial airline service to Raleigh is handled by the <a href="http://www.rdu.com/">Raleigh-Durham International Airport</a> (Code: RDU). Reserving a flight directly to Raleigh will provide the most convenient access to the conference. Please visit the airport's web site for the current list of airlines that serve Raleigh.</p>

<div class="SectionHeader"><div class="Full">
<h2><a name="#ground">Ground Transportation</a></h2>
</div></div>
<p>Numerous shuttles and taxis travel from both the airport to downtown 
Raleigh. <a href="href=www.supershuttle.com">SuperShuttle</a> and <a href=www.ridewhitehorse.com>White Horse Transportation</a> are two options you may wish to consider. Visit the <a href="http://www.rdu.com/groundtrans/groundtrans.htm">airport websites for additional ground transportation options</a>.</p>

<div class="SectionHeader"><div class="Full">
<h2><a name="#parking">Driving and Parking at the Raleigh Convention Center</a></h2>
</div></div>
<p>The Raleigh Convention Center is located in the heart of downtown Raleigh, minutes from Interstate 40. See map below.</p>

<p>Parking may be found in a number of nearby parking garages, all of which  cost $7/day for self-parking. Visit the <a href="www.raleighconvention.com">convention center website</a> for more information on directions and parking.</p>



<?php
 $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
 $mainPage = true;
 include("../parts/bottom.php");
?>