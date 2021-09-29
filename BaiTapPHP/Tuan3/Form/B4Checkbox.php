<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<!--  http://localhost:8080/BaiTapPHP/Tuan3/Form/B4Checkbox.php --> 
<body>
    <form method="post" action="B4Checkbox.php">
        <input type="checkbox" name="chk1" value="en" <?php if (isset($_POST['chk1']) && $_POST['chk1'] == 'en') echo 'checked';
                                                        else echo "" ?> />English <br>
        <input type="checkbox" name="chk2" value="vn" <?php if (isset($_POST['chk2']) && $_POST['chk2'] == 'vn') echo 'checked';
                                                        else echo "" ?> />Vietnam<br>

        <input type="submit" value="submit"><br>
    </form>

    <?php
    if (isset($_POST['chk1'])) echo "checkbox 1 : " . $_POST['chk1'] . "<br>";
    if (isset($_POST['chk2'])) echo "checkbox 2 : " . $_POST['chk2'];

    ?>
</body>

</html>