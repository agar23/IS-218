<?php

$program = new main();

class main{

  public function __construct(){
    if($_SERVER['REQUEST_METHOD'] == 'GET'){

      echo 'get request';
    }else{
      echo 'Something else requested';
    }

    print_r($_REQUEST);
  }
}




 ?>
