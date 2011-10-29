<?php
 $title = "SIGCSE 2012 - Attendees";
 $onload = "pageLoad('attendees', 'attendeesRaleigh');";
 include("../parts/top.php");
?>
<div class="SectionHeader"><div class="Full">
<h1>Information About Raleigh</h1>
</div></div>

<ul>
 <li><a href="#dining">Dining / local attractions</a></li>
 <li><a href="#rline">R-line (local bus)</a></li>
 <li><a href="#more">More info about Raleigh</a></li>
</ul>

<div class="GoodMessage">We're still collecting information about Raleigh! Check back as we get closer to SIGCSE 2012.</div>

<div class="SectionHeader"><div class="Full">
<h2><a name="dining">Dining / local attractions</a></h2>
</div></div>
<p>Downtown Raleigh offers a variety of restaurants within walking distance of the convention center. See <a href="http://www.visitraleigh.com/pdf/hanging_around_downtown_map.pdf">this map for more info</a>.</p>

<div class="SectionHeader"><div class="Full">
<h2><a name="rline">R-line</a></h2>
</div></div>
<p>The R-line is a free bus that loops around downtown Raleigh, which can be used to reach additional restaurants and attractions. More information can be found at the <A href="http://www.godowntownraleigh.com/get-around/r-line">R-line website</a>.</p>


<div class="SectionHeader"><div class="Full">
<h2><a name="#more">More info about Raleigh</a></h2>
</div></div>
<p>Looking for more things to do while in Raleigh? There are lots of suggestions available on <a href="http://www.visitraleigh.com/visitors/">VisitRaleigh.com</a>.</p>

<?php
 $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
 $mainPage = true;
 include("../parts/bottom.php");
?>