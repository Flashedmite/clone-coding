<?php
    header("Content-type:text/html;charset=UTF-8");
    $con = mysqli_connect("localhost", "bueong4296", "AerO2952!", "bueong4296");
    if(mysqli_connect_error($con)){
        echo "DB 연결 실패:".mysqli_connect_error();
    } else {
        echo "DB 연결 성공<br>";
    }
    mysqli_query($con, "set session character_set_connection=utf8");
    mysqli_query($con, "set session character_set_results=utf8");
    mysqli_query($con, "set session character_set_client=utf8");
?>