<?php
 $title = "SIGCSE 2012 - FAQ";
 $onload = "pageLoad('faq', 'submissionsFAQ');";
 include("../parts/top.php");
 include("common.php");
?>
<div class="SectionHeader"><div class="Full">
<h2>Submission FAQs</h2>
</div></div>
<ol>
 <li><em>Which time zone is used for submissions deadlines?</em><p>Unless otherwise noted, all SIGCSE submission deadlines are at 23:59 (11:59 p.m.) Hawaii-Aleutian Standard Time (HST) on the indicated dates.  HST is 10 hours behind Greenwich Mean Time (that is, UTC -10).  For those of you in the US, that's six hours behind Eastern Daylight Time, five behind Central Daylight Time, and three behind Pacific Daylight Time.  The effect is that almost everyone has several 'extra' hours to polish their submissions to a gleaming shine. </p></li>
 <li><em>What is the typical paper acceptance percentage?</em><p> For both SIGCSE and ITiCSE the paper acceptance rate is typically around 30%. </p></li>
 <li><em>How many reviews does each paper receive?</em><p> The Program Chair(s) and Committee ensure that every paper receives a minimum of four reviews.</p></li>
 <li><em>How are papers selected?</em><p>The Program Chair(s) and Committee use the results of the double blind reviewing process as a starting point.  Typically, unless there are special circumstances, the top rated papers provide the majority of the program.  The rest of the program is chosen from among the other highly reviewed papers based on desired goals such as presenting a balanced program, emphasizing particular topics, and encouraging under-represented groups.  Particular attention is given to evaluating the suitability of papers that receive widely varying reviews or where a reviewer indicates a low familiarity with the paper's topic area.</p></li>
 <li><em>What is a double blind reviewing process?</em><p>By &quot;double blind reviewing process&quot;, we mean that reviewers do not know who submitted the papers they review, and authors do not know who reviewed their submissions.</p></li>
 <li><em>What is the standard A/V package that will be available to all accepted workshops?</em><p>Each workshop will receive a projector that will allow the presenters to connect a laptop (presenter provided) and project to the provided screen. Participants and presenters will also have access to the conference Wifi connection in the workshop rooms. Additional A/V requests should be made in the workshop submission and communication between the accepted workshop chairs will determine which requests can be fulfilled.</p></li>
</ol>
<?php
 $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
 $mainPage = true;
 include("../parts/bottom.php");
?>