<?php
 $title = "SIGCSE 2012 - Paper Submission Guidelines";
 $onload = "pageLoad('authors', 'papers');";
 include("../parts/top.php");
?>
<h1>Paper Submission Guidelines</h1>
<div class="Alert">By SIGCSE policy, at least one author of each accepted paper is required to register, attend and present the paper.</div>             
             
<table width="99%">
 <tr>
  <td width="50%" align="left" valign="top">
  <h3>Contents:</h3>
  <ul>
    <li><a href="#kinds">What Kinds Of Papers Are Customary?</a></li>
    <li><a href="#format">How Should The Paper Be Formatted?</a></li>
    <li><a href="#submit">How Do I Submit My Paper?</a></li>
    <li><a href="#presentation">Presentation Notes</a></li>
  </ul>
  </td>
  <td width="50%" align="center" valign="top">
    <div class="GoodMessage">
      <h2><a name="kind">Important Dates for Paper Authors</a></h2>
      <table>
       <tr>
        <td align="left" valign="top">Submission Deadline:</td><td align="left" nowrap="nowrap">Friday, September 2, 2011</td>
       </tr>
       <tr><td align="right" colspan="2">
@11:59 p.m. Hawaii-Aleutian Standard Time (HST)</td>
       </tr>
       <tr>
  	    <td align="left">Author Notification:</td><td align="left" nowrap="nowrap">Monday, October 17, 2011</td>
       </tr>
       <tr>
 	    <td align="left">Updates to Paper Title &amp; Authors:</td><td align="left" nowrap="nowrap">Monday, October 31, 2011</td>
       </tr>
       <tr>
  	    <td align="left">Camera-Ready Copy:</td><td align="left" nowrap="nowrap">November 28, 2011</td>
       </tr>
      </table>
    </div>
  </td>              
 </tr>
</table>

<div class="SectionHeader"><div class="Full">
<h2><a name="kinds">What Kinds Of Papers Are Customary?</a></h2>
</div></div>          
<p>We invite papers falling into the following four broad classes.</p>
<ul>
 <li><strong>Experience Reports</strong> describe an idea, course or classroom experience that worked well and is now recommended to others.</li>
 <li><strong>Research Studies</strong> present a careful study, with an appropriate use of methodology (e.g., case study, qualitative methods, quasi-experimental, experimental) to support the investigation and stated results. The methodology does not need to be quantitative; it does, however, need to be appropriate to support the claims made by the author.</li>
 <li><strong>Philosophical Papers</strong> present an argument for a direction or idea to be considered in our curriculum, a particular course, or the overall field.</li>
 <li><strong>Tool Papers</strong> present courseware or a concrete process that has been developed and is now ready for wider use.</li>
</ul>
<p>In all cases, papers must be original work; they should include a review of previous, related work that helps place the submitted work into context. All results and arguments presented should follow clearly from the evidence provided in the paper.</p>
<p>Within the broad classes above, we encourage submissions that address any of the following course-related areas:</p>
<table class="fancy" style="border: 0px">
 <tr class="odd hover">
  <td class="outline">Algorithms</td>
  <td class="outline">Architecture</td>
  <td class="outline">Artificial Intelligence</td>
  <td class="outline">Compiler / Programming Languages &amp; Paradigms</td>
 </tr>
 <tr  class="even hover">
  <td class="outline">Computational Science</td>
  <td class="outline">CS 1/2</td>
  <td class="outline">Database</td>
  <td class="outline">Data Structures</td>
 </tr>
 <tr class="odd hover">
  <td class="outline">Discrete Mathematics</td>
  <td class="outline">Distributed/Parallel Computing</td>
  <td class="outline">Graphics/Visualization</td>
  <td class="outline">Human-Computer Interaction</td>
 </tr>
 <tr class="even hover">
  <td class="outline">Networking</td>
  <td class="outline">Operating Systems</td>
  <td class="outline">Real time/Embedded Systems</td>
  <td class="outline">Security</td>
 </tr>
 <tr class="odd hover">
  <td class="outline">Software Engineering</td>
  <td class="outline">Theory</td>
  <td colspan="2">&nbsp;</td>
 </tr>
