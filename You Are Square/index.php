<?php
  function isSquare($n){
    //Subtract square root(float value) from square root of the same aftre conversion if there reminder like 0.2 or 0.3 it wont be square 
    return true ? (int)sqrt($n)-sqrt($n)==0 : false;
}

  echo isSquare(-1);