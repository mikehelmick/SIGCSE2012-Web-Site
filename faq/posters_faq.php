<?php
 $title = "SIGCSE 2012 - FAQ";
 $onload = "pageLoad('faq', 'postersFAQ');";
 include("../parts/top.php");
 include("common.php");
?>
<div class="SectionHeader"><div class="Full">
<h2>Posters FAQs</h2>
</div></div>
<ol>
  <li><em>Is there a standard formatting guide for posters, like there is for the papers?</em> <p>There is not a style sheet for poster submission. You may use single line spacing, as in the paper formatting or double-spacing. Most submissions are single column. Please provide the information requested on <a href="/sigcse2012/authors/posters.php">poster submission page</a>
	<ol type="a">
	 <li>Proposer</li>
	 <li>Statement of Topic: A short title.</li>
	 <li>Significance and Relevance of the Topic</li>
	 <li>Content: A description of the expected content of the poster.</li>
	 <li>Abstract (Description): The abstract is a short (800 characters, including whitespace) description of your poster.</li>
  	</ol>
  </p></li>
  <li><em>Is there any limit to the number of posters from the same faculty that could be accepted for presentation?</em>: <p>Yes, there is a two-poster limit corresponding to the two poster sessions at SIGCSE. The author is expected to stand with their poster and use it as a starting point for discussion with colleagues who visit. The faculty member can only "man" one poster at each of the sessions.</p></li>
  <li><em>Even though I put the abstract in the box provided with the online submission form, do I also include the same abstract in the 2-page PDF file submission?</em>: <p>Yes, we need the abstract in both places.</p></li>
 <li><em>Should the Significance and Relevance of the Topic section be double-spaced?</em>: <p>You may use single line spacing, as in the paper formatting or double-spacing. Most submissions are single column.</p></li>
</ol>
<?php
 $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
 $mainPage = true;
 include("../parts/bottom.php");
?>