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
            <h2 style="color:black !important; margin-left: 50px; margin-top: 20px;">BMW</h2>
            <div class="car_text_wrap" style="margin-top: 5vh; margin-left: 3vw; margin-right: 3vw;">
            <img src="assets/images/bmw.jpg" alt="" style="float: left; width: 30vw; margin-right: 11px">
<p>Как первый европейский производитель автомобилей, BMW повысила требования к использованию неэтилированного бензина, тем самым представив некоторые из первых европейских автомобилей с каталитическими нейтрализаторами. В 1994 году BMW купила Rover Group, в которую входили Rover, MG (эти две сейчас не существуют) и Land Rover. Через год компания начала поставлять свои двигатели BMW Rolls-Royce для самолетов McDonnell Douglas.
    
    В состав концерна BMW также входят такие дочерние компании, как BMW Technik GmbH, которая занимается разработкой новых автомобилей и общими исследованиями всего автомобильного транспорта. Еще одна из них — BMW M GmbH, которая занимается производством спортивных и гоночных автомобилей, а также гоночных автомобилей.</p></div>
    <?php include('zapros.php') ?>

    <a href="form.php"> Цена:  <?= $cars[2]['price']?> </a>
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