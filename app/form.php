<?php
$csvFile = 'data.csv';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $brand = trim($_POST['brand'] ?? '');
    $model = trim($_POST['model'] ?? '');
    $year = trim($_POST['year'] ?? '');
    $mileage = trim($_POST['mileage'] ?? '');
    $price = trim($_POST['price'] ?? '');

    $errors = [];

    if (empty($brand)) {
        $errors[] = 'Марка автомобиля обязательна.';
    }

    if (empty($model)) {
        $errors[] = 'Модель автомобиля обязательна.';
    }

    if (!is_numeric($year) || $year < 1960 || $year > 2025) {
        $errors[] = 'Год производства должен быть числом между 1960 и 2025.';
    }

    if (!is_numeric($mileage) || $mileage < 0) {
        $errors[] = 'Пробег должен быть неотрицательным числом.';
    }

    if (!is_numeric($price) || $price < 0) {
        $errors[] = 'Цена должна быть неотрицательным числом.';
    }

    if (empty($errors)) {
        $dataRow = [$brand, $model, $year, $mileage, $price];

        if (($file = fopen($csvFile, 'a')) !== false) {
            fputcsv($file, $dataRow);
            fclose($file);
            $message = 'Данные успешно сохранены!';
        } else {
            $message = 'Ошибка при сохранении данных.';
        }
    } else {
        $message = 'Ошибки в данных: ' . implode(' ', $errors);
    }

    header("Location: index.php?message=" . urlencode($message));
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['show_data'])) {
    if (file_exists($csvFile)) {
        $data = file_get_contents($csvFile);
    } else {
        $data = "Файл данных не найден.";
    }

    header("Location: index.php?data=" . urlencode($data));
    exit();
}
?>