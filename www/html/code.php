<!DOCTYPE html>
<html lang="en">


<table>

<tr>
    <th>Имя</th>
    <th>Сообщение</th>
    <th>Машина(номер)</th>
</tr>


<?php
//session_start();
include('dbcon.php');
// print_r($_POST)
$name = $_POST["name"];
$message = $_POST["message"];
$car = filter_input(INPUT_POST, "car", FILTER_VALIDATE_INT);
$terms = filter_input(INPUT_POST, "terms", FILTER_VALIDATE_BOOL);



// $query1 ="CREATE TABLE orders (
//     name varchar UNIQUE DEFAULT NULL,
//     message varchar  DEFAULT NULL,
//     car int NOT NULL
//   );";
// $connect->exec($query1);
$query1 ="INSERT INTO orders (name, message, car) VALUES (?,?,?)";
$query_run0 = $connect->prepare($query1);
$query_run0->execute([$name,$message,$car]);



$query2 ="SELECT * FROM orders; ";

$query_run=$connect->prepare($query2);
$query_run->execute();
$result=$query_run->fetchAll(PDO::FETCH_DEFAULT);
//print_r($result);
foreach ($result as $row) 
{ 
    echo '<tr>';
    echo '<td>' . $row['name'] . '</td>';
    echo '<td>' . $row['message'] . '</td>';
    echo '<td>' . $row['car'] . '</td>';
    echo '</tr>';
}

?>
</table>