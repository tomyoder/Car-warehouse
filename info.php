<?php
class Car
{
    private $year;
    private $make;
    private $model;
    private $miles;
    private $color;
    private $price;
    private $image;

    function __construct($car_year, $car_make, $car_model, $car_miles, $car_color, $car_price, $car_image)
    {
        $this->year = $car_year;
        $this->make = $car_make;
        $this->model = $car_model;
        $this->miles = $car_miles;
        $this->color = $car_color;
        $this->price = $car_price;
        $this->image = $car_image;
    }

    function getPrice () {
      return $this->price;
    }
    function getMiles() {
      return $this->miles;
    }
    function getYear () {
      return $this->year;
    }
    function getColor () {
      return $this->color;
    }
    function getMake () {
      return $this->make;
    }
    function getModel () {
      return $this->model;
    }
    function getImage () {
      return $this->image;
    }

    function setPrice($new_price)
    {
        $this->price = (float)$new_price;
    }
    function setMiles($new_miles)
    {
        $this->miles = (float)$new_miles;
    }
    function setColor($new_color)
    {
        $this->color = $new_color;
    }
    function setYear($new_year)
    {
        $this->year = $new_year;
    }
    function setMake($new_make)
    {
        $this->make = $new_make;
    }
    function setModel($new_model)
    {
        $this->model = $new_model;
    }


}



$car1 = new Car("1964", "Porsche", "911",  "7864", "Silver", "74991", '<img src="http://www.topcarrating.com/porsche/1964-porsche-911-2-0-coupe-901.jpg"');

$car2 = new Car("1971", "Ford", "F-150", "114241", "Blue", "5995", '<img src="https://s-media-cache-ak0.pinimg.com/236x/97/f4/fd/97f4fdc8f650f33d160ccea52e3c2e1a.jpg"');

$car3 = new Car("2013", "Lexus", "RX 350", "20000", "Platinum", "44700", '<img src="https://cars.usnews.com/static/images/Auto/izmo/i4800/2015_lexus_rx_angularfront.jpg"');

$car4 = new Car("1958", "Mercedes-Benz", "219", "67979", "Blue", "1900", '<img src="https://upload.wikimedia.org/wikipedia/commons/7/76/Mercedes_180_2_v_sst.jpg"');

$cars = array($car1, $car2, $car3, $car4);

$cars_matching_search = array();
    foreach ($cars as $car) {
      if (($car->getPrice() < $_GET["price"])
      && ($car->getMiles() < $_GET["miles"])){
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

        if (empty($cars_matching_search)) {
          echo "<h1> Sorry sir, no cars match your search</h1>";
        }
          else {
            echo "<h1> Here are the featured cars that match your search</h1>";
              foreach ($cars_matching_search as $car) {
                    $miles = $car->getMiles();
                    $price = $car->getPrice();
                    $image = $car->getImage();
                    $make = $car->getMake();
                    $model = $car->getModel();
                    $color = $car->getColor();
                    $year = $car->getYear();
                echo "<li>" . $make . "," . $model . "</li>";
                echo "<ul>";
                    echo "<li> Year: $year </li>";
                    echo "<li> Color: $color</li>";
                    echo "<li> Miles: $miles </li>";
                    echo "<li> Price: $price </li>";
                    echo "<li> $image </li>";
                    echo "</ul>";

          }
      echo "<h1>And here is our complete inventory</h1>";

        foreach ($cars as $car) {
          $miles = $car->getMiles();
          $price = $car->getPrice();
          $image = $car->getImage();
          $make = $car->getMake();
          $model = $car->getModel();
          $color = $car->getColor();
          $year = $car->getYear();
      echo "<li>" . $make . "," . $model . "</li>";
            echo "<ul>";
                echo "<li> Year: $year </li>";
                echo "<li> Color: $color</li>";
                echo "<li> Miles: $miles </li>";
                echo "<li> Price: $price </li>";
                echo "<li> $image </li>";
                echo "</ul>";
        }

      }


        ?>
    </ul>


</body>
</html>
