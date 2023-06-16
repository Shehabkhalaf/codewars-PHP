<?php
  function find_uniq($a){
    $repeated = ($a[0]==$a[1]) ? $a[0] : $a[2];
    $arr = array_filter($a,function($item) use($repeated) {return $item!=$repeated;},1);
    $key = array_keys($arr); 
    return $arr[$key[0]];
  }

