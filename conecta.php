<?php

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'loja';

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


