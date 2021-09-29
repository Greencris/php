<!-- 
BÀI 2: Tạo một số nguyên dương ngẫu nhiên có giá trị trong khoảng [1,10]. 
In ra bảng cửu chương tương ứng với giá trị đó.  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BẢNG CỬU CHƯƠNG</title>
</head>

<body>
            <?php
            $n = rand(1, 10);
            echo ("<b>Bảng cửu chương $n là:</b> <br>");
            echo "</td>";
            for ($i = 1; $i < 10; $i++) 
            {
                if ($i == $n) {

                    for ($j = 1; $j <= 10; $j++) {
                        echo "$i x $j = " . ($i * $j);
                        echo "<br>";
                    }
                    echo "</td>";
                }
            }
            ?>
</body>

</html>