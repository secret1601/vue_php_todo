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

    // 전체 개수 파악
    $sql = "SELECT * FROM todo";
    $result = mysqli_query($conn, $sql);
    $total = mysqli_num_rows($result);
    
    echo json_encode(["total" => $total]);
    
    mysqli_close($conn);

?>