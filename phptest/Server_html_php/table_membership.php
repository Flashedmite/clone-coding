<?php
    include "db_info.php";
    $sql = "create table membership(id varchar(10) not null,
    name varcahr(20) not null,
    post_num char(0),
    address varchar(80),
    tel varchar(20),
    age int,
    primary key(id));";
    $result = mysqli_query($con, $sql);
    if($result){
        echo "테이블 생성 완료";
    }
    else{
        echo "테이블 생성 실패, 에러 확인 요망";
    }
    mysqli_close($con);
?>