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
            <h2 style="color:black !important; margin-left: 50px; margin-top: 20px;">VOLVO</h2>
            <div class="car_text_wrap" style="margin-top: 2vh; margin-left: 2vw; margin-right: 2vw;">
            <img src="assets/images/volvo.jpg" alt="" style="float: left; width: 25vw; margin-right: 11px">
<p>Volvo Group берет свое начало в 1927 году, когда с конвейера завода в Гётеборге сошел первый (легковой) автомобиль Volvo.
    Первый грузовик был представлен под названием Series 1 в январе 1928 года и имел мгновенный успех — весь годовой объем производства был быстро распродан. Однако грузовики Volvo вызывают интерес и за пределами Швеции. Экспорт грузовиков под маркой Volvo в Европу начался в 1930-х годах. После запуска ракеты два владельца компании, Ассар Габриэльссон и Густав Ларсон, решили спроектировать транспортное средство, которое было бы безопасным и способным выдерживать суровые условия холодного шведского климата и плохих дорог. С тех пор, как люди начали водить автомобили, у основателей был девиз: «Безопасность есть и всегда должна быть фундаментальным принципом дизайна. С акцентом на безопасность, долговечность и качество часть разработки пришлось начинать с нуля. Самая успешная модель Volvo, FH12/16, была представлена ​​автомобильной компанией в 1993 году. На сегодняшний день последней инновацией является модель FE (представленная в 2006 году), технически родственная автомобилям Daf LF и Renault Midlum.</p></div>
    <?php include('zapros.php') ?>

    <a href="form.php"> Цена:  <?= $cars[3]['price']?> </a>      
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