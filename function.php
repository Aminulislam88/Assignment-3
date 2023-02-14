<?php
function isEvenOrOdd($number) {
    if ($number % 2 == 0) {
      return "even";
    } else {
      return "odd";
    }
  }
  $number1 = 7;
  $number2 = 4;

  
  $result1 = isEvenOrOdd($number1);
  $result2 = isEvenOrOdd($number2);
  
  echo "$number1 is $result1 \n"; 
  echo "$number2 is $result2"; 
    