<?php
header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');

function out($code, $arr) {
    http_response_code($code);
    echo json_encode($arr, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    out(405, ['error' => 'Method not allowed.']);
}

$field = function ($key, $max = 500) {
    $v = isset($_POST[$key]) ? trim((string)$_POST[$key]) : '';
    if (strlen($v) > $max) {
        $v = substr($v, 0, $max);
    }
    return $v;
};

$honeypot = $field('website', 200);
if ($honeypot !== '') {
    out(200, ['success' => true, 'message' => 'Thank you — your enquiry has been received.']);
}

$name = $field('name', 120);
$phone = $field('phone', 40);
if ($name === '' || $phone === '' || !preg_match('/[0-9]{10}/', $phone)) {
    out(422, ['error' => 'Please provide your name and a valid phone number.']);
}

$allowed = ['event', 'guests', 'date', 'hall', 'email', 'message', 'callback_time', 'website'];
$data = ['name' => $name, 'phone' => $phone, 'received' => gmdate('c')];
foreach ($allowed as $key) {
    if ($key === 'website') continue;
    $data[$key] = $field($key, $key === 'message' ? 4000 : 200);
}

$line = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . PHP_EOL;
$ok = @file_put_contents(__DIR__ . '/enquiries.log', $line, FILE_APPEND | LOCK_EX);

if ($ok === false) {
    out(500, ['error' => 'Could not save your enquiry. Please call the venue on 9359567494.']);
}

out(200, [
    'success' => true,
    'message' => 'Thank you — your enquiry has been received. Our team will contact you shortly.',
]);
