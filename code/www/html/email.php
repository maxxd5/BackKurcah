<?php
session_start();

if (isset($_SESSION['user'])) {
    header('Location: profile.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speed & Death</title>
    <link rel="stylesheet" href="assets/css/styl_auto.css">
</head>

<body>

    <div class="main_container">
        <section id="hero" class="header">
            <img src="assets/images/hotwhe.jpg" style="opacity: 50%;" alt="header fotografie letadla">
            <div class="heroText">
                <h2>Добро пожаловать в магазин Speed $ Death</h2>
            </div>
        </section>
        <!-- Hero Konec -->

        <!-- Header -->
        <section id="nav1">
            <div class="header container" id="menu">
                <div><a href="Auto_salon.php">ГЛАВНАЯ</a></div>
                <div><a href="audi.php">AUDI</a></div>
                <div><a href="benz.php">MERCEDES</a></div>
                <div><a href="bmw.php">BMW</a></div>
                <div><a href="volvo.php">VOLVO</a></div>
                <div><a href="email.php">ТЕСТДРАЙВ</a></div>
            </div>
        </section>

        <section id="main">
            <div class="inputDimensions">
            <body>
<h1>Записаться на тест-драйв!</h1>
<form method="POST" name="contactform" action="contact-form-handler.php"> 
<p>
<label for='name'>Ваше имя:</label> <br>
<input type="text" name="name">
</p>
<p>
<label for='email'>Ваша почта:</label> <br>
<input type="text" name="email"> <br>
</p>
<p>
<label for='message'>Укажите время и пожелания:</label> <br>
<textarea name="message"></textarea>
</p>
<input type="submit" value="Submit"><br>
</form>

<script language="JavaScript">

var frmvalidator  = new Validator("contactform");
frmvalidator.addValidation("name","req","Please provide your name"); 
frmvalidator.addValidation("email","req","Please provide your email"); 
frmvalidator.addValidation("email","email","Please enter a valid email address"); 
</script>
       
            </div>
        </section>

        <section id="nav2">
            <div class="header container" style="overflow: hidden;">
            <a href="audi.php"><img onclick="window.location.href='audi.php'" class="faro_audi" src="assets/images/audi.jpg"></a>
                <a href="bmw.php"><img onclick="window.location.href='bmw.php'" class="faro_audi" src="assets/images/bmw.jpg"></a>
                <a href="volvo.php"><img onclick="window.location.href='volvo.php'" class="faro_audi" src="assets/images/volvo.jpg"></a>
                <a href="benz.php"><img onclick="window.location.href='benz.php'" class="faro_audi" src="assets/images/mergl.jpg"></a>
            </div>
        </section>
    

        <section id="footer">
            <div class="container">
                <div><a href="Auto_salon.php">ГЛАВНАЯ</a></div>
                <div><a href="audi.php">AUDI</a></div>
                <div><a href="benz.php">MERCEDES</a></div>
                <div><a href="bmw.php">BMW</a></div>
                <div><a href="volvo.php">VOLVO</a></div>
                <div><a href="email.php">ТЕСТДРАЙВ</a></div>
            </div>
        </section>
    </div>
</body>

</html>