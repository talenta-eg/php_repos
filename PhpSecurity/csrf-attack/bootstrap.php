<?php

session_start();
$_SESSION['user_id'] = 1;


// Create a new CSRF token.
if (! isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = base64_encode(openssl_random_pseudo_bytes(32));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(!isset($_POST['csrf_token']) && $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        die('Invalid CSRF Token');
    }
}

try {

    $pdo = new PDO('mysql:host=localhost;dbname=phpSec', 'root', 'root');

} catch (PDOException $e) {
    echo $e->getMessage();

}


