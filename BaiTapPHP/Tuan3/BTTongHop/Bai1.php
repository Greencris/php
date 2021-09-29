<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIỆN TÍCH HÌNH CHỮ NHẬT</title>
    <link rel="stylesheet" href="./css/Bai1.css">
</head>

<body>
    <?php
    if (isset($_POST['chieudai']))
        $chieudai = trim($_POST['chieudai']);
    else $chieudai = 0;
    if (isset($_POST['chieurong']))
        $chieurong = trim($_POST['chieurong']);
    else $chieurong = 0;
    if (isset($_POST['tinh'])) {
        if (is_numeric($chieudai) && is_numeric($chieurong)) {
            $dientich = $chieudai * $chieurong;
        } else {

            echo "<font color='red'>Vui lòng nhập vào số! </font>";
            $dientich = "";
        }
    } else {
        $dientich = 0;
    }
    ?>
    <div class="form">
        <div class="container">
            <form class="signup" action="" method="post">
                <div class="header">
                    <h3>DIỆN TÍCH HÌNH CHỮ NHẬT</h3>
                </div>
                <div class="inputs">
                    <table align="center">
                        <tr>
                            <td align="left">Chiều dài:</td>
                            <td><input type="text" name="chieudai" placeholder="0" required="" /></td>
                        </tr>
                        <tr>
                            <td align="left">Chiều rộng:</td>
                            <td><input type="text" name="chieurong" placeholder="0" required="" /></td>
                        </tr>
                        <tr>
                            <td align="left">Diện tích:</td>
                            <td><input type="text" name="dientich" disabled="disabled" value="<?php echo $dientich; ?> " /></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center"><input type="submit" value="Tính" name="tinh" /></td>
                        </tr>
                    </table>

                </div>
            </form>
        </div>
    </div>
</body>

</html>