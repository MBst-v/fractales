<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");

$type = $_GET['type'];

if ($type === 'cases') {
  require './config/cases.php';

  $offset = $_GET['offset'] ? $_GET['offset'] : 0;
  $count = $_GET['count'] ? $_GET['count'] : 3;
  header("x-max-count: " . count($cases));

  $response = array_slice($cases, $offset, $count);

  if (count($response > 0)) {
    http_response_code(200);
    echo json_encode($response);    
  } else {
    http_response_code(404);
    echo json_encode(['error' => '404', 'message' => 'nothing found']);
  }
}
