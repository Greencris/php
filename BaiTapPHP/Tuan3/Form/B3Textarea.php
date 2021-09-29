<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input/Ouput data</title>
</head>
<!--  http://localhost:8080/BaiTapPHP/Tuan3/Form/B3Textarea.php --> 
<body>
    <form action="B3Textarea.php" name="myform" method="post">
        Your comment:
        <br>
        <textarea name="comment" rows="3" cols="40"><?php if (isset($_POST['comment'])) echo $_POST['comment']; ?></textarea>
        <br>
        <input type="submit" value="Submit">
    </form>
    <?php
    if (isset($_POST["comment"]))
        print "Your comment: " . $_POST["comment"];
    ?>
</body>

</html>