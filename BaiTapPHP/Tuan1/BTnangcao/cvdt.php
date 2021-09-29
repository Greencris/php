<?php
$a = rand(1,4);
$b = rand(10,100);
Define('pi',3.14);
switch($a)
    {
    case 1:
        $CV = $b*4;
        $DT = $b*$b;
        echo "chu vi và diện tích hình vuông cạnh bằng $b là $CV và $DT";
        break;
    case 2: 
        $CV = 2 * pi * $b;
        $DT = pi * $b *$b;
        echo "chu vi và diện tích hình tròn bán kính bằng $b là $CV và $DT";
        break;
    case 3:
        $CV = $b * 3;
        $DT = $b *$b *(sqrt(3)/4);
        echo "chu vi và diện tích tam giác đều cạnh bằng $b là $CV và $DT";
        break;
    case 4:
        $CV = $b * 2 + 2 * $a;
        $DT = $b *$a;
        echo "chu vi và diện tích hình chữ nhật có cạnh bằng $b và $a là $CV và $DT";
        break;
    default:
        echo "không tìm thấy";
    }
