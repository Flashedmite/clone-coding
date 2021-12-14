<?php
include "db_info.php";
$sql="create table biz_card(num int(20), name char(10), company char(30), tel char(20), hp char(20), address char(100), primary key(num))";
$result = mysqli_query($con, $sql);
if($result){
  echo "생성 완료";
}
else{
  echo "실패 ??";
}
mysqli_close($con);
?>
