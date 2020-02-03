<html>
    <head>
        <title>Current server time</title>
    </head>
    <body>
        <h1> Current Server Time is: 
        <?php
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            echo date(" H:i:s Y-m-d"); 
        ?>
        </h1>
    </body>
</html>