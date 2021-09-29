<!-- 
    http://localhost:8080/BaiTapPHP/Tuan1/BTnangcao/Bai5.php
    Tạo ngẫu nhiên 1 số nguyên có giá trị trong khoảng [-100,100].
    Kiểm tra số nguyên này có phải là số nguyên tố. 
    Nếu là số nguyên tố thì đưa vào lưu trữ trong tập tin có tên là soNT.txt.
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KIỂM TRA SỐ NGUYÊN TỐ</title>
    <?php
    $n = rand(-100, 100);
    function soNT($n)
    {
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0){
                return false;
            }
        }
        return true;
    }
    $fp=@fopen('soNT.txt',"a+");
    if(!$fp){
        echo "Mở file không thành công";
    }
    else 
        if(soNT($n)){
            echo "$n là số nguyên tố";
            fwrite($fp,"\t".$n);
        }
        fclose($fp);
        
    ?>
</head>

<body>

</body>

</html>