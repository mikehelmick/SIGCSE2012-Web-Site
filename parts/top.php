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
</head>
<?php
 if ($onload == null)
   echo "<body onload=\"remove_frames();\">";
 else 
   echo "<body onload=\"remove_frames(); $onload\">";
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
		<div id="logo"></div>
		
		<div class="menu"><a id="home_menu" href="/sigcse2012/">SIGCSE | 2012</a></div>
		<div class="menu"><a id="authors_menu" onclick="toggle_menu('authors');">Authors<img id="authors_status" src="/sigcse2012/images/arrow_down.png" align="absmiddle"></a></div>	
		<div id="authors_sub" class="submenu" style="display: none">
		  <ul>
			<li><a id="cfp_menu" href="/sigcse2012/authors/index.php">Call for Participation</a></li>
		  </ul>
		</div>		
		<div class="menu"><a id="reviewers_menu" onclick="toggle_menu('reviewers');">Reviewers<img id="reviewers_status" src="/sigcse2012/images/arrow_down.png" align="absmiddle"></a></div>
		<div id="reviewers_sub" class="submenu" style="display: none">
		  <ul>
			<li><em>Coming soon...</em></li>
		  </ul>
		</div>
		<div class="menu"><a id="students_menu" onclick="toggle_menu('students');">Students<img id="students_status" src="/sigcse2012/images/arrow_down.png" align="absmiddle"></a></div>
		<div id="students_sub" class="submenu" style="display: none">
		  <ul>
			<li><em>Coming soon...</em></li>
		  </ul>
		</div>
		<div class="menu"><a id="exhibitors_menu" onclick="toggle_menu('exhibitors');">Exhibitors/Supporters<img id="exhibitors_status" src="/sigcse2012/images/arrow_down.png" align="absmiddle"></a></div>
		<div id="exhibitors_sub" class="submenu" style="display: none">
		  <ul>
			<li><em>Coming soon...</em></li>
		  </ul>
		</div>
		<div class="menu"><a id="faq_menu" onclick="toggle_menu('faq');">FAQ<img id="faq_status" src="/sigcse2012/images/arrow_down.png" align="absmiddle"></a></div>
		<div id="faq_sub" class="submenu" style="display: none">
		  <ul>
			<li><em>Coming soon...</em></li>
		  </ul>
		</div>
		<div class="menu"><a id="committee_menu" onclick="toggle_menu('committee');">Committee<img id="committee_status" src="/sigcse2012/images/arrow_down.png" align="absmiddle"></a></div>
		<div id="committee_sub" class="submenu" style="display: none">
		  <ul>
			<li><em>Coming soon...</em></li>
		  </ul>
		</div>

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
<noscript><p><em>JavaScript must be enabled for this Web site to function correctly.</em></p></noscript>		