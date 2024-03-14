<?php

header("Access-Control-Allow-Origin: $_SERVER[HTTP_ORIGIN]");
header('Access-Control-Allow-Credentials: true');

echo(json_encode($_COOKIE));
