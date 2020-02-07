<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Calculator</title>
</head>
<body>
<form action="calculator.view.php" method='POST'>
        <fieldset>
            <legend>Simple Calculator</legend>
                <table>
                    <tr><td>First Operand:</td><td><input type="number" name='number1' placeholder='0'></td></tr>
                    <tr>
                        <td>Operator:</td>
                        <td><select name="select">
                        <option value="addition">Addition</option>
                        <option value="subtract">Subtract</option>
                        <option value="multiply">Multiply</option>
                        <option value="share">Share</option>
                        </select></td>
                    </tr>
                    <tr><td>Second Operand:</td><td><input type="number" name='number2' placeholder='0'></td></tr>
                    <tr><td>
                        <input type="submit" value="Convert" name='convert'>
                    </td></tr>
                </table>
        </fieldset>
    </form> 
</body>
</html>