</table>

<p>You may also consider submitting a paper in one of the following general topic areas:</p>
<table class="fancy" style="border: 0px">
 <tr class="odd hover">
  <td class="outline">Active Learning</td>
  <td class="outline">Accessibility</td>
  <td class="outline">AP/IB Courses &amp; Curricula</td>
  <td class="outline">Assessment</td>
 </tr>
 <tr class="even hover">
  <td class="outline">Classroom Management</td>
  <td class="outline">Communication Skills</td>
  <td class="outline">Computers and Society</td>
  <td class="outline">CS Ed Research</td>
 </tr>
 <tr class="odd hover">
  <td class="outline">Curriculum Issues</td>
  <td class="outline">Distance Education</td>
  <td class="outline">Ethics</td>
  <td class="outline">Gender and Diversity</td>
 </tr>
 <tr class="even hover">
  <td class="outline">Graduate Studies</td>
  <td class="outline">History of Computing</td>
  <td class="outline">Information Systems</td>
  <td class="outline">Information Technology</td>
 </tr>
 <tr class="odd hover">
  <td class="outline">Instructional Technologies</td>
  <td class="outline">K-12 Instruction</td>
  <td class="outline">Laboratory Experience</td>
  <td class="outline">Multimedia</td>
 </tr>
 <tr class="even hover">
  <td class="outline">New Curriculum / Program / Degree Initiatives</td>
  <td class="outline">Non-majors</td>
  <td class="outline">Non-traditional Students</td>
  <td class="outline">Object-Oriented Issues</td>
 </tr>
 <tr class="odd hover">
  <td class="outline">Outreach</td>
  <td class="outline">Professional Practice</td>
  <td class="outline">Student Research/Capstones/Internships</td>
  <td class="outline">Web-based Techniques</td>
 </tr>
</table>

<p>Descriptions of each of these paper categories can be found at the 
<?php if ($submissionReady) {
 echo '<a href="http://db.grinnell.edu/sigcse/sigcse2012/subjectDisplay.asp">online topic display site</a>';
} else {
 echo "<em>online topic display site (coming soon)</em>";
} 
?>. When you submit your paper, we will request that you indicate the broad class you believe the paper fits into as well as up to three categories from the course-related and general topic areas.
		</p>
             
<div class="SectionHeader"><div class="Full">
<h2><a name="format">How Should The Paper Be Formatted?</a></h2>
</div></div>     

