<?php
    $host = 'localhost';
    $user = 'secret1601';
    $pw = 'Gmlwns12!';
    $db = 'secret1601';
    $conn = mysqli_connect($host, $user, $pw, $db);
    // db 접속 성공 여부에 대한 결과
    if(!$conn) {
        die('ERROR');
    }

?>