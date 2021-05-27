<?php

  //echo "hello PHP!";
  //get : 보내는 데이터의 양이 적고, 입력 데이터가 아닌 조회나 업데이트할 데이터를 전달할 때 주로 사용한다.
  //post : 보내는 데이터의 양이 많고, 특히 데이터베이스에 입력해야 할 데이터를 보낼때 사용한다.
  //참조 : 

  //get : $_GET['name data'];
  //post : $_POST['name data'];
  //둘 다 받을 수 있는 형식 : $_REQUEST['name data'];
  $member_id = $_POST['id'];
  $member_name = $_POST['name'];
  $member_pass = $_POST['pass'];
  $member_phone = $_POST['phone'];
  $member_nati = $_POST['nati'];

  // echo $id.'<br>';
  // echo $name.'<br>';
  // echo $pass.'<br>';
  // echo $phone.'<br>';
  // echo $nati.'<br>';

  include_once $_SERVER['DOCUMENT_ROOT'].'/php_sql/connect/db_conn.php';

  // echo $_SERVER['DOCUMENT_ROOT'].'/php_sql/connect/db_conn.php'.'<br>';

  $sql = "INSERT INTO members (
    id, 
    name, 
    pass, 
    phone, 
    nationality
    ) VALUES(
      '$member_id', 
      '$member_name', 
      '$member_pass', 
      '$member_phone', 
      '$member_nati')";

  mysqli_query($db_conn, $sql);
  // mysqli_query() : PHP에서 데이터 베이스에 특정 작업을 요청하는 함수
  // 첫 번째 파라미터로 접속 정보를, 두번째 파라미터로 요청 작업을 전달한다;

?>


<a href="insert_form.php">돌아가기</a>