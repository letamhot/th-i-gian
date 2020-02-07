<?php
function checkdive($a, $b){
    if($a == 0 && $b == 0 || $b == 0){
        throw new Exception('error');
    }
    return $a / $b;
}
extract($_POST);

if (isset($_POST['save'])) {
    $fn = $_POST['fn'];
    $ch = $_POST['ch'];
    $sn = $_POST['sn'];
    $res =null;
    if (isset($save)) {
        switch ($ch) {
            case 'addition':
                $res = $fn + $sn;
                break;
            case 'subtract':
                $res = $fn - $sn;
                break;
    
            case 'multiply':
                $res = $fn * $sn;
                break;
            case 'share':
                try{
                    $res = checkdive($fn, $sn);
                   }
                   catch(Exception $e)
                   {
                       echo $e->getMessage();
                   }
                break;
                break;
            default:
                return 'Wrong';
    
        }
        echo $res;
    }
} 
?>
