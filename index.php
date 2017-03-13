<?php
class Car
{
    private $make_model;
    private $price;
    private $miles;
    private $color;
    private $year;
    private $image;

    function getPrice () {
      $this->price = $price;
    }
    function getMiles() {
      $this->miles = $miles;
    }
    function getYear () {
      $this->year = $year;
    }
    function getColor () {
      $this->color = $color;
    }
    function getMakeModel () {
      $this->make_model = $make_model;
    }
    function getImage () {
      $this->image = $image;
    }

    function setPrice($new_price)
    {
        $this->price = (float) $new_price;
    }
    function setMiles($new_miles)
    {
        $this->miles = (float) $new_miles;
    }
    function setColor($new_color)
    {
        $this->color = (float) $new_color;
    }
    function setYear($new_year)
    {
        $this->year = (float) $new_year;
    }
    function setMake_model($new_make_model)
    {
        $this->make_model = (float) $make_model;
    }
}
function __consctruct($make_model, $price, $miles, $color, $year, $image)
{
    $this->make_model = $make_model;
    $this->price = $price;
    $this->miles = $miles;
    $this->color = $color;
    $this->year = $year;
    $this->image = $image;
}
$porsche = new Car();
$porsche->make_model = "Porsche 911";
$porsche->price = 74991;
$porsche->miles = 17864;
$porsche->color = "Silver";
$porsche->year = "1964";
$porsche->image ="http://www.topcarrating.com/porsche/1964-porsche-911-2-0-coupe-901.jpg";
$ford = new Car();
$ford->make_model = "Ford F150";
$ford->price = 5995;
$ford->miles = 114241;
$ford->color = "Blue";
$ford->year = "1971";
$ford->image ="https://s-media-cache-ak0.pinimg.com/236x/97/f4/fd/97f4fdc8f650f33d160ccea52e3c2e1a.jpg";
$lexus = new Car();
$lexus->make_model = "Lexus RX 350";
$lexus->price = 44700;
$lexus->miles = 20000;
$lexus->color = "Platinum";
$lexus->year = "2013";
$lexus->image ="https://cars.usnews.com/static/images/Auto/izmo/i4800/2015_lexus_rx_angularfront.jpg";

$mercedes = new Car();
$mercedes->make_model = "Mercedes Benz 219";
$mercedes->price = 1900;
$mercedes->miles = 67979;
$mercedes->color = "Blue";
$mercedes->year = "1958";
$mercedes->image ="https://upload.wikimedia.org/wikipedia/commons/7/76/Mercedes_180_2_v_sst.jpg";
$cars = array($porsche, $ford, $lexus, $mercedes);
$cars_matching_search = array();
foreach ($cars as $car) {
    if ($car->price < $_GET["price"]) {
        array_push($cars_matching_search, $car);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Car Dealership's Homepage</title>
</head>
<body>
    <h1>Your Car Dealership</h1>
    <ul>
        <?php

        foreach ($cars as $car) {
            echo "<li> $car->make_model </li>";
            echo "<ul>";
                echo "<li> $$car->price </li>";
                echo "<li> Miles: $car->miles </li>";
            echo "</ul>";
        }

            foreach ($cars_matching_search as $car) {
                $car_price = $car->getPrice();
                echo "<li> $car->make_model </li>";
                echo "<ul>";
                    echo "<li> Year: $car->year </li>";
                    echo "<li> Color: $car->color </li>";
                    echo "<li> Miles: $car->miles </li>";
                    echo "<li> Price $$car->price </li>";
                    echo "<li> $car->image </li>";



                echo "</ul>";
            }
        ?>
    </ul>
</body>
</html>