<p>Authors must submit <b>two versions</b> of their paper: a "publication" version that includes author/institution information, and an anonymized version. The goal of the anonymized version is to, as much as possible, allow the author(s) of the paper an unbiased review. The anonymized version should have ALL references to the authors removed (including author's names and affiliation plus identifying information within the body of the paper such as websites or related publications).  Self-citations need not be removed if they are worded  so that the reviewer doesn't know if the writer is citing himself/herself. That is, instead of writing "We reported on our first experiment in 2007 in a previous paper [1]", the writer might write "In 2007, an initial experiment was done in this area as reported in [1]."</p>
            
<p>The publication version is available for use by the Program Committee. Both versions are limited to a <strong>maximum of 6 pages</strong> and must adhere to the <a href="format.php">SIGCSE 2012 Format Instructions</a>. <a href="http://www.acm.org/sigs/pubs/proceed/template.html">Templates are available in Word, WordPerfect, and LaTeX</a>.</p>
<p>If your paper is accepted you will have a chance to modify your publication version before it is published.</p>
<p>Electronic submission of papers is required.</p>

<div class="SectionHeader"><div class="Full">
<h2><a name="submit">How Do I Submit My Paper?</a></h2>
</div></div>

<ol>
 <li>Write your paper using the format specified above. Make sure that you have two versions of the paper: the publication version and an anonymized version. Within the paper, you must provide Category and Subject Descriptors, General Terms, and Keywords based on the ACM classification system. These requirements are described in more detail in the <a href="format.php">SIGCSE 2012 Format Instructions</a>.</li>
 <li> Convert your paper into Adobe PDF format. Refer to our <a href="creating_pdf.php">Creating Adobe PDF Documents page</a> for assistance.</li>
 <li> Submit both versions using the
<?php if ($submissionReady) {
 echo '<a href="http://www.cs.grinnell.edu/~sigcse/sigcse2012/submission.shtml">online paper submission form</a>';
} else {
 echo "<em>online paper submission form (coming soon)</em>";
} 
?>. Note that there are several ways you must categorize your paper submission in the online system. The broad classification you choose allows the reviewer to evaluate the paper from an appropriate perspective. The course and general topic categories you choose are used to select the reviewers who will evaluate your paper. To increase the likelihood that your paper will be given to a reviewer who is familiar with the content of your paper, choose one broad classification and at most three course-related and/or general topic areas that best fit your paper. <strong>Selection of more than four content categories may result in automatic rejection of your paper.</strong></li>
 <li>Please do not wait until the last minute to submit your documents, because that is when everyone else will be connecting to our server!</li>
 <li>Make note of the paper ID number and password assigned to your submission. You will receive an e-mail message confirmation. Spam filters sometimes trap these automatically generated messages so you may need to check your spam trap for the confirmation and later, acceptance or rejection notification.</li>
 <li> After receiving confirmation, go to the 
<?php if ($submissionReady) {
 echo '<a href="http://www.cs.grinnell.edu/~sigcse/sigcse2012/submission.shtml">author verification form</a>';
} else {
 echo "<em>author verification form (coming soon)</em>";
}
?> to review your submission for accuracy.  Send e-mail to <script>write_email("sigcse12-program", "cs.holycross.edu");</script> (Tracy Camp and Paul Tymann) if there are any problems.</li>
</ol>

<p><strong><i>Deadline:</i></strong> All electronic submissions must be <strong>received</strong> by <strong class="warning">Friday, September 2, 2011</strong> at 23:59 (11:59 p.m.) Hawaii-Aleutian Standard Time (HST).</p>

<div class="SectionHeader"><div class="Full">
<h2><a name="presentation">Presentation Notes</a></h2>
</div></div>
<ul>
 <li><strong>All presenters must register for the conference</strong>.</li>
 <li>Paper presentations are <strong>25 minutes</strong> in length. Five minutes of that time should be reserved for answering questions from the audience.</li>
 <li>Plan to attend the <strong>speakers' breakfast</strong> on the morning of your presentation to meet your session chair and to discuss the transitions between the presentations in your session.</li>
 <li>The conference supplies a projector but not a laptop. You will need to <strong>bring a laptop or arrange to use one from another attendee</strong>. You may want to contact your session chair or other speakers in your session to arrange sharing. (If neither you, the other session speakers, nor the session chair have a laptop,
send an email to <script>write_email("sigcse12-program", "cs.holycross.edu");</script>.)</li>
 <li>Bring a <strong>backup copy</strong> of your presentation on a USB stick. Session chairs may request that presenters arrange to make all presentations from a single laptop.</li>
 <li>Wireless Internet access should be available during your presentation, but please be aware that there is always a potential for failure.</li>
 <li> Arrive at your room <strong>at least 10 minutes before</strong> the session is scheduled to begin.</li>
</ul>
            
<div class="SectionHeader"><div class="Full">
<h2><a name="presentation">Questions</a></h2>
</div></div>   

<p>If you have questions about paper submissions, please contact SIGCSE 2012 Program Chairs: <script>write_email( "sigcse12-program", "cs.holycross.edu" );</script><br/>
Tracy Camp<br/>
Colorado School of Mines<br/>
&nbsp;<br/>
Paul Tymann<br/>
Rochester Institute of Technology<br/></p>

<?php
 $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
 $mainPage = false;
 include("../parts/bottom.php");
?>        
