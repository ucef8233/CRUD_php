<?php
$array = [
  [1, 2],
  [3, 4],
];

foreach ($array as list($a)) {
  // $a contient le premier élément du tableau interne,
  // et $b contient le second élément.
  echo "A: $a\n";
}
