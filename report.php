<?php
require "Booknow.php";
$all = $_BKN->getDay();

header("Content-Type: text/csv");
header("Content-Disposition: attachment;filename=Booknow.csv");
if (count($all)==0) { echo "No Booknow"; }
else {
  foreach ($all[0] as $k=>$v) { echo "$k,"; }
  echo "\r\n";

  foreach ($all as $r) {
    foreach ($r as $k=>$v) { echo "$v,"; }
    echo "\r\n";
  }
}
