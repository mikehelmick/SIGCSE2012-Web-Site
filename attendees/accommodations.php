<?php
 $title = "SIGCSE 2012 - Accommodations";
 $onload = "pageLoad('attendees', 'attendeesAccommodations');";
 include("../parts/top.php");
?>

<div class="SectionHeader"><div class="Full">
<h1>SIGCSE 2012 - Hotel Accommodations</h1>
</div></div>
<p>To help conference attendees begin their travel planning, we are happy to provide the following information about the hotels which will have blocks of rooms available at special conference rates. And, as SIGCSE has done in the past, we will have a roommate matching website to help pair you with a roommate to reduce the cost of attending the symposium.</p>
<p><ul>
 <li><a href="#hotels">Hotels</a></li>
 <li><a href="#roommate">Roommate Matching</a></li>
</ul></p>

<div class="SectionHeader"><div class="Full">
<h2><a name="hotels">Hotels</a></h2>
</div></div>

<p>There are three conference hotels. The Sheraton Raleigh Hotel is located diagonally across the street from the convention center, and is accessible to it underground via a parking garage. The Clarion Raleigh Hotel State Capital is a nice yet more economical option that is located only 8 blocks from the convention center and is accessible by foot or by <a href="http://www.godowntownraleigh.com/get-around/r-line">free city shuttle</a>. Finally, the Raleigh Marriott City Center Hotel is available as well. Note that we have already filled our required minimum number of rooms at the Marriott, so please consider making a reservation at the Sheraton or the Clarion.

<p><b>Sheraton Raleigh Hotel Information</b><br/>
<ul>
 <li><a href="http://www.starwoodmeeting.com/StarGroupsWeb/res?id=1102161656&key=EC8A">Online Reservations</a> <strong>(double SPG points for attendees)</strong></li>
 <li>Reservations by phone: 1-800-325-3535, refer to the group by "SIGCSE", "SIGCSE 2012" or "The Association of Computing Machinery".</li>
 <li>$159/night, with free wireless internet</li>
 <li>Parking for $12/day</li>
</ul></p>

<p><b>Clarion Raleigh Hotel State Capital</b><br/>
<ul>
 <li>Reservations by phone only. Call the hotel directly at 1-919-832-0501 and ask for the ACM-SIGSCE group rate.</li>
 <li>$102/night, with free internet (wireless in the lobby and wired in the rooms)</li>
 <li>Free parking</li>
 <li>City shuttle bus stop is directly across the street from the hotel</li>
 <li>From the SIGCSE 2012 blog: <a href="http://sigcse2012.blogspot.com/2011/11/clarion-hotel-stay.html">Our Clarion hotel stay.</a></li>
</ul></p>

<p><b>Raleigh Marriott City Center Information</b><br/>
<ul>
 <li><a href="http://www.marriott.com/hotels/travel/rdumc?groupCode=acmacma&app=resvlink&fromDate=2/28/12&toDate=3/5/12">Online Reservations</a></li>
 <li>Reservations by phone: 1-800-228-9290.</li>
 <li>The group code for phone reservations is ACM; for online, it is ACMACMA. (The above link for online reservations will fill that in automatically.)</li>
 <li>$159/night, with free wireless internet</li>
 <li>Parking for $18/day</li>
</ul></p>

<div class="SectionHeader"><div class="Full">
<h2><a name="roommate">Roommate Matching</a></h2>
</div></div>

<p>We recognize that many SIGCSE attendees work at schools with very limited, even nonexistent!, travel budgets. To help you reduce your cost to participate in the symposium, we are happy to once again provide assistance with roommate matching: The <a href="http://www.tymann.us/sigcse">SIGCSE 2012 Roommate Database</a>. Once registered, you can input your preferences and see other registrants who have compatible preferences. The rest is up to you!</p>
<p>The roommate database is hosted and administered by <a href="http://www.cs.rit.edu/~ptt/">Paul Tymann</a>. Please contact Paul (<script>write_email("ptt", "cs.rit.edu");</script>) with any questions that you may have about this service.</p>

<?php
 $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
 $mainPage = true;
 include("../parts/bottom.php");
?>