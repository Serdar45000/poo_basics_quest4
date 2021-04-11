<?php

require_once 'Car.php';



// CAR
$car = new Car('color', 5, 'fuel');



$car->setParkBrake(false);
echo $car->start();
echo '<br/>';
echo $car->forward();
echo $car->brake();
echo '<br/>';
$car->setParkBrake(true);
echo $car->start();


