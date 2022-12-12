<!DOCTYPE html>
<html lang="en">


<table>

<tr>
    <th>Имя</th>
    <th>Почта</th>
    <th>Время</th>
</tr>



<?php 
$errors = '';
$myemail = 'supermaxick@gmail.com';
include('dbcon.php');
if(empty($_POST['name'])  || 
   empty($_POST['email']) || 
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name']; 
$email_address = $_POST['email']; 
$message = $_POST['message']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}


	

	$query1 ="INSERT INTO emails (name, email, message) VALUES (?,?,?)";
	$query_run0 = $connect->prepare($query1);
	$query_run0->execute([$name,$email_address,$message]);


$query2 ="SELECT * FROM emails; ";

$query_run=$connect->prepare($query2);
$query_run->execute();
$result=$query_run->fetchAll(PDO::FETCH_DEFAULT);
//print_r($result);
	//header('Location: contact-form-thank-you.php');
	foreach ($result as $row){ 
		echo '<tr>';
		echo '<td>' . $row['name'] . '</td>';
		echo '<td>' . $row['email'] . '</td>';
		echo '<td>' . $row['message'] . '</td>';
		echo '</tr>';
	}
	
?>

<html>
<head>
	<title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>

</table>
</body>
</html>