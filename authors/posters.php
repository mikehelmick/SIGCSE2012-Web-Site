<?php
 $title = "SIGCSE 2012 - Poster Submission Guidelines";
 $onload = "pageLoad('authors', 'posters');";
 include("../parts/top.php");
?>
<h1>Poster Submission Guidelines</h1>             
 <div class="Alert">By SIGCSE policy, at least one author of each accepted poster is required to register for the conference, and to present the poster during the assigned poster session.</div> 
             
<table width="99%">
 <tr>
  <td width="50%" align="left" valign="top">
  <h3>Contents:</h3>
  <ul>
    <li><a href="#what">What Is A Poster?</a></li>
    <li><a href="#ideas">Poster Topic Ideas</a></li>
    <li><a href="#presentation">Poster Presentation</a></li>
    <li><a href="#format">How Should The Proposal Be Formatted?</a></li>
    <li><a href="#submit">How Do I Submit My Proposal?</a></li>
  </ul>
  </td>
  <td width="50%" align="center" valign="top">
    <div class="GoodMessage">
      <h2><a name="kind">Important Dates for Poster Authors</a></h2>
      <table>
       <tr><td align="left" valign="top">Submission Deadline:</td><td align="left" nowrap="nowrap">October 24, 2011</td></tr>
       <tr><td align="right" colspan="2">@11:59 p.m. Hawaii-Aleutian Standard Time (HST)</td></tr>
       <tr><td align="left">Author Notification:</td><td align="left" nowrap="nowrap">November 14, 2011</td></tr>
       <tr><td align="left">Updates to Titles, Authors, &amp; Abstracts Due:</td><td align="left">November 28, 2011</td></tr>
      </table>
    </div>
  </td>              
 </tr>
</table>
                  
<div class="SectionHeader"><div class="Full">
<h2><a name="what">What Is A Poster?</a></h2>
</div></div> 
<p>Posters provide an opportunity for an informal presentation featuring "give and take" with conference attendees.  Presenting a poster is also a good way in which to discuss and receive feedback on a work in progress that has not been fully developed into a paper.</p>
<p><strong>Posters should not be previously published or a previous poster</strong>.</p>
<p>Poster proposal review is <strong>not</strong> blind.</p>
<p>Graduate or undergraduate students submitting posters may instead wish to submit to the <a href="student_research.php">ACM Student Research Competition (SRC)</a> held at SIGCSE 2012. Like normal posters, SRC posters are displayed at the conference, but the top poster authors also present their work and may win prizes and proceed to the international ACM Student Research Competition.</p>

<div class="SectionHeader"><div class="Full">
<h2><a name="ideas">Poster Topic Ideas</a></h2>
</div></div>      
<p>The topic of a poster presentation is not limited. However, the topic should lend itself to presentation in poster format with additional details available in a handout or URL. You might consider a poster presentation of teaching materials that you would like to share or preliminary research findings, such as:</p>
<ul>
 <li>imaginative assignments</li>
 <li>innovative curriculum design</li>
 <li>laboratory materials</li>
 <li>effective ideas for recruiting and retaining students</li>
 <li>computing education research that is in a preliminary stage</li>
</ul>
<p>Suggestions for poster design are given in <a href="http://doi.acm.org/10.1145/332132.332138"> Research Posters 101</a>. (Although these suggestions were published for student researchers, the ideas are also applicable to posters for this conference.)</p>

<div class="SectionHeader"><div class="Full">
<h2><a name="presentation">Poster Presentation</a></h2>
</div></div>      

<p> Poster presentations at SIGCSE will be competitive and if your proposal is accepted, your poster will be displayed for a 2-hour time period Friday during the conference. You will be expected to &quot;present&quot; your poster at that time.  At least one author for each accepted poster must register for and attend the conference.  The space available for your poster will be 4 feet high by 8 feet wide with a small shelf below. Power sources are not available.</p>

<div class="SectionHeader"><div class="Full">
<h2><a name="format">How Should The Proposal Be Formatted?</a></h2>
</div></div>      
<p>Poster proposals consist of two documents:  The full poster proposal (submitted in PDF format) and a poster abstract (description) which must be entered into a text box on the submission page.  The full proposal is used for review and includes a copy of the poster abstract.  The format for the proposal should be as follows.</p>

