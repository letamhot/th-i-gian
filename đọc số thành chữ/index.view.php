<?php
    function convert_number_to_words($number)
    {
        $string = "";
        $dictionary  = array(
            0                   => 'zero',
            1                   => 'one',
            2                   => 'two',
            3                   => 'three',
            4                   => 'four',
            5                   => 'five',
            6                   => 'six',
            7                   => 'seven',
            8                   => 'eight',
            9                   => 'nine',
            10                  => 'ten',
            11                  => 'eleven',
            12                  => 'twelve',
            13                  => 'thirteen',
            14                  => 'fourteen',
            15                  => 'fifteen',
            16                  => 'sixteen',
            17                  => 'seventeen',
            18                  => 'eighteen',
            19                  => 'nineteen',
            20                  => 'twenty',
            30                  => 'thirty',
            40                  => 'forty',
            50                  => 'fifty',
            60                  => 'sixty',
            70                  => 'seventy',
            80                  => 'eighty',
            90                  => 'ninety',
            100                 => 'hundred',
        );
        switch (true) {
            case $number < 21:
                $string = $dictionary[$number];
                break;
            case $number < 100:
                $tens   = ((int) ($number / 10)) * 10; //Khai báo số nguyên integer
                $units  = $number % 10;
                $string = $dictionary[$tens];
                if (!empty($units)) {
                    $string .= ' ' . $dictionary[$units];
                }
                break;
            case $number < 1000:
                $hundreds  = (int) ($number / 100);
                $remainder = $number % 100;
                $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
                if (!empty($remainder)) {
                    $string .= ' and ' . convert_number_to_words($remainder);
                }
                break;
            default:
                $string = "out of ability";
        }
        return $string;
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $number = $_POST['number'];
        if ($number < 0 || !is_numeric($number)) {
            echo '<br>';
            echo 'Wrong number';
        } else {
            echo '<br>';
            echo $number . ': ' . ucfirst(convert_number_to_words($number)); //ucfirst(str): Viết hoa chữ cái đầu tiên trong 1 chuỗi
        }
    }
?>