<?php
$conn = mysqli_connect(
  'localhost',
  'root',
  '123456',
  'reservation');
$sql = "
  INSERT INTO customer_tb
    (Name, Age, Addr)
    VALUES(
      
      
        '{$_POST['Name']}',
        '{$_POST['Age']}
',
        '{$_POST['addr']}'
      
    )
";
$result = mysqli_query($conn, $sql);
if($result === false){
  echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
  error_log(mysqli_error($conn));
} else {
  echo '성공했습니다. <a href="index.php">돌아가기</a>';
}
?>