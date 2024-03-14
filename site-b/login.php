<?php

header("Access-Control-Allow-Origin: $_SERVER[HTTP_ORIGIN]");
header('Access-Control-Allow-Credentials: true');

setcookie(
    "session_id", date('Y-m-d-H-i-s'), [
    'sameSite' => 'None',
    'secure' => true,
    'httponly' => true,
    'domain' => $_SERVER["HTTP_HOST"],
    ]
);

echo json_encode($_COOKIE);

