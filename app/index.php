<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LR2</title>
    <style>
        #output {
            margin-top: 20px;
            white-space: pre-wrap;
            background: #f4f4f4;
            padding: 10px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <h1>Введите данные об автомобиле</h1>

    <form action="form.php" method="POST">
        <label for="name">ФИО</label>
        <input type="text" name="name" id="name">
        <label for="brand">Марка автомобиля</label>
        <input type="text" name="brand" id="brand">
        <label for="model">Модель автомобиля</label>
        <input type="text" name="model" id="model">
        <label for="year">Год производства</label>
        <input type="text" name="year" id="year">
        <label for="mileage">Пробег</label>
        <input type="text" name="mileage" id="mileage">
        <label for="price">Цена</label>
        <input type="text" name="price" id="price">
        <input type="submit" value="Отправить">
    </form>

    <form action="form.php" method="GET">
        <input type="hidden" name="show_data" value="1">
        <button type="submit">Показать данные</button>
    </form>

    <?php if (!empty($_GET['message'])): ?>
        <p><?php echo htmlspecialchars($_GET['message']); ?></p>
    <?php endif; ?>

    <?php if (!empty($_GET['data'])): ?>
        <div id="output">
            <h2>Содержимое data.csv:</h2>
            <pre><?php echo htmlspecialchars($_GET['data']); ?></pre>
        </div>
    <?php endif; ?>
</body>
</html>