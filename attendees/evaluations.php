<?php
 $title = "SIGCSE 2012 - Symposium Evaluation";
 $onload = "pageLoad('attendees', 'attendeesEvaluation');";
 include("../parts/top.php");
?>

<div class="SectionHeader"><div class="Full">
<h1>SIGCSE 2012 - Symposium Evaluation</h1>
</div></div>

<p>The SIGCSE 2012 Conference Committee hopes that you enjoyed (or are still enjoying!) this year's symposium. To help us learn what we did well, and what we could have done better, we invite you to complete the Symposium Evaluation survey. These survey results not only inform the 2011 committee, they also provide valuable insight to the members of the SIGCSE 2013 committee.</p>
<p>Complete the <a href="https://www.surveymonkey.com/s/SIGCSE2012">SIGCSE 2012 Symposium Evaluation</a></p>

<?php
 $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
 $mainPage = true;
 include("../parts/bottom.php");
?>