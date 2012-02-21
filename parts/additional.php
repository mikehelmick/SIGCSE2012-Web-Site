<?php
$sponsors = array("oracle.php", "csprinciples.php");
shuffle($sponsors);
foreach ($sponsors as $sponsor) {
  include($sponsor);
}
?>