<?php
 $title = "SIGCSE 2012 - Symposium Fees";
 $onload = "pageLoad('attendees', 'attendeesFees');";
 include("../parts/top.php");
?>

<div class="SectionHeader"><div class="Full">
<h1>SIGCSE 2012 - Symposium Fees</h1>
</div></div>

<p>To assist potential attendees who need detailed cost information, we are happy to offer this summary.</p>

<p>Notes:</p>

<ul>
<li>The early registration deadline is <strong>Monday, January 30, 2012</strong>. Registrations postmarked or FAXed on or before this date are considered to be 'early.'</li>
<li>The late registration fees apply from <strong> Tuesday, January 31, 2012 through Wednesday, February 22, 2012</strong>;.  Registrations that miss the early deadline but are received on or before February 22, 2012 are considered to be 'late.'</li>
<li>After the late deadline, the on-site rates will apply. Symposium attendees will no longer be able to register on-line. Registration may be completed at the symposium registration desk starting at 3:00 p.m. on Wednesday, February 29th. Complete on-site registration hours are available from our symposium registration gateway page.</li>
</ul>


<div class="SectionHeader"><div class="Full">
<h2><a name="need">Symposium Registration</a></h2>
</div></div>
<br/>

<ul>
 <li>Early: $250 for SIGCSE members, $310 for non-members</li>
 <li>Late: $290 for SIGCSE members, $350 for non-members</li>
 <li>On-site: $330 for SIGCSE members, $390 for non-members</li>
 <li>K12 one-day (Friday): $80 for early, $110 for late or onsite</li>
 <li>K12 two-day (Friday/Saturday): $150 for early, $180 for late or onsite</li>
 <li>Students (at any time): $60 for ACM/SIGCSE members, $70 for non-members</li>
</ul>

<p>Regular conference registration includes: One copy of the symposium proceedings on CD; all paper sessions, panels, BOFs, and keynotes; the symposium reception ; the exhibition hall (and coffee breaks); and the Saturday luncheon.</p> 

<p>The special one-day K12 rate includes access to all Friday technical sessions, the exhibition hall (and coffee breaks), and one copy of proceedings on CD.</p>

<div class="SectionHeader"><div class="Full">
<h2><a name="need">Other Activity/Event Fees</a></h2>
</div></div>
<br/>

<ul>
 <li>Workshops (each): $70 early, $85 late, $100 on-site</li>
 <li>Additional reception tickets: $25 each</li>
 <li>Additional luncheon tickets: $40 each</li>
 <li>Additional copies of the symposium proceedings CD: $10 each</li>
 <li>A limited number of printed copies of the symposium proceedings will be available for $50 each.</li>
</ul>

<?php
 $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
 $mainPage = true;
 include("../parts/bottom.php");
?>