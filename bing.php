<?php
 $title = "SIGCSE 2012 - Search Results";
 $onload = "pageLoad(null, null);";
 include("parts/top.php");
?>
<div class="SectionHeader"><div class="Full">
<h2>SIGCSE 2012 Search Results from Bing</h2>
</div></div>
<div class="searchResult">

<?php
$resultPerPage = 10;
$offsetNum = 0;
$offset = "web.offset=0";
if (isset($_GET['offset'])) {
  $offsetNum = intval($_GET['offset']);
  $offset = "web.offset=0" . $_GET['offset'];
}


if (isset($_GET['query'])) {	
  $request = 'http://api.bing.net/json.aspx?Appid=1EAAC8DFCA91DD8D0E442B4AFCAB8B641F7903E1&sources=web&' . $offset . '&web.count=' . $resultPerPage . '&query=' . urlencode( $_GET["query"] ) . "+site%3Asigcse.org%2Fsigcse2012%2F";

  $curl = curl_init(); 
  curl_setopt ($curl, CURLOPT_URL, $request);
  curl_setopt ($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt ($curl, CURLOPT_CONNECTTIMEOUT, 10);
  $response = curl_exec($curl);
  $isError = false;
  if ( curl_getinfo($curl,CURLINFO_HTTP_CODE) !== 200 ) {
    $isError = true;
  }

  if ($isError) {
    echo("<p><em>Sorry, there was an error fetching the search results.</em></p>");
  } else {
    $jsonobj = json_decode($response);
    echo('<p>Found ' . $jsonobj->SearchResponse->Web->Total . ' total results</p>');
 
    foreach($jsonobj->SearchResponse->Web->Results as $value) {
      echo('<p><strong><a href="' . $value->Url . '" style="color: blue;">' . $value->Title . '</a></strong><br/>');
      echo( $value->Description . "<br/>");
      echo( '<span class="searchUrl">' . $value->DisplayUrl . '</span>');
      echo('</p>');
    }

    $page = 1;
    $pages = ceil($jsonobj->SearchResponse->Web->Total / floatval($resultPerPage));
    $curPage = floor($offsetNum / $resultPerPage) + 1;
    echo('<p>Page: ');
    while($page <= $pages) {
      if ($page == $curPage) {
        echo('<strong>' . $page . '</strong>');	
      } else {
	    $newOffset = ($page - 1) * $resultPerPage;
        echo('<a href="/sigcse2012/bing.php?offset=' . $newOffset . '&query=' . urlencode( $_GET["query"] ) . '">' . $page . '</a>');	
      }
      echo(' ');
      $page = $page + 1;
    }
    echo('</p>');
  }
} ?>
</div>
<?php
 $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
 $mainPage = true;
 include("parts/bottom.php");
?>