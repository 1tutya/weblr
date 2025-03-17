<?php
    require "db.php";

    $stmt = $pdo->query("SELECT * FROM cars");

    $cars = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>
</head>
<body>
    <h2>Cars list</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Year</th>
            <th>Mileage</th>
            <th>Price</th>
        </tr>
        <?php foreach($cars as $car): ?>
            <tr>
                <td><?= $car['id'] ?></td>
                <td><?= $car['brand'] ?></td>
                <td><?= $car['model'] ?></td>
                <td><?= $car['year'] ?></td>
                <td><?= $car['mileage'] ?></td>
                <td><?= $car['price'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>