<!DOCTYPE html>
<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="dictionary.css">
    <head>  
    </head>
    <body>
        <br/>
        <h3>Từ Điển Anh - Việt</h3>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
          <input type="text" name="search" placeholder="Nhập từ cần tìm"/>
          <input type = "submit" id = "submit" value = "Tìm"/>
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $searchword = $_POST["search"];
                $flag = 0;
                $dictionary = array(
                        "hello"=>"xin chào",
                        "how"=>"thế nào",
                        "book"=>"quyển vở",
                        "computer"=>"máy tính",
                        "University"=>"Đại học"
                    );
                foreach($dictionary as $word => $description) {
                    if($word == $searchword){
                        echo "Tiếng Anh: " . $word . " <br/>
                        Tiếng Việt: " . $description;
                        echo "<br/>";
                        $flag = 1;
                    }
                }

                if($flag == 0){
                    echo "Không tìm thấy từ cần tra.";
                }
            }
        ?>
    </body>
</html>