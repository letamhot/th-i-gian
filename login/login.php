<!DOCTYPE HTML>
<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="login.css">
    <body>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $username = $_POST["username"];
                $password = trim($_POST["password"]);

            if ($username === "admin" && $password === "admin") {
                echo "<h2>Welcome <span style='color:red'>" . $username . "</span> to website</h2>";
            } else {
                    echo "<h2><span style='color:red'>Login Error</span></h2>";
                }
            }
        ?>
        <form method="post" style="text-align: center;">
            <div class="login">
                <h2>Login</h2>
                <input type="text" name="username" size="30"  placeholder="username" />
                <input type="password" name="password" size="30" placeholder="password" />
                <input type="submit" value="Sign in"/>
            </div>
        </form>
    </body>
</html>