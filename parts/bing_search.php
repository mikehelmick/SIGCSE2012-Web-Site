<form method="get" action="/sigcse2012/bing.php">
  Search with Bing<br/><input type="text" id="query" name="query" size="31" value="<?php
  if (isset($_GET['query'])) {
    echo($_GET['query']); }
  else { 
	echo('SIGCSE 2012');
  }
  ?>"/>
<input type="submit" value="Search" name="submit" id="searchButton" />

</form>