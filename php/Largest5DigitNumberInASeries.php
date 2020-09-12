<?php
/**
 * In the following 6 digit number:
 *
 * 283910
 *
 * 91 is the greatest sequence of 2 consecutive digits.
 *
 * In the following 10 digit number:
 *
 * 1234567890
 * 
 * 67890 is the greatest sequence of 5 consecutive digits.
 * 
 * Complete the solution so that it returns the greatest sequence of five  
 * consecutive digits found within the number given. The number will be 
 * passed in as a string of only digits. It should return a five digit 
 * integer. The number passed may be as large as 1000 digits. 
 */

function solution(string $s): int {
    $fullNumber = $s;
  $biggestNumber = 0;
  
  for ($i = 0; $i <= strlen($fullNumber) - 5; $i++) {
      $nextNumber = substr($fullNumber, $i, 5);
      if ($nextNumber > $biggestNumber) {
          $biggestNumber = $nextNumber;
      }
  }
  
  return $biggestNumber;
  }

  function solution2(string $s): int {
    if(strlen($s) <= 5) return (int)$s;
    return max((int)substr($s, 0, 5), solution(substr($s, 1)));
  }