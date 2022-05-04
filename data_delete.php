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

    // 전달된 ID 를 받는다.
    $id = $_GET['id'];

    // 데이터를 삭제하는 SQL 구문
    // id 가 2 인것을 찾아서 삭제한다.
    $sql = "DELETE FROM todo WHERE id=$id";

    // QUERY 를 실행
    $result = mysqli_query($conn, $sql);

    if($result) {
        echo json_encode(["result" => 1]);
    }else{
        echo json_encode(["result" => 0]);
    }

    mysqli_close($conn);

?>