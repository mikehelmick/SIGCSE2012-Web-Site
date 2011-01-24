<?php
 $title = "SIGCSE 2012 - FAQ";
 $onload = "pageLoad('faq', 'attendeesFAQ');";
 include("../parts/top.php");
 include("common.php");
?>
<div class="SectionHeader"><div class="Full">
<h2>Attendees FAQs</h2>
</div></div>
<ol>
  <li><em>I am not a U.S. Citizen. Can SIGCSE give me an invitation letter?</em><p> SIGCSE 2012 does not issue formal invitation letters. The Association for Computing Machinery can, however, issue a visa support letter.   Please visit the <a href="/sigcse2012/attendees/visas.php">Visa Information for International Travelers</a> page for details.</p> </li>
</ol>
<?php
 $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
 $mainPage = true;
 include("../parts/bottom.php");
?>