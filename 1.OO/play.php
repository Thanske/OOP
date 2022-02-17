<?php

require_once __DIR__.'/lib/Ship.php';

/**
 * @param Ship $someShip
 */
function printShipSummary($someShip)
{
    echo 'Ship Name: '.$someShip->getName();
    echo '<hr/>';
    $someShip->sayHello();
    echo '<hr/>';
    echo $someShip->getName();
    echo '<hr/>';
    echo $someShip->getNameAndSpecs(false);
    echo '<hr/>';
    echo $someShip->getNameAndSpecs(true);
}

$myship = new Ship();
$myship->name = 'Jedi Starship';
$myship->weaponPower = 10;


$othership = new Ship();
$othership->name = 'Imperial Shuttle';
$othership->weaponPower = 5;
$othership->strength = 50;

printShipSummary($myship);
echo '<hr/>';
printShipSummary($othership);
echo '<hr/>';
if ($myship->doesGivenShipHaveMoreStrength($othership)){
    echo $othership->name.'has more strength';
} else{
    echo $myship->name.'has more strength';
};
