<?php
 $title = "SIGCSE 2012 - Search Reults";
 $onload = "pageLoad(null, null);";
 include("parts/top.php");
?>
<div class="SectionHeader"><div class="Full">
<h2>SIGCSE 2012 Search Results</h2>
</div></div>
<div id="cse-search-results"></div>
<script type="text/javascript">
  var googleSearchIframeName = "cse-search-results";
  var googleSearchFormName = "cse-search-box";
  var googleSearchFrameWidth = 600;
  var googleSearchDomain = "www.google.com";
  var googleSearchPath = "/cse";
</script>
<script type="text/javascript" src="http://www.google.com/afsonline/show_afs_search.js"></script>
<?php
 $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
 $mainPage = true;
 include("parts/bottom.php");
?>