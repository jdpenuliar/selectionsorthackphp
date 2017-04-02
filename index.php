<?php

$arrLol = array(9,4,2,56,2,3);

function swap($arr, $firstIndex, $secondIndex) {
  echo "<br>firstIndex: " . $firstIndex;
  echo "<br>secondIndex: " . $secondIndex . "<br>";
  $temp = $arr[$firstIndex];
  $arr[$firstIndex] = $arr[$secondIndex];
  $arr[$secondIndex] = $temp;
  echo "swap---<br>";
  var_dump($arr);
  echo "<br>";
  return $arr;
}

function indexMinimumArray($arr, $startIndex) {
  $minValue = $arr[$startIndex];
  $minIndex = $startIndex;

  for($x = $minIndex; $x < count($arr); $x++) {
    if ($arr[$x] < $minValue) {
      $minIndex = $x;
      $minValue = $arr[$x];
    }
  }
  echo "<br>index minimum--> $minIndex<br>";
  return $minIndex;
}


for($x = 0; $x < count($arrLol); $x++) {
  $y = indexMinimumArray($arrLol, $x);
  $arrLol = swap($arrLol, $x, $y);
}
echo "<br>";
echo(microtime());
?>
