<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input data</title>
</head>
<!--  http://localhost:8080/BaiTapPHP/Tuan3/Form/B2Names.php --> 
<body>
    <form action="B2Names.php" name="myform" method="post">
        First Name: <input type="text" name="Name[]" size=20 value="<?php if (isset($_POST['Name'])) echo $_POST['Name'][0]; ?>" /><br>
        Last Name: <input type="text" name="Name[]" size=20 value="<?php if (isset($_POST['Name'])) echo $_POST['Name'][1]; ?>" /><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['Name'])) {
        echo "Chào bạn " . $_POST['Name'][0] . " " . $_POST['Name'][1];
    }
    ?>
</body>

</html>