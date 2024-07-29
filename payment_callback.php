<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405); // Méthode non autorisée
    echo json_encode(['error' => 'Méthode non autorisée']);
    exit;
}

$input = file_get_contents('php://input');
$data = json_decode($input, true);

if (json_last_error() !== JSON_ERROR_NONE) {
    http_response_code(400);
    echo json_encode(['error' => 'Données JSON invalides']);
    exit;
}

$payment_mode = $data['payment_mode'] ?? null;
$paid_sum = $data['paid_sum'] ?? null;
$paid_amount = $data['paid_amount'] ?? null;
$payment_token = $data['payment_token'] ?? null;
$payment_status = $data['payment_status'] ?? null;
$command_number = $data['command_number'] ?? null;
$payment_validation_date = $data['payment_validation_date'] ?? null;

if (!$payment_mode || !$paid_sum || !$paid_amount || !$payment_token || !$payment_status || !$command_number || !$payment_validation_date) {
    http_response_code(400); 
    echo json_encode(['error' => 'Paramètres manquants']);
    exit;
}

http_response_code(200); 
echo json_encode(['status' => 'success']);
?>