<ol>
 <li><strong>Poster Proposal Format (limited to 2 pages)</strong>
  <p style="font-size: 1.0em">Your proposal should include as much of the following information as possible.  Please limit your proposal to two (2) pages.  A list of the poster titles and authors will be included in the conference proceedings and the program.  Poster proposals are not published.</p>
  <ol>
   <li><strong>Proposer</strong>: Include name, address, phone and fax numbers, email address (expect most correspondence by email), Web address (if applicable), etc.  This item does not count in the page limit. Poster proposals do not undergo blind review, so this information should be included.</li>
  <li><strong>Statement of Topic</strong>: A short title.</li>
  <li><strong>Significance and Relevance of the Topic</strong>: Please include information about any trends in relation to the topic and possibly describe (or cite) evidence to that effect.  Your objective here is to explain why the topic is significant. This information can help your proposal to be selected if resources become an issue.</li>
  <li><strong>Content</strong>: A description of the expected content of the poster.</li>
  <li><strong>Abstract (Description)</strong>: The abstract is a short (<?php echo $abstractCharLimit; ?>, including whitespace) description of your poster.</li>
  </ol>
 </li><br/>
 <li><strong>Poster Abstract (limited to <?php echo $abstractCharLimit; ?>, including whitespace)</strong>
  <p style="font-size: 1.0em">The abstract is the description of the poster that will appear on the conference web pages.  The description is limited to <?php echo $abstractCharLimit; ?> (including whitespace) and must match verbatim the abstract section of the Poster Proposal.  The poster abstract must be submitted in plain text. The abstract for an accepted proposal may contain a URL with more information. Abstracts of accepted posters can be edited in response to reviews. The revised, final abstract will appear on the web pages.</p>
 </li>
</ol>

<div class="SectionHeader"><div class="Full">
<h2><a name="submit">How Do I Submit My Proposal?</a></h2>
</div></div>              
<p><strong>Electronic Submissions:</strong></p>
<ol>
 <li>Write your proposal document using the format specified above.</li>
 <li> Convert your document into Adobe PDF format. Refer to our <a href="creating_pdf.php">Creating Adobe PDF Documents page</a> for assistance.</li>
 <li>Submit your document and <?php echo $abstractCharLimit; ?> (including whitespace) text abstract description using the
<?php if ($submissionReady) {
 echo '<a href="http://www.cs.grinnell.edu/~sigcse/sigcse2012/submission.shtml">online poster submission form</a>';
} else {
 echo "<em>online poster submission form (coming soon)</em>";
} ?> Please do not wait until the last minute to submit your document because that is when everyone else will be connecting to our server!</li>
 <li> Make note of the poster ID number and password assigned to your submission. You will receive an e-mail message confirmation. Spam filters sometimes trap these automatically generated messages so you may need to check your spam trap for the confirmation and later, acceptance or rejection notification.</li>
 <li> After receiving confirmation, go to the
<?php if ($submissionReady) {
 echo '<a href="http://www.cs.grinnell.edu/~sigcse/sigcse2012/submission.shtml">author verification form</a>';
} else {
 echo "<em>author verification form (coming soon)</em>";
} ?> to review your submission for accuracy.  Send e-mail to <script>write_email( "sigcse12-posters", "cs.holycross.edu" );</script> if there are any problems.</li>
</ol>

<p><strong><i>Deadline:</i></strong>All electronic submissions must be <strong>received</strong> by <strong class="warning">October 24, 2011</strong>.</p>


<div class="SectionHeader"><div class="Full">
<h2><a name="presentation">Questions</a></h2>
</div></div>   
<p>If you have questions about poster submissions, please contact SIGCSE 2012 poster chair:<br/>
Kris Nagel<br/> Georgia Gwinnett College<br/> <script>write_email("sigcse12-posters", "cs.holycross.edu");</script></p>

<?php
 $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
 $mainPage = false;
 include("../parts/bottom.php");
?>
