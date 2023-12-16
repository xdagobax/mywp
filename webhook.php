<?php
// webhook.php

// Verificar la clave secreta
$secret = '@Privado33'; // Reemplaza con tu clave secreta
$webhookContent = file_get_contents('php://input');
$hash = hash_hmac('sha256', $webhookContent, $secret);

$output = shell_exec('git pull -X theirs origin main 2>&1');
file_put_contents('git_log.txt', $output, FILE_APPEND);
echo $output;

// if ($_SERVER['HTTP_X_HUB_SIGNATURE'] == 'sha256=' . $hash) {
//     // La firma es válida, continuar con la actualización
//     $output = shell_exec('git pull origin main');
//     echo $output;
// } else {
//     // La firma no es válida, solicitud no autorizada
//     header('HTTP/1.1 401 Unauthorized');
//     echo 'Unauthorized dgb';
// }

