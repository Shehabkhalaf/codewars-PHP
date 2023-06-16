<?php
  function twoOldestAges($ages) {
    /*sort($ages);
    $number_of_nums = count($ages);
    $arr[1] = end($ages);
    for($i = $number_of_nums - 1;$i<$number_of_nums;$i--):
      if($ages[$i]!=$arr[1]){
        $arr[0]=$ages[$i];
        break;
      }
    endfor;
    return [$arr[0],$arr[1]];*/
  rsort($ages);
  return [$ages[1], $ages[0]];
}

  echo "<pre>";
  print_r(twoOldestAges([1,8,8,8]));
  echo "</ptr>";

