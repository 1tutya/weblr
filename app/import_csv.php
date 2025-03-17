<?php
    require 'db.php';

    $file = fopen("data.csv", "r");

    //fgetcsv($file);

    while (($data = fgetcsv($file, 1000, ",")) != false) {
        $stmt = $pdo->prepare("INSERT INTO cars (brand, model, year, mileage, price) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$data[0], $data[1], $data[2], $data[3], $data[4]]);
    }

    fclose($file);

    echo "Загружены данные";
?>