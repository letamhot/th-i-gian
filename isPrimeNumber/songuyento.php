<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Số nguyên tố</title>
</head>
<body>
<?php
function isPrimeNumber($n)
{
    // so nguyen n < 2 khong phai la so nguyen to
    if ($n < 2) {
        return false;
    }
    // check so nguyen to khi n >= 2
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

echo("Các số nguyên tố nhỏ hơn 100 là: <br>");
for ($i = 0; $i < 100; $i++) {
    if (isPrimeNumber($i)) {
        echo($i . " ");
    }
}
?>
</body>
</html>