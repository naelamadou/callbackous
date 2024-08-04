<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405); 
    echo json_encode(['error' => 'Méthode non autorisée']);
    exit;
}


$payment_mode = $_GET['payment_mode'] ?? null;
$paid_sum = $_GET['paid_sum'] ?? null;
$paid_amount = $_GET['paid_amount'] ?? null;
$payment_token = $_GET['payment_token'] ?? null;
$payment_status = $_GET['payment_status'] ?? null;
$command_number = $_GET['command_number'] ?? null;
$payment_validation_date = $_GET['payment_validation_date'] ?? null;


if (!$payment_mode || !$paid_sum || !$paid_amount || !$payment_token || !$payment_status || !$command_number || !$payment_validation_date) {
    http_response_code(400); 
    echo json_encode(['error' => 'Paramètres manquants']);
    exit;
}

http_response_code(200); // OK
echo json_encode(['status' => 'success']);
?>
