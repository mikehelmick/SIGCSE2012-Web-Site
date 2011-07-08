<?php
 $title = "SIGCSE 2012 - Visas";
 $onload = "pageLoad('attendees', 'attendeesVisas');";
 include("../parts/top.php");
?>
<div class="SectionHeader"><div class="Full">
<h1>Visa Information for International Travelers</h1>
</div></div>

<div class="SectionHeader"><div class="Full">
<h2><a name="need">Do I Need A Visa?</a></h2>
</div></div>
<br/>

<div class="Alert">NOTE:  U.S. Visa information is subject to change.  Please don't rely on this or any other unofficial web site for current U.S. government policies.</div>

<p>The U.S. State Department Web Site, <a href="http://travel.state.gov">travel.state.gov</a>, has information about obtaining a visa for those traveling to the United States.  This site has links to Web sites for U.S. embassies and consulates worldwide.  The embassy and consulate Web sites have very helpful information about procedures, timelines, communities served, required documentation, and fees.</p>
<p>If you are traveling to the United States for tourism or business for 90 days or less, you may be eligible to visit the US without a visa.  For complete and updated information on requirements for this program, please see the US State Department's page on the <a href="http://travel.state.gov/visa/temp/without/without_1990.html">Visa Waiver Program</a>.</p>
<p>Also be aware that the U.S. Department of Homeland Security has recently enhanced its security requirements for international travelers who are citizens of countries covered by the Visa Waiver Program. Information about these requirements is available from the <a href="http://www.cbp.gov/xp/cgov/travel/id_visa/esta/" onclick="target='newwindow'">Electronic System for Travel Authorization</a> web site. In particular, travelers are expected to apply at least 48 hours prior to departure.  We also understand that you should have your hotel's street address handy when you go through U.S. Customs.  You can find the addresses of the hotels on our accommodations (<i>coming soon</i>) web page. </p>
<br /> 
 
<div class="SectionHeader"><div class="Full">
<h2><a name="need">Visa Support Letters</a></h2>
</div></div>
<br/> 

<p>The Association for Computing Machinery (ACM, SIGCSE's umbrella organization) does not issue formal invitation letters for visas.  However, they can issue a visa support letter.  For a visa support letter, please send a request to <a href="mailto:supportletters@acm.org">supportletters@acm.org</a> with the following information:
<ol>
 <li> Name and mailing address as it appears on your passport</li>
 <li> The name of the conference you wish to attend (SIGCSE 2012)</li>
 <li> Registration confirmation number</li>
 <li> If you are the author of any papers accepted for the conference, please provide the title</li>
 <li> Fax number (visa support letters are not issued via email)</li>
</ol>
</p>

<br /><hr />

<div class="SectionHeader"><div class="Full">
<h2><a name="questions">Additional Questions?</a></h2>
</div></div>
<br/> 

<p>If you have specific questions that are not covered here, please visit the <a href="http://travel.state.gov/visa/visa_1750.html">US Department of State Visa Information</a> page or contact Catherine Lang  (<script>write_email("sigcse12-international", "cs.holycross.edu");</script>), the SIGCSE 2012 International Liaison.</p>

<?php
 $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
 $mainPage = true;
 include("../parts/bottom.php");
?>