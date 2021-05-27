<?php

  echo '데이터 타입 관련 페이지 입니다.<br>';
  echo '------------------------<br>';

  //원시 타입 : 문자(string), 숫자(정수 : integer, 실수 : double), boolean(true, false)
  //데이터 타입 확인 함수 : gettype()
  //명시적 형 변환 : (형태명) 변수 - 문자 형태의 숫자일 경우 숫자로 사용할 때 명시적으로 형태를 변화 시켜준다.

  $num = 10;
  echo gettype($num).'<br>';

  $str = "hello";
  echo gettype($str).'<br>';

  $str_num = "123";
  echo gettype($str_num).'<br>';

  $str_num1 = "3";
  echo gettype($str_num1).'<br>';

  //$minus = $str_num + $str_num1;
  //echo $minus;


  $minus = (int) $str_num;
  echo gettype($minus).'<br>';

  echo '------------------------<br>';
  $fff = 3 > 2;
  echo gettype($fff).'<br>';

  if($fff){
    echo "a";
  } else {
    echo "b";
  }



?>