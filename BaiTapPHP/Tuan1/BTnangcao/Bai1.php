<!-- 
BÀI 1: Tạo ngẫu nhiên 1 số nguyên có giá trị trong khoảng [10,1000]. Sau đó thực hiện các yêu cầu sau:

a. Hiển thị các số nguyên tố nhỏ hơn số nguyên được tạo.

b. Cho biết số nguyên này có bao nhiêu chữ số.

c. Cho biết chữ số lớn nhất trong số nguyên này. -->
<?php

$so = rand(10, 1000);
    // a. Hiển thị các số nguyên tố nhỏ hơn số nguyên được tạo.
function soNT($so)
{
    // so nguyen n < 2 khong phai la so nguyen to
    if ($so < 2) {
        return false;
    }
    // check so nguyen to khi n >= 2
    $squareRoot = sqrt($so);
    for ($i = 2; $i <= $squareRoot; $i++) {
        if ($so % $i == 0) {
            return false;
        }
    }
    return true;
}
    // b. Cho biết số nguyên này có bao nhiêu chữ số.
function lenghtNumber($so){
   $dem=0;
   while($so>10){
        $so/=10;
        ++$dem;
   }
   return $kq=$dem+1;
}

    //c. Cho biết chữ số lớn nhất trong số nguyên này.
    function numberMax($so){
        if($so==0)
            return 0;
        $so = abs($so);
        $max = 0;
        while($so>0){
            $temp = $so % 10;
            $so/=10;
            if($temp > $max)
                $max = $temp;
        }
        return $max;
    }
    echo ("<b>Tất cả các số nguyên tố nhỏ hơn $so là:</b> <br>");
    if ($so >= 2) {
        echo "2";
    }
    for ($i = 3; $i < $so; $i += 2) {
        if (soNT($i)) {
            echo (" " . $i);
        }
    }
    echo "<br>";
    echo "<b>Số nguyên này có</b> ".lenghtNumber($so)." <b>chữ số</b>";
    echo "<br>";
    echo "<b>Chữ số lớn nhất trong số nguyên dương này là:</b> ".numberMax($so);
?>