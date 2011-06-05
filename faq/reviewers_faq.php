<?php
 $title = "SIGCSE 2012 - FAQ";
 $onload = "pageLoad('faq', 'reviewersFAQ');";
 include("../parts/top.php");
 include("common.php");
?>
<div class="SectionHeader"><div class="Full">
<h2>Reviewers FAQs</h2>
</div></div>
<ol>
  <li> <em>What should I do if I'm assigned a paper that I am not
qualified to review?</em><p>Please contact the Program Chair(s) as soon as possible and inform them of the problem. The Program Chair(s) will likely assign you an alternate paper.</p></li>
  <li> <em>What should I do if I recognize the authors of a paper?</em><p>Make a value judgment.  If you feel you can impartially review the paper then go ahead and review it.  If you feel uncomfortable reviewing the paper then contact the Program Chair(s) as soon as possible.</p></li>
  <li><em>What should I do if I notice plagiarism in a paper?</em><p> SIGCSE will not accept papers that contain plagiarized material.  Please contact the Program Chair(s) immediately.</p></li>
  <li><em>Why is Photoshop trying to open my papers, and what can I do about it?</em><p style="font-size: 1.0em">For security reasons, reviewers receive papers via a URL that uses a <tt>.asp</tt> file extension. This extension is used for Active Server Pages, but also for Photoshop photo indices.  If you have Photoshop installed, your web browser or operating system may believe that Photoshop is the appropriate application to access the file's content. Here are two suggestions to deal with this problem:</p>
   <ol><li>Save the <tt>.asp</tt> file with a <tt>.pdf</tt> extension.  Outside of your browser, use Adobe Acrobat Reader (or another PDF file viewer) to open the file.</li>
    <li> Modify your operating system's and/or web browser's preferences to force it/them to open <tt>.asp</tt> files with Reader.  When you are finished retrieving your assigned papers, you will probably want to return the setting(s) to the original value(s).</li>
   </ol></p>
  </li>
  <li><em>Am I supposed to know who submitted the proposal for a panel, special session, or workshop?</em><p>Yes. Submissions in those categories are not supposed to be anonymous.</p></li>
</ol>
<?php
 $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
 $mainPage = true;
 include("../parts/bottom.php");
?>