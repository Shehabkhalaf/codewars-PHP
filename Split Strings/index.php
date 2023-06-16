<?php 
//Method 1:
  function solution1($str) {
    $arr_str=[];
    if($str===""){ //Condition Check if str is empty return empty array
      return $arr_str;
    }
    $arr_str = str_split($str,2);//Split the string in two chars in each index
    if(strlen($str)%2!=0){//Check if the str is odd if true will concatenate last index with "_"
      $arr_size = count($arr_str);
      $arr_str[$arr_size-1].="_";
    }
    return $arr_str;
}

  function solution2($str){
    if(empty($str))
      return [];
    if(strlen($str)%2!=0)
      $str.="_";
    return str_split($str,2);
  }

  function assertSame($arr,$str){
    if($arr===$str){
      return true;
    }else{
      return false;
    }
  }

  echo assertSame([], solution1(""));
