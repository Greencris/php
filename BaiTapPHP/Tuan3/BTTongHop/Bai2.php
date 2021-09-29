<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THANH TOÁN TIỀN ĐIỆN</title>
    <link rel="stylesheet" href="./css/Bai1.css">
</head>

<body>
    <?php
    if (isset($_POST['csc']))
        $csc = trim($_POST['csc']);
    else $csc = 0;
    if (isset($_POST['csm']))
        $csm = trim($_POST['csm']);
    else $csm = 0;
    if (isset($_POST['dg']))
    $dg = trim($_POST['dg']);
else $dg = 20000;
    if (isset($_POST['tinh']))
        if (is_numeric($csc) && is_numeric($csm) && ($csm>$csc))
            $thanhtoan = ($csm - $csc) * $dg;
        else {
            echo '<script language="javascript">';
            echo 'alert("Vui lòng nhập lại!")';
            echo '</script>';
            $thanhtoan = "";
        }
    else $thanhtoan = 0;
    ?>
    <div class="form">
    <div class="container">
        <form class="signup" action="" method="post">
            <div class="header">
                <h3>THANH TOÁN TIỀN ĐIỆN</h3>
            </div>
            <div class="inputs">
                <table align="center">
                    <tr>
                        <td align="left">Tên chủ hộ:</td>
                        <td><input type="text" name="name" placeholder="Nhập tên" required="" /></td>
                    </tr>
                    <tr>
                        <td align="left">Chỉ số cũ:</td>
                        <td><input type="text" name="csc" placeholder="0" required="" /></td>
                        <td><label>(Kw)</label></td>
                    </tr>
                    <tr>
                        <td align="left">Chỉ số mới:</td>
                        <td><input type="text" name="csm" placeholder="0" required="" /></td>
                        <td><label>(Kw)</label></td>
                    </tr>
                    <tr>
                        <td align="left">Đơn giá:</td>
                        <td><input type="text" name="dg" value="<?php echo $dg; ?> "  /></td>
                        <td><label>VNĐ</label></td>
                    </tr>
                    <tr>
                        <td align="left">Số tiền thanh toán:</td>
                        <td><input type="text" name="thanhtoan" disabled="disabled" value="<?php echo $thanhtoan; ?> " /></td>
                        <td><label>VNĐ</label></td>
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