<?php
/**
 * Complete the method/function so that it converts dash/underscore delimited  * words into camel casing. The first word within the output should be 
 * capitalized only if the original word was capitalized (known as Upper Camel * Case, also often referred to as Pascal case).
 *
 * Examples
 * 
 * toCamelCase("the-stealth-warrior"); // returns "theStealthWarrior"
 * 
 * toCamelCase("The_Stealth_Warrior"); // returns "TheStealthWarrior"
 */
function toCamelCase($str){
  $str = str_replace('-', '_', $str);
  $splitString = explode("_", $str);
  $resString = "";
  foreach ($splitString as $key => $word ){
    $slice = $word;
    if ($key != 0){
      $slice = ucwords($word, "_");
    }
    
    $resString = $resString . $slice;
  }

  return $resString;
}