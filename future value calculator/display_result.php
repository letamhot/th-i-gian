<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bai1.css">
    <title>[Bài tập] Ứng dụng Future Value Calculator</title>
    <title>Future Value Calculator</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $investment = $_POST["investment"];
    $rate = $_POST["rate"];
    $years = $_POST["years"];
    $submit = $investment;
    if ($investment < 0 || $rate < 0 || $years < 0) {
        echo 'Sai';
    } else {
        $submit += $investment * ($rate / 100) * $years; ?>
    <div id="content">
        <h1>Future Value Calculator</h1>
        <form>
        <div id="data">
                <label>Investment Amount: <?="$" . $investment?></label><br />
                <label>Yearly Interest Rate: <?=$rate . "%"?></label><br />
                <label>Number of Years: <?=$years?></label></br>
                <label>Future Value: <?="$" . $submit?></label>
            </div>
        </form>
    </div>
    <?php
    }
}
    ?>
</body>
</html>