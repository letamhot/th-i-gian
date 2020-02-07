<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Calculator</title>
</head>
<body>
<?php
class Calculator
{
    public $number1;
    public $number2;
    public function Calculator($select)
    {
        switch ($select) {
            case 'addition':
                return $this->number1 + $this->number2;
                break;
            case 'subtract':
                return $this->number1 - $this->number2;
                break;
            case 'multiply':
                return $this->number1 * $this->number2;
                break;
            case 'share':
                return $this->number1 / $this->number2;
                break;
            default:
                return 'Wrong';
        }
    }
    public function result($number1, $number2, $select)
    {
        $this->number1 = $number1;
        $this->number2 = $number2;
        return $this->Calculator($select);
    }
}
$result = "";
$cal = new Calculator();
if (isset($_POST['convert'])) {
    $number1 = $_POST['number1'];
    $select = $_POST['select'];
    $number2 = $_POST['number2'];
    if ($number1 = 0 || $number2 = 0) {
        echo 'Error';
    } else {
        $result = $cal->result($number1, $number2, $select);
        ?>
       <div id="content">
        <h1>Calculator</h1>
        <form>
        <div id="data">
                <label>Number 1: <?=$number1?></label><br />
                <label>Select option: <?=$select?></label><br />
                <label>Number 2: <?=$number2?></label><br />
                <label>Calculator Value: <?=$result?></label>
            </div>
        </form>
    </div>
    <?php
}
}
?>
</body>
</html>