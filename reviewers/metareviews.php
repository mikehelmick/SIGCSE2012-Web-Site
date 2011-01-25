<?php
 $title = "SIGCSE 2012 - Meta-reviews";
 $onload = "pageLoad('reviewers', 'metareviews');";
 include("../parts/top.php");
?>
<h1>The Meta-Review Process for Paper Submissions</h1>
<p>SIGCSE strives for the best reviewing process that we can achieve. In
order to assist the Program Chairs in dealing with the high volume of
submissions that we receive, SIGCSE uses a meta-review process to help
summarize the various reviews. The following description indicates how
meta-reviews play into the various stages of the reviewing process.</p>

<div class="SectionHeader"><div class="Full">
<h2>Stage 1: Reviewers</h2>
</div></div>
<p>At least four reviewers review each paper. Reviewers are drawn from the SIGCSE reviewer pool with preference for those whose expertise match the paper's topic areas.</p>
<p>A review must objectively, accurately, and clearly assess a paper's suitability for publication at SIGCSE, founded in the reviewer's disciplinary expertise and on the basis of the written paper's originality, technical soundness, contribution to computer science education, and clarity of presentation.</p>
<p>Reviews that do not meet this standard may be deleted. For example, an
unacceptable review might:
<ul>
 <li>be incoherent, unreadable, or irrelevant to the paper;</li>
 <li>focus on the paper's topic area or presumed authors at the expense of assessment of the paper itself; or</li>
 <li>provide no justification for its numeric ratings. (Even in "obvious" cases, reviewers should briefly justify ratings.)</li>
</ul>
</p> 
<p>Reviewers whose reviews are consistently unacceptable may be permanently disbarred from SIGCSE reviewing.</p>
<p>Note: A difference in rating or opinion with other reviewers or with Program Committee members will never be cause for deletion of a review.</p>

<div class="SectionHeader"><div class="Full">
<h2>Stage 2: Associate Program Chairs (The Meta-Reviewers)</h2>
</div></div>
<p>After reviews have been submitted, one of the Associate Program Chairs synthesizes each paper's reviews into a "meta-review" to improve accuracy, quality, and effectiveness of the selection process.</p>

<p>Associate Program Chairs are selected by the Program Chairs for their disciplinary expertise. Associate Program Chairs read the papers' reviews and abstracts though not, in most cases, the paper itself.</p>

<p>After an APC has read the reviews for a particular paper, that APC has the following responsibilities:
<ol>
  <li>In the rare case that a review clearly violated SIGCSE's review standards (as described above), the APC may recommend to the Program Chairs that the review be deleted.</li>
  <li>The APC summarizes the case for and against a paper depending on its reviews, abstract, and occasionally the paper itself. In cases where the reviews are clearly in agreement, only the case made by the reviewers (for or against) is summarized. In rare cases (e.g., when the reviews are deemed irreconcilably disparate or when too few reviewers claim familiarity with the area), the APC may read the paper fully and provide a "normal" review, in addition to the meta-review.</li>
  <li>APCs are charged with making strong recommendations and therefore are encouraged to use the high (5,6) and low (1,2) ratings in most cases (as opposed to regular reviewers). APC reviews are NOT reviews of the paper, nor are their ratings intended to be averages; instead, they are reviews of the reviews to help the Program Chairs make decisions on the final program.</li>
</ol>
</p>

<div class="SectionHeader"><div class="Full">
<h2>Stage 3: Program Chairs</h2>
</div></div>

<p>The Program Chairs' duty, quoted from <a href="http://sigcse.org/about/policies/pcr">SIGCSE's Program Chair
Responsibility Policy</a>, is "to create a good, well balanced program at the SIGCSE Technical Symposium and the ITiCSE conference. The program should provide both short and long term benefits to the conference attendees and the wider community."</p>
<p>Within the framework described here, that means ensuring overall quality in the reviewing process and assembling an excellent program that reflects reviewers' and Associate Program Chairs' decisions with respect to the overall composition, exigencies, and special focus of the conference.</p>
<p>Program Chairs make all final decisions on accepting or rejecting papers on the basis of the papers, their reviews, their meta-reviews, and a global effort to compose an excellent program that is balanced and diverse across a variety of topic areas.</p>
<p>Program Chairs read every meta-review of every submitted paper. In many cases, Program Chairs will also consult abstracts, reviews, or the papers themselves.</p>
<p>Finally, the Program Chairs will report to the community --- in the proceedings or at the business meeting --- on the aggregate outcome of the reviewing process and its potential for revision or extension in coming years.</p>

<div class="SectionHeader"><div class="Full">
<h2>Stage 4: Authors</h2>
</div></div>
<p>After reviewing is complete, authors see the reviews for their proposal. Authors also receive meta-reviews that synthesize the existing reviews, clarifying how the program committee interprets the disparate information from individual reviews.</p>

<div class="SectionHeader"><div class="Full">
<h2><a name="questions">Questions</a></h2>
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
     