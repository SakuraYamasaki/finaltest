<?php

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo 'FizzBuzz';
    } elseif ($i % 5 === 0) {
        echo 'Buzz';
    } elseif ($i % 3 === 0) {
        echo 'Fizz';
    } else {
        echo $i;
    }
        echo '<br>';
}

for ($i = 1; $i <= 1000; $i++) {

    $number = 0;
  
    for ($j = 1; $j <= $i; $j++) {
      if ($i % $j == 0) {
        $number += 1;
      }
    }
  
    if ($number == 2) {
      echo $i . '<br>';
    }
  
  }



$profile = [
  'name' => [
      'fullname'=>'watanabesakura',
      'fastname'=>[
        'watanabe'=>'渡邉',
        'lastname'=>[
          'sakura'=>'さくら',
          'age'=>[
            'hatachi'=>'二十歳',
            'from'=>[
              'ehime'=>'愛媛'
            ]
]]]]];

echo current($profile['name']['fastname']['lastname']['age']['from']);
