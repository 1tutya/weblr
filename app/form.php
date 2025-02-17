<?php
$csvFile = 'data.csv';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $brand = trim($_POST['brand'] ?? '');
    $model = trim($_POST['model'] ?? '');
    $year = trim($_POST['year'] ?? '');
    $mileage = trim($_POST['mileage'] ?? '');
    $price = trim($_POST['price'] ?? '');

    $dataRow = [$name, $brand, $model, $year, $mileage, $price];

    if (($file = fopen($csvFile, 'a')) !== false) {
        fputcsv($file, $dataRow);
        fclose($file);
        $message = 'Данные успешно сохранены!';
    } else {
        $message = 'Ошибка при сохранении данных.';
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