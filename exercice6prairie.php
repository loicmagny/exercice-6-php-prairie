  <?php
  $langage = array("HTML","CSS","Javascript","PHP");
  var_dump ($langage);
  sort($langage);
  foreach ($langage as $key => $value) {
    echo "langage[".$key."] = ".$value."\n";
  }
  var_dump (implode ($langage));
  ($langage);
$fusion = $langage[0].$langage[1].$langage[2].$langage[3];
echo strrev ($fusion);
  ?>
