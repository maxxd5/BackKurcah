<?php

require_once 'dbcon.php';

$sql = "SELECT * FROM cars";
$check_cars = $connect->query($sql);

while($temp = $check_cars->fetch(PDO::FETCH_ASSOC)){
    $cars[] = $temp;
}