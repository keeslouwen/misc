<?php
header('Content-Type: application/json');

$config = array(
    'realm' => 'dev-testkey',
    'auth-server-url' => $_ENV["KEYCLOAK_URL"],
    'resource' => "app2"
);

echo json_encode($config, JSON_UNESCAPED_SLASHES);
?>


