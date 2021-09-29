<!-- 
    Hiển thị ma trận có kích thước mxn, với m và n 
    là 2 số nguyên dương được tạo ngẫu nhiên trong khoảng [2,5], 
    và các phần tử trong ma trận có giá trị thuộc [-100, 100].
 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MA TRẬN</title>
</head>

<body>
    <?php
    $m=rand(2,5);
    $n=rand(2,5);
    $array = [];
    for ($a = 0; $a < $m; $a++) {
        for ($b = 0; $b < $n; $b++) {
            $array[$a][$b] = rand(-100, 100);
        }
    }
    echo "<br>Số dòng: $m";
    echo "<br>Số cột: $n";
    echo "<br>Ma trận là: <br>";
    for ($a = 0; $a < $m; $a++) {
        for ($b = 0; $b < $n; $b++) {
            echo $array[$a][$b]. " ";
        }
       echo "<br>"; 
    }
    
    ?>
</body>

</html>