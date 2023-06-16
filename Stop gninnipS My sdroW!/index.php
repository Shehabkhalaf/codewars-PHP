<?php
  function spinWords(string $str): string {
    $arr_of_words = explode(" ",$str);
    $num_of_elements = count($arr_of_words);
    for($i=0;$i<$num_of_elements;$i++):
      if(strlen($arr_of_words[$i])>=5){
        $arr_of_words[$i]=strrev($arr_of_words[$i]);
      }
    endfor;
    return implode(" ",$arr_of_words);
  }
