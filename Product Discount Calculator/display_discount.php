<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>[Bài tập] Ứng dụng Product Discount Calculator</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $description = $_POST["description"];
    $price = $_POST["price"];
    $discount_percent = $_POST["discount_percent"];
    if ($description < 0 || $price < 0 || $discount_percent < 0) {
        echo 'Sai';
    } else {
        $discount_amount = $price * ($discount_percent/100) * 0.1;
        $discount_price = $price - ($discount_percent/100); ?>
    <div id="content">
        <h1>Product Discount Calculator</h1>
        <form>
        <div id="data">
                <label>Product Description: <?= $description?></label><br />
                <label>List Price: <?= "$" .$price ?></label><br />
                <label>Discount Percent: <?=$discount_percent . "%"?></label></br>
                <label>Discount Amount: <?= $discount_amount ?></label></br>
                <label>Discount Price: <?= "$" . $discount_price ?></label>
            </div>
        </form>
    </div>
    <?php
    }
}
    ?>
</body>
</html>