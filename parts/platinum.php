<?php
$sponsors = array("microsoft.php", "google.php", "intel.php");
shuffle($sponsors);
foreach ($sponsors as $sponsor) {
  include($sponsor);
}
?>