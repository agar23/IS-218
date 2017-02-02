<?php

		$obj = new main;

		class main {

			public function __construct(){
					echo "program started</br>";

					$car = carFactory::create();
					$car->accel();
					$car->decel();

					print_r($car);
			}

			public function __destruct(){
				echo '<br>program ended </br>';
			}
		}

		class carFactory{
				public static function create(){
					$car = new car;
					return $car;
				}
		}

		abstract class vehicle{

			public function accel(){
				echo "car is going faster</br>";
			}
			public function decel(){
				echo "car is going slower</br>";
			}


		}

		class car extends vehicle{

				public $make;
				public $model;
				public $year;

				public function __construct(){
					$this->make = 'ford';
					$this->year = date("y");
				}

		}


?>
