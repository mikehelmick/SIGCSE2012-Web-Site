<?php header('Content-type: text/html; charset=utf-8'); ?>
<?php 
// Global configuration
$submissionReady = false;
$abstractCharLimit = "800 characters";

?>
<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
 <title><?php echo $title ?></title>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta name="google-site-verification" content="DyK55ZZUCG5OEtmtFwEAvttufQiH92x17UQsiZyrU_w" />
 <script type="text/javascript" src="/sigcse2012/js/site.js"></script>
 <script type="text/javascript" src="/sigcse2012/js/prototype.js"></script>	
 <script type="text/javascript" src="/sigcse2012/js/scriptaculous.js?load=effects,builder"></script> 
 <script type="text/javascript" src="/sigcse2012/js/lightbox.js"></script>
 <?php
  function endsWith($haystack,$needle,$case=true) {	
   if($case){return (strcmp(substr($haystack, strlen($haystack) - strlen($needle)),$needle)===0);}
   return (strcasecmp(substr($haystack, strlen($haystack) - strlen($needle)),$needle)===0);
  }
  
  if(isset($_GET["print"]))
   $style = "print.css";
  else 
   $style = "master.css";
   echo "
	<link rel='stylesheet' type='text/css' href='/sigcse2012/css/$style' title='Current'>
   ";
 ?>
 <link rel="stylesheet" href="/sigcse2011/css/lightbox.css" type="text/css" media="screen" />
</head>
<?php
 if ($onload == null)
   echo "<body onload=\"remove_frames();\">";
 else 
   echo "<body onload=\"remove_frames(); $onload\">";

 $menuStyle = "display: none;";
 if (isset($_COOKIE['full_menu']))
   $menuStyle = "display: block;";
