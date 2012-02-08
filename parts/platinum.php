<?php
$sponsors = array("google.php", "intel.php");
shuffle($sponsors);
foreach ($sponsors as $sponsor) {
  include($sponsor);
}
?>