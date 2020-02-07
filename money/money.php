<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Convert Money</title>
</head>
<body>
    <h2 style='color:red;'>Convert Money</h2>
    <form action="money.view.php" method='POST'>
        <fieldset>
            <legend>Currency conversion</legend>
                <table>
                    <tr><td>Input value money:</td><td><input type="number" name='money' placeholder='$'></td></tr>
                    <tr>
                        <td>Select option:</td>
                        <td><select name="select">
                        <option value="USD">USD->VNĐ</option>
                        <option value="VND">VNĐ->USD</option>
                        </select></td>
                    </tr>
                    <tr><td></td><td>
                        <input type="submit" value="Convert" name='convert'>
                    </td></tr>
                </table>
        </fieldset>
    </form>
    
</body>
</html>