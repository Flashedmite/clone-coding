<?php
include "db_info.php";

$sql ="INSERT into biz_card(num,name,company,tel,hp,address) values(2,'원선우','미래전자','031-276-1829', '경기도 용인시 신갈동 388-23 번지');";
$result=mysqli_query($con,$sql);

if($result)
echo "레코드 삽입 완료.";
else {
    echo "레코드 삽입 실패, 에러 확인 요망!"
}

 mysqli_close($con);

 ?>