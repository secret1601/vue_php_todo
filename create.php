<?php 
    $host = 'localhost';
    $user = 'secret1601';
    $pw = 'Gmlwns12!';
    $db = 'secret1601';
    $conn = mysqli_connect($host, $user, $pw, $db);
     // 테이블 생성을 합니다.
    $sql = "CREATE TABLE todo (
        ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        TITLE VARCHAR(30) NOT NULL,
        COMPLETE BOOLEAN NOT NULL DEFAULT 0,
        BODY TEXT NOT NULL
    )";

     // SQL 구문을 실행합니다.
    if(mysqli_query($conn, $sql)) {
        echo 'SUCCESS';
    }else{
        echo 'Error';
    }

    // 작업이 완료된 경우 라면 db 연결 종료
    mysqli_close($conn);

?>