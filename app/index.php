<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LR2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Введите данные об автомобиле</h1>

    <form id="carForm" action="form.php" method="POST" onsubmit="return validateForm()">
        <label for="name">ФИО</label>
        <input type="text" name="name" id="name" required>
        <div id="nameError" class="error"></div>

        <label for="brand">Марка автомобиля</label>
        <input type="text" name="brand" id="brand" required>
        <div id="brandError" class="error"></div>

        <label for="model">Модель автомобиля</label>
        <input type="text" name="model" id="model" required>
        <div id="modelError" class="error"></div>

        <label for="year">Год производства</label>
        <input type="number" name="year" id="year" required>
        <div id="yearError" class="error"></div>

        <label for="mileage">Пробег</label>
        <input type="number" name="mileage" id="mileage" required>
        <div id="mileageError" class="error"></div>

        <label for="price">Цена</label>
        <input type="number" name="price" id="price" required>
        <div id="priceError" class="error"></div>

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

    <script src="script.js"></script>
</body>
</html>