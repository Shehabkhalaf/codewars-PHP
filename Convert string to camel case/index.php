<?php
  function toCamelCase($str){
    $letter = $str[0];
    $str = strpos($str,"_") ? str_replace("_","",ucwords($str,"_")) : str_replace("-","",ucwords($str,"-"));
    $str[0] = $letter;
    return $str;
  }

  echo toCamelCase("the-stealth-warrior");
