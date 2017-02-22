<?php
    $hostname = 'sql2.njit.edu';
    $username = 'aga23';
    $project  = 'aga23';
    $password = 'RaEYrCvE';

    try {
      print "<h2>";
      ( $dbh = mysql_connect ( $hostname, $username, $password ) )
          or die ( "Unable to connect to MySQL database" );
      print "Connected to MySQL";
      print "</h2>";
      mysql_select_db( $project );

    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>
