<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <meta charset="UTF-8">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
</head>
<body>

    <h1>Заявка на покупку</h1>

    <form action="code.php" method="post">

        <label for="name">Ваше ФИО</label>
        <input type="text" id="name" name="name">
        
        <label for="message">Желаемая Комплектация</label>
        <textarea id="message" name="message"></textarea>

        <label for="car">Марка авто</label>
        <select id="car" name="car">
            <option value="5"selected>-Выберите авто-</option>
            <option value="1">AUDI</option>
            <option value="2">BMW</option>
            <option value="3">VOLVO</option>
            <option value="3">MERCEDES</option>
           
        </select>

        <label>
            <input type="checkbox" name="terms">
            Я соглашаюсь с уловиями
        </label>

        <br>

        <button>Send</button>

    </form>

</body>
</html>