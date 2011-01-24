<?php
 $title = "SIGCSE 2012 - FAQ";
 $onload = "pageLoad('faq', 'studentsFAQ');";
 include("../parts/top.php");
 include("common.php");
?>
<div class="SectionHeader"><div class="Full">
<h2>Students FAQs</h2>
</div></div>
<ol>
  <li><em>Can students register for the conference at a reduced rate?</em><p>Yes! Conference registration is usually significantly less expensive for students than for regular attendees. For students interested in volunteering some of their time to contribute to the success of the conference, we reimburse the conference registration fee. For more information about how to volunteer, see our Student Volunteers page.</p></li>
</ol>
<?php
 $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
 $mainPage = true;
 include("../parts/bottom.php");
?>