?>
 <div id="wrapper">
  <div id="headercontainer">
    <div id="headertitle">
	</div>
	<div id="headerright">
	  <h1>SIGCSE 2012 | February 29 - March 3, 2012 |
	  Raleigh, North Carolina, USA</h1>
	</div>
  </div>
  <div id="contentcontainer">
	<div id="navigation" class="column-left">
		<div id="logo"><img src="/sigcse2012/logo/logo.png" alt="SIGCSE 2012 Logo" /></div>

		<?php
		 if (isset($_COOKIE['full_menu']))
		   echo '<div class="GoodMessage"><p>You have the javascript menus disabled, <a href="/sigcse2012/unset_menu.php">click here to re-enable</a>.</p></div>';
		?>
		
		<div class="menu"><a id="home_menu" href="/sigcse2012/">SIGCSE | 2012</a></div>
		<div class="menu"><a id="authors_menu" onclick="toggle_menu('authors');">Authors<img id="authors_status" src="/sigcse2012/images/arrow_down.png" align="absmiddle"></a></div>	
		<div id="authors_sub" class="submenu" style="<?php echo $menuStyle; ?>">
		  <ul>
			<li><a id="cfp_menu" href="/sigcse2012/authors/index.php">Call for Participation</a></li>
			<li><a id="papers_menu" href="/sigcse2012/authors/papers.php">Papers</a></li>
			<li><a id="panels_menu" href="/sigcse2012/authors/panels.php">Panels</a></li>
			<li><a id="special_sessions_menu" href="/sigcse2012/authors/special_sessions.php">Special Sessions</a></li>
			<li><a id="student_research_menu" href="/sigcse2012/authors/student_research.php">Student Research Competition</a></li>
			<li><a id="workshops_menu" href="/sigcse2012/authors/workshops.php">Workshops</a></li>
			<li><a id="posters_menu" href="/sigcse2012/authors/posters.php">Posters</a></li>
			<li><a id="bof_menu" href="/sigcse2012/authors/bof.php">Birds of a Feather (BoF)</a></li>
		  </ul>
		  <hr/>
		  <ul>	
			<li><a id="finalSubmission_menu" href="/sigcse2012/authors/final_submission.php">Final Submission Instructions</a></li>
			<li><a id="formatting_menu" href="/sigcse2012/authors/format.php">Formatting / Publication Guidelines</a></li>
			<li><a id="noshow_menu" href="/sigcse2012/authors/noshow.php">Presenter No-Show Policy</a></li>
			<li><a id="createPdf_menu" href="/sigcse2012/authors/creating_pdf.php">Creating PDFs</a></li>
			<li><a href="/sigcse2012/faq/submissions_faq.php">Authors FAQs</a></li>
		  </ul>
		</div>
		<div class="menu"><a id="attendees_menu" onclick="toggle_menu('attendees');">Attendees<img id="attendees_status" src="/sigcse2012/images/arrow_down.png" align="absmiddle"></a></div>
		<div id="attendees_sub" class="submenu" style="<?php echo $menuStyle; ?>">
		  <ul>
			<li><a id="attendeesGeneral_menu" href="/sigcse2012/attendees/">General Information</a></li>
			<li><a id="attendeesKeynote_menu" href="/sigcse2012/attendees/keynotes.php">Keynote Speakers</a></li>
		  </ul>
		</div>		
		<div class="menu"><a id="reviewers_menu" onclick="toggle_menu('reviewers');">Reviewers<img id="reviewers_status" src="/sigcse2012/images/arrow_down.png" align="absmiddle"></a></div>
		<div id="reviewers_sub" class="submenu" style="<?php echo $menuStyle; ?>">
		  <ul>
			<li><a id="reviewerInformation_menu" href="/sigcse2012/reviewers/index.php">Reviewer Information</a></li>
			<li><a id="revGuidePapers_menu" href="/sigcse2012/reviewers/guide_papers.php">Paper Review Guide</a></li>
			<li><a id="revGuidePanels_menu" href="/sigcse2012/reviewers/guide_panels.php">Panel Review Guide</a></li>
			<li><a id="revGuideSpecialSessions_menu" href="/sigcse2012/reviewers/guide_sessions.php">Special Session Review Guide</a></li>
			<li><a id="revGuideWorkshops_menu" href="/sigcse2012/reviewers/guide_workshops.php">Workshop Review Guide</a></li>
			<li><a id="revGuideBOFs_menu" href="/sigcse2012/reviewers/guide_bofs.php">Birds of a Feathers (BOFs) Review Guide</a></li>
			<li><a id="revGuidePosters_menu" href="/sigcse2012/reviewers/guide_posters.php">Poster Review Guide</a></li>
		  </ul>
		  <hr/>
		  <ul>
			<li><a id="metareviews_menu" href="/sigcse2012/reviewers/metareviews.php">Meta-reviews</a></li>
			<li><a href="/sigcse2012/faq/reviewers_faq.php">Reviewers FAQs</a></li>
		  </ul>
		</div>
		<div class="menu"><a id="students_menu" onclick="toggle_menu('students');">Students<img id="students_status" src="/sigcse2012/images/arrow_down.png" align="absmiddle"></a></div>
		<div id="students_sub" class="submenu" style="<?php echo $menuStyle; ?>">
		  <ul>
			<li><a id="studentsGeneral_menu" href="/sigcse2012/students/">General Information</a></li>
		  </ul>
		</div>
		<div class="menu"><a id="exhibitors_menu" href="/sigcse2012/exhibitors/">Exhibitors/Supporters</a></div>
		<div class="menu"><a id="faq_menu" onclick="toggle_menu('faq');">FAQ<img id="faq_status" src="/sigcse2012/images/arrow_down.png" align="absmiddle"></a></div>
		<div id="faq_sub" class="submenu" style="<?php echo $menuStyle; ?>">
		  <ul>
           <li><a id="submissionsFAQ_menu" href="/sigcse2012/faq/submissions_faq.php">Submissions FAQ</a></li>
           <li><a id="reviewersFAQ_menu" href="/sigcse2012/faq/reviewers_faq.php">Reviewers FAQ</a></li>
           <li><a id="attendeesFAQ_menu" href="/sigcse2012/faq/attendees_faq.php">Attendees FAQ</a></li>
           <li><a id="studentsFAQ_menu" href="/sigcse2012/faq/students_faq.php">Students FAQ</a></li>
		  </ul>
		</div>
		<div class="menu"><a id="committee_menu" href="/sigcse2012/committee/">Program Committee</a></div>
<hr/>
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript">
  google.load('search', '1');
  google.setOnLoadCallback(function() {
    google.search.CustomSearchControl.attachAutoCompletion(
      '000184131728111546209:ca9n_ricjba',
      document.getElementById('q'),
      'cse-search-box');
  });
</script>
<form action="http://www.sigcse.org/sigcse2012/search.php" id="cse-search-box">
  <div>
    <input type="hidden" name="cx" value="000184131728111546209:bra5kgqicnk" />
    <input type="hidden" name="cof" value="FORID:11" />
    <input type="hidden" name="ie" value="UTF-8" />
    <input type="text" name="q" id="q" autocomplete="off" size="31" />
    <input type="submit" name="sa" value="Search" />
  </div>
</form>
<script type="text/javascript" src="http://www.google.com/cse/brand?form=cse-search-box&lang=en"></script>

	</div>
	
	<div id="maincontent" class="column-right">

<noscript><div class="Alert"><p><strong>JavaScript is disabled in your browser. It is recommended that you enable JavaScript for the best experience on this Web site.</strong></p>
<?php
  if (!isset($_COOKIE['full_menu']))	
    echo '<p>If you wish to use this Web site without enabling JavaScript, you may <a href="/sigcse2012/full_menu.php">click here</a> save that preference. Please be aware that some Web site functionality will be degraded by making this selection. <em>This works by setting a cookie indicating your preference.</em></p>';
?>
</div></noscript>
