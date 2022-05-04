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
    // 페이지 리스트
    $page_now = $_GET["page_now"];
    $data_count = $_GET["data_count"];
    // 시작 번호
    $start_count = ($page_now - 1) * $data_count;

    // 기본 클라이언트 문자 셋 설정
    mysqli_set_charset($conn, "utf-8");

    // 데이터를 읽어오는 SQL 구문
    $sql = "SELECT * FROM todo ORDER BY id DESC LIMIT $start_count, $data_count";
    // QUERY를 실행
    $res = mysqli_query($conn, $sql);
    $result = array();
    // 받아온 결과는 배열의 형태입니다.
    // 배열의 인덱스를 하나씩 접근하여서 그 결과를 바탕으로
    // 최종 json_encode 로 echo 합니다.
    while($row = mysqli_fetch_array($res)) {
        // 하나씩 데이터를 뽑아서 배열에 저장
        array_push($result, array('id' => $row[0], 'title' => $row[1], 'complete' => $row[2], 'body' => $row[3]));
    }
    // 만들어진 결과를 json으로 변환
    echo json_encode( array("result" => $result), JSON_UNESCAPED_UNICODE );

    mysqli_close($conn);
?>