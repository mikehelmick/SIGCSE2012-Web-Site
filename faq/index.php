<?php
 $title = "SIGCSE 2012 - FAQ";
 $onload = "pageLoad('faq', null);";
 include("../parts/top.php");
 include("common.php");
?>
<div class="SectionHeader"><div class="Full">
<h2>FAQs</h2>
</div></div>
<ol>
 <li><a href="submissions_faq.php">Submissions FAQ</a></li>
 <li><a href="reviewers_faq.php">Reviewers FAQ</a></li>
 <li><a href="students_faq.php">Students FAQ</a></li>
 <li><a href="attendees_faq.php">Attendees FAQ</a></li>
</ol>
<?php
 $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
 $mainPage = true;
 include("../parts/bottom.php");
?>