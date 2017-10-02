<?php
$langage = array("HTML","CSS","Javascript","PHP");
var_dump ($langage);
echo "<br>";
sort($langage);
foreach ($langage as $key => $value) {
  echo "langage[".$key."] = ".$value."<br />\n";
}
var_dump (implode ($langage));
echo "<br>";
$fusion = $langage[0].$langage[1].$langage[2].$langage[3];
echo strrev ($fusion);
?>
