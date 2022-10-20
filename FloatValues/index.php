<?php

// This function is responsible for converting string number into formatted float number
function getFloat($value) {
  if(strstr($value, ",")) {
    $value = str_replace(".", "",$value); // replace dots
    $value = str_replace(",", ".", $value); // replace ',' with '.'
  }
 
  if(preg_match("#([0-9\.]+)#", $value, $match)) { // search for number that may contain '.'
    return floatval($match[0]);
  } else {
    return floatval($value); // take some last chances with floatval
  }
}

echo getFloat("$ 20.445,70"); // will print: 19332.35