<?php
/*
 * The important thing here is that you don’t have to provide a salt value or a cost parameter.
 * The new API will take care of all of that for you. And the salt is part of the hash, so you don’t have to store it separately.
 *  If you want to provide your own salt (or cost),
 * you can do so by passing a third argument to the function, an array of options.
 */
$pass = password_hash('123', PASSWORD_DEFAULT, ['cost' => '12', 'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM)]);

$submitedPassword = '567';

var_dump(password_verify($submitedPassword, $pass));


$hashInfo = password_get_info((string)$pass);

print_r($hashInfo);