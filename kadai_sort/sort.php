<?php
$array = [15, 4, 18, 23, 10 ];

function sort_2way ($array, $order) {

  if ($order == true) {
    echo "昇順にソートします。";

    sort($array);
  } else {
    echo "降順にソートします。";
  
    rsort($array);

  }

  foreach($array as $key => $value) {
    echo $value . "\n";
  }

}

sort_2way($array, true);

?>
