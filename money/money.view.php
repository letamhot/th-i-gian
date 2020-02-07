<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Convert Money</title>
</head>
<body>
<?php
        class ConvertMoney{
            var $money;
            function ConvertMoney1($select){
                switch($select){
                    case 'USD':
                        return $this->money * 23000 .' VNĐ';
                        break;
                    case 'VND':
                        return round($this->money / 23000,4) .' USD';
                        break;
                    default:
                        return 'Wrong';
                }
            }
            function result($money,$select){
                $this->money = $money;
                return $this->ConvertMoney1($select);
            }
        }
        $result = "";
        $cal = new ConvertMoney();
        if(isset($_POST['convert'])){
            $money = $_POST['money'];
            $select = $_POST['select'];
            if(empty($money) || !is_numeric($money) || $money<0){
                echo 'Error';
            }
            else{
                $result = $cal->result($money,$select);
    ?>
       <div id="content">
        <h1>Convert Money</h1>
        <form>
        <div id="data">
                <label>Money: <?="$" . $money?></label><br />
                <label>Select option: <?=$select?></label><br />
                <label>Future Value: <?= $result?></label>
            </div>
        </form>
    </div>
    <?php
    }
}
    ?>