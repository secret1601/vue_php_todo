<?php 
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: access");
    header("Access-Control-Allow-Methods: GET,POST");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    
    $host = 'localhost';
    $user = 'secret1601';
    $pw = 'Gmlwns12!';
    $db = 'secret1601';
    $conn = mysqli_connect($host, $user, $pw, $db);

    // GET 으로 데이터를 받는다.
    $title = $_GET["title"];
    $body = $_GET["body"];

    // 데이터를 삽입하는 SQL 구문
    $sql = "INSERT INTO todo(title, body) VALUES('{$title}', '{$body}')";
    if( mysqli_query($conn, $sql) ) {
        echo json_encode(["result" => 1]);
    }else{
        echo json_encode(["result" => 0]);
    }

    mysqli_close($conn);

?>