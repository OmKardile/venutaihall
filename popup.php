<?php
header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store');
echo json_encode([
    'enabled' => false,
    'type' => 'text',
    'cooldownHours' => 24,
    'headline' => '',
    'text' => '',
    'primaryText' => '',
    'primaryUrl' => '',
    'secondaryText' => '',
    'secondaryUrl' => '',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
