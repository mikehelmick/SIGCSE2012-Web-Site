<?php
 $title = "SIGCSE 2012 - Reviewer Information";
 $onload = "pageLoad('reviewers', 'reviewerInformation');";
 include("../parts/top.php");
?>
<h1>Reviewer Information</h1>
<table width="99%">
 <tr>
  <td width="50%" align="left" valign="top">
  <h3>Contents:</h3>
  <ul>
    <li><a href="#volunteer">How Do I Volunteer to Review?</a></li>
    <li><a href="#review">How Do I Review SIGCSE Submissions?</a></li>
  </ul>
  
  </td>
  <td width="50%" align="center" valign="top">
    <div class="GoodMessage">
      <h2><a name="kind">Important Dates for Paper Reviewers</a></h2>
      <table>
       <tr>
        <td align="left">Paper Submission Deadline:</td><td align="left">Friday, September 2, 2011</td>
       </tr>
       <tr>
  	    <td align="left">Papers to Reviewers:</td><td align="left">Monday, September  5, 2011</td>
       </tr>
       <tr>
 	    <td align="left">Reviews Due:</td><td align="left">Wednesday, September 21, 2011</td>
       </tr>
      </table>
    </div>
  </td>              
 </tr>
</table>
           
<div class="SectionHeader"><div class="Full">
<h2><a name="volunteer">How Do I Volunteer to Review?</a></h2>
</div></div>
<p>All SIGCSE members are encouraged to participate in the reviewing process.</p>
<ul>
 <li><strong>For New Reviewers</strong> 
  <p>If you are interested in reviewing papers for SIGCSE 2012, you are invited to complete the
<?php if ($submissionReady) {
 echo '<a href="http://www.cs.grinnell.edu/~sigcse/sigcse2012/reviewerRegistration.shtml">reviewer information form</a>';
} else {
 echo "<em>reviewer information form (coming soon)</em>";
}
?>. Please limit yourself to areas in which you feel somewhat expert. The system will automatically ask you to consider the areas carefully if you choose more than four.</p></li>
 <li><strong>For Those Who Have Previously Reviewed</strong><p>All people currently listed in the reviewer database will receive an e-mail message in August with their current recorded information.</p>
  <ul>
	<li>If you would like to update your information in the database, go to the
<?php if ($submissionReady) {
 echo '<a href="http://www.cs.grinnell.edu/~sigcse/sigcse2012/reviewerRegistration.shtml">reviewer information form</a>';
} else {
 echo "<em>reviewer information form (coming soon)</em>";
}
?> by <strong class="warning">Friday, September  2, 2011</strong>. Please select your areas of reviewing carefully, limiting yourself to areas in which you have expertise.</li>
    <li> If for some reason you do not want to continue as a reviewer, please send e-mail to <a href="mailto:sigcse@cs.grinnell.edu">sigcse@cs.grinnell.edu</a> using &quot;Remove Reviewer from SIGCSE Database&quot; as the message subject, and include your name, reviewer number, and password in the message body.</li>
   </ul>
 </li>
</ul>

<div class="SectionHeader"><div class="Full">
<h2><a name="review">How Do I Review SIGCSE Submissions?</a></h2>
</div></div>
<p>Submissions are reviewed according to categories indicated by the authors.  Reviewers will be assigned no more than three papers or six submissions of another type, based on their indicated subject areas of expertise. At least four reviewers are assigned to each.  Papers are only available in electronic PDF format.  Reviewers must use a Web browser and software capable of displaying PDF documents (For example: <a href="http://get.adobe.com/reader/?promoid=BUIGO" target="_blank">Adobe Reader</a>).</p>
<p>The reviewing process has 3 simple steps:</p>
<ol>
 <li> When reviews are assigned, you will be sent the reference numbers for each submission you are reviewing along with a reminder of your reviewer ID and password. Become familiar with the review criteria by looking at the
<?php if ($submissionReady) {
 echo '<a href="http://db.grinnell.edu/sigcse/sigcse2012/Reviewers/selectReviewForm.asp">proposal review forms</a>';
} else {
 echo "<em>proposal review forms (link coming soon)</em>";
}
?> for each category of submission.</li>
  <li> Read through the collections of example review text for the types of submissions you are reviewing. Included are examples of comments for good, useful reviews.
  <ul>
   <li><a href="guide_papers.php">Guidelines for Reviewers of Paper Submissions</a></li>
   <li><a href="guide_panels.php">Guidelines for Reviewers of Panel Submissions</a></li>
   <li><a href="guide_sessions.php">Guidelines for Reviewers of Special Session Submissions</a></li>
   <li><a href="guide_workshops.php">Guidelines for Reviewers of Workshop Submissions</a></li>
   <li><a href="guide_bofs.php">Guidelines for Reviewers of Birds of a Feathers (BOFs) Submissions</a></li>
   <li><a href="guide_posters.php">Guidelines for Reviewers of Poster Submissions</a></li> 
  </ul>
  </li>
  <li> Access your assigned submission(s) through the
<?php if ($submissionReady) {
 echo '<a href="http://www.cs.grinnell.edu/~sigcse/sigcse2012/reviewerViewing.asp">submission viewing form</a>';
} else {
 echo "<em>submission viewing form (coming soon)</em>";
}
?>. You may review the submission on-line or print it for review at your leisure.
  <p><strong class="note">If your browser does not open a submission automatically, try saving the file with a .pdf extension and opening it  with Adobe Reader (or another PDF file viewer).  See the <a href="/sigcse2012/faq/reviewers_faq.php">Reviewers FAQ section</a> for additional information.</strong></p>
  </li>
  <li>After reviewing, complete a report for each submission.  Submit Reviews using the
<?php if ($submissionReady) {
 echo '<a href="http://www.cs.grinnell.edu/~sigcse/sigcse2012/reviewerViewing.asp">review submission form</a>';
} else {
 echo "<em>review submission form (coming soon)</em>";
}
?>.
  </li>
</ol>

<p><em>Note</em>: All reviews will be distributed anonymously to both the author(s) and reviewers of that submission. This will give the author feedback and provide information to reviewers as well.  It is hoped that, over time, this feedback will help make the review process more consistent as reviewers can compare their responses to those of others.</p>


<div class="SectionHeader"><div class="Full">
<h2><a name="questions">Questions?</a></h2>
</div></div>
<p>If you have questions about paper submissions, please contact SIGCSE 2012 Program Chairs: <script>write_email( "sigcse12-program", "cs.holycross.edu" );</script><br/>
Tracy Camp<br/>
Colorado School of Mines<br/>
&nbsp;<br/>
Paul Tymann<br/>
Rochester Institute of Technology<br/></p>

<?php
 $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
 $mainPage = true;
 include("../parts/bottom.php");
?>