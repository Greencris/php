<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BẢNG CỬU CHƯƠNG 1 ĐẾN 10</title>
</head>

<body>
    <h1 style="text-align: center;">BẢNG CỬU CHƯƠNG 1 ĐẾN 10</h1>
    <table border="1px" bgcolor="LemonChiffon" align="center">
        <tr>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<td>";
                for ($j = 1; $j <= 10; $j++) {
                    echo "$i x $j = " . ($i * $j);
                    echo "<br>";
                }
                echo "</td>";
            }
            ?>
        </tr>
    </table>
</body>

</html>