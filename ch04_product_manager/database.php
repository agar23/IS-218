<?php
    $dsn = 'sql2.njit.edu;dbname=aga23';
    $username = 'aga23';
    $password = 'RaEYrCvE';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>
