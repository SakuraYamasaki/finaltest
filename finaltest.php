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


$arr = [
    'watanabe'=>['name'=>'sakura',['live'=>'kobe',['age'=>'hatachi',['nat'=>'japan']]]],
    'tanaka'=>['name'=>'ken',['live'=>'tokyo',['age'=>'hatachi',['nat'=>'us']]]]
];

echo $arr['watanabe']['name'];