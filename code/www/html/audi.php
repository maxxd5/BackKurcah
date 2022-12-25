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
                <h2>Добро пожаловать в магазин Speed $ Death.</h2>
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
            <h2 style="color:black !important; margin-left: 50px; margin-top: 20px;">AUDI</h2>
            <div class="car_text_wrap" style="margin-top: 5vh; margin-left: 3vw; margin-right: 3vw;">
            <img src="assets/images/audi.jpg" alt="" style="float: left; width: 30vw; margin-right: 11px">
<p>Автомобили AUDI поддерживают высокие стандарты качества и имиджа. Авто стоит дороже, но соответствует положению бренда на рынке. Преимущество для владельцев заключается в том, что даже старые автомобили нуждаются в очень редком ремонте, кроме стандартного обслуживания. Автомобили AUDI имеют очень качественное шасси и отличный баланс между комфортом и ходовыми качествами, а также имеется множество автомобилей с полным приводом. Комплектация автомобилей обычно очень обширна. Мы рекомендуем дизельный двигатель, так как дизельные двигатели концерна Volkswagen, которые использует AUDI, являются топовыми агрегатами, характеризующимися, прежде всего, низким расходом топлива.
</p>
<?php include('zapros.php') ?>

<a href="form.php"> Цена:  <?= $cars[0]['price']?> </a>




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
                <div><a href="bmw.php">BAVO</a></div>
                <div><a href="volvo.php">VOLVO</a></div>
                
                <div><a href="email.php">ТЕСТДРАЙВ</a></div>
            </div>
        </section>
    </div>
</body>

</html>