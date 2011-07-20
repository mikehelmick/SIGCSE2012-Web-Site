<?php header('Content-type: text/html; charset=utf-8'); ?>
<?php 
// Global configuration
$submissionReady = true;
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
 <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
 <?php
  function endsWith($haystack,$needle,$case=true) {	
   if($case){return (strcmp(substr($haystack, strlen($haystack) - strlen($needle)),$needle)===0);}
   return (strcasecmp(substr($haystack, strlen($haystack) - strlen($needle)),$needle)===0);
  }
  
  $printerFriendly = false;
  if(isset($_GET["print"])) {
   $style = "print.css";
   $printerFriendly = true;
  } else 
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
        if (!$printerFriendly)
           include("menu.php");
      ?>
	</div>
	
	<div id="maincontent" class="column-right">
	  <g:plusone></g:plusone>
	  <div id="printIcon">
		<a href="<?php echo $_SERVER["REQUEST_URI"] ?><?php if (!endsWith($_SERVER["REQUEST_URI"], "?print")) { echo "?print"; } ?>"><img src="/sigcse2012/images/printer.png" align="absmiddle" /> Print</a>
	  </div>
		
<noscript><div class="Alert"><p><strong>JavaScript is disabled in your browser. It is recommended that you enable JavaScript for the best experience on this Web site.</strong></p>
<?php
  if (!isset($_COOKIE['full_menu']))	
    echo '<p>If you wish to use this Web site without enabling JavaScript, you may <a href="/sigcse2012/full_menu.php">click here</a> save that preference. Please be aware that some Web site functionality will be degraded by making this selection. <em>This works by setting a cookie indicating your preference.</em></p>';
?>
</div></noscript>
