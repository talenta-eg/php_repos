<?php

require 'bootstrap.php';


try{
    $delete = $pdo->prepare('update users set active = 0 WHERE  id = :user_id');

    $delete->execute([
        'user_id' => $_SESSION['user_id'],
    ]);
    echo " User has been deleted ";

}catch (PDOException $e) {
    $e->getMessage();
}


