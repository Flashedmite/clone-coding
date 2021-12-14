<?php
include "db_info.php";
$sql = "insert into membership values('khshul', '실기형', '607-010',
'부산시 동래구 명윤동', '764-3784' 33)";
$sql .= ", ('chpark', '박철호', '503-200', '광주시 남구 지석동', '298-9730',34)";
$sql .= ", ('shlee', '이상훈', '503-201', '광주시 남구 도금동', '838-4347',32)";
$sql .= ", ('jyjang', '장연숙', '606-065', '부산시 영도구 동래동5가', '399-9809',24)";

$result = mysqli_query($con, $sql);
if($result){
    echo "데이터 삽입 완료";
}
else{
    echo "데이터 삽입 실패, 에러 확인 요망";
}
mysqli_close($con);
?>