<?php
$language = array("HTML","CSS","Javascript","PHP");
function alphabeticalorder($board){
  $order = new ArrayObject($board);
  $order -> asort ();
  foreach ($order as $key => $value){
    echo "$key = $value.<br />\n";
  }
}
function boardmerge($language){
  $merge = "$language[0]"."$language[1]"."$language[2]"."$language[3]";
  echo strrev ("$merge");
}
alphabeticalorder($language);
boardmerge($language);
?>
