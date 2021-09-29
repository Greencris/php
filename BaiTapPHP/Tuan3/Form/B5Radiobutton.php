<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<!--  http://localhost:8080/BaiTapPHP/Tuan3/Form/B5Radiobutton.php --> 
<body>
    <form action="B5Radiobutton.php" name="myform" method="post">
        <input type="radio" name="radGT" value="Nam" <?php if (isset($_POST['radGT']) && $_POST['radGT'] == 'Nam') echo 'checked="checked"'; ?> checked /> Nam<br>
        <input type="radio" name="radGT" value="Nu" <?php if (isset($_POST['radGT']) && $_POST['radGT'] == 'Nu') echo 'checked="checked"'; ?> />
        N&#7919;<br>

        <input type="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['radGT'])) {
        echo "Gioi tinh : " . $_POST['radGT'];
    }
    ?>
</body>

</html>