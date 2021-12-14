<?php 
    include "db_info.php";
    $sql = "select * from membership";
    $result = mysqli_query($con, $sql);
    $number = 1;
    mysqli_close($con);
    ?>
    <h2>mysql_fetch_array()를 이용한 데이터 읽기</h2>
    <table width="600" border="1" cellpadding="10">
        <tr align="center">
            <td bgcolor="#cccccc">일련번호</td>
            <td bgcolor="#cccccc">아이디</td>
            <td bgcolor="#cccccc">이름</td>
            <td bgcolor="#cccccc">우편번호</td>
            <td bgcolor="#cccccc">주소</td>
            <td bgcolor="#cccccc">전화번호</td>
            <td bgcolor="#cccccc">나이</td>
        </tr>
        <?php
        while($row = mysqli_fetch_array($result)){
            echo "
                <tr>
                    <td> $number </td>
                    <td> $row[id] </td>
                    <td> $row[name] </td>
                    <td> $row[post_num] </td>
                    <td> $row[address] </td>
                    <td> $row[tel] </td>
                    <td> $row[age] </td>
                </tr>
            ";
        }
        $number++;
        ?>
    </table>