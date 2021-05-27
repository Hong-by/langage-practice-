<?php

  //1. for
  //for($i = 0(초기식); $i < 10(반복 횟수 조건); $i++){
  // }

    
    // for ($i = 0; $i < 10; $i++){
    //   echo $i.' hello world!!'.'<br>';
    // }




  $arr = [2, 4, 5, 6, 8, 7, 10, 33, 55];

  // for($i=0; $i < count($arr); $i++){
  //   echo $i.' '.$arr[$i].'<br>';
  // }

  // echo var_dump($arr);


  //2. foreach
  // 참조 : https://www.w3schools.com/php/php_looping_foreach.asp
  echo '--------------------------------------------<br>';


  foreach ($arr as $value) {
    //index : 
    echo "$value <br>";
  }


  //3. while
  $sum = 0;
  $num = 1;

  while ($num <= 100) {
    $sum += $num;
    $num++;

  }
  echo $sum."<br>";


?>