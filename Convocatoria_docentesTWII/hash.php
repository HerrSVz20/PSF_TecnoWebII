<?php
$password = '123456';

    // password_hash

    $hash = password_hash($password, PASSWORD_DEFAULT);
    echo $hash . '<br/>';

?>