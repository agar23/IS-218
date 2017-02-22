<?php
  $db_host  = 'sql2.njit.edu';
  $db_name  = 'aga23';
  $username = 'aga23';
  $password = 'RaEYrCvE';

    try {
        $db = new PDO("mysql:host=$db_host;dbname=$db_name", $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>
