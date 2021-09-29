<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SỔ XỐ KHÁNH HÒA</title>
</head>

<body>
    <?php
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    $time = date("d-m-Y");
    echo "<h2 align='center'> Kết quả xổ số kiến thiết tỉnh Khánh Hòa ngày $time</h2>";
    ?>
    <table>
        <tr>
            <td>Giải 8</td>
            <td style='color:red'>
                <?php
                $ngaunhien = rand(0, 99);
                if ($ngaunhien < 10)
                   {
                    echo "0" . $ngaunhien;
                   }
                else
                  {
                    echo $ngaunhien;
                  }
                ?>
            </td>
        </tr>
        <tr>
            <td>Giải 7</td>
            <td>
                <?php
                $ngaunhien = rand(0, 999);
                if ($ngaunhien < 10)
                  {
                    echo "00" . $ngaunhien;
                  }
                else if ($ngaunhien < 100)
                   {
                    echo "0" . $ngaunhien;
                   }
                else
                   {
                    echo $ngaunhien;
                   }
                ?>
            </td>
        </tr>
        <tr>
            <td>Giải 6</td>
            <td>
                <?php
                for ($i = 0; $i < 3; $i++) {
                    $ngaunhien = rand(0, 9999);
                    if ($ngaunhien < 10){
                        echo "000" . $ngaunhien;
                    }
                    else if ($ngaunhien < 100)
                       {
                        echo "---";
                        echo "00" . $ngaunhien;
                        
                       }
                    else if ($ngaunhien < 1000)
                       {
                        echo "---";
                        echo "0" . $ngaunhien;
                      
                       }
                    else
                   {
                    echo "---";
                    echo $ngaunhien;
                }
                   }

                ?>
            </td>
        </tr>
        <tr>
            <td>Giải 5</td>
            <td>
                <?php
                $ngaunhien = rand(0, 9999);
                if ($ngaunhien < 10)
                   {
                    echo "000" . $ngaunhien;
                   }
                else if ($ngaunhien < 100)
                    {
                        echo "00" . $ngaunhien;
                    }
                else if ($ngaunhien < 1000)
                   {
                    echo "0" . $ngaunhien;
                   }
                else
                   {
                    echo $ngaunhien;
                   }
                ?>
            </td>
        </tr>
        <tr>
            <td>Giải 4</td>
            <td>
                <?php
                for ($i = 0; $i < 7; $i++) {
                    $ngaunhien = rand(0, 99999);
                    if ($ngaunhien < 10)
                       {
                        echo "0000" . $ngaunhien;
                       
                       }
                    else if ($ngaunhien < 100)
                       {
                        echo "---";
                        echo "000" . $ngaunhien;
                        
                       }
                    else if ($ngaunhien < 1000)
                       {
                        echo "---";
                        echo "00" . $ngaunhien;
                       
                       }
                    else if ($ngaunhien < 10000)
                       {
                        echo "---";
                        echo "0" . $ngaunhien;
                      
                       }
                    else
                       {
                        echo "---";
                        echo $ngaunhien;
                       }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Giải 3</td>
            <td>
                <?php
                for ($i = 0; $i < 2; $i++) {
                    $ngaunhien = rand(0, 99999);
                    if ($ngaunhien < 10)
                       {
                       
                        echo "0000" . $ngaunhien;
                       
                       }
                    else if ($ngaunhien < 100)
                       {
                        echo "---";
                        echo "000" . $ngaunhien;
                       
                       }
                    else if ($ngaunhien < 1000)
                      {
                        echo "---";
                        echo "00" . $ngaunhien;
                       
                      }
                    else if ($ngaunhien < 10000)
                    {
                        echo "---";
                        echo "0" . $ngaunhien;
                        
                    }
                    else
                       {
                        echo "---";
                        echo $ngaunhien;
                       }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Giải 2</td>
            <td>
                <?php
                $ngaunhien = rand(0, 99999);
                if ($ngaunhien < 10)
                    {
                        echo "0000" . $ngaunhien;
                    }
                else if ($ngaunhien < 100)
                   {
                    echo "000" . $ngaunhien;
                   }
                else if ($ngaunhien < 1000)
                   {
                    echo "00" . $ngaunhien;
                   }
                else if ($ngaunhien < 10000)
                  {
                    echo "0" . $ngaunhien;
                  }
                else
                    {
                        echo $ngaunhien;
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td>Giải 1</td>
            <td>
                <?php
                $ngaunhien = rand(0, 99999);
                if ($ngaunhien < 10)
                  {
                    echo "0000" . $ngaunhien;
                  }
                else if ($ngaunhien < 100)
                   {
                    echo "000" . $ngaunhien;
                   }
                else if ($ngaunhien < 1000)
                   {
                    echo "00" . $ngaunhien;
                   }
                else if ($ngaunhien < 10000)
                   {
                    echo "0" . $ngaunhien;
                   }
                else
                   {
                    echo $ngaunhien;
                   }
                ?>
            </td>
        </tr>
        <tr>
            <td>Giải ĐB</td>
            <td  style='color:red'>
                <?php
                $ngaunhien = rand(0, 99999);
                if ($ngaunhien < 10)
                   {
                    echo "0000" . $ngaunhien;
                   }
                else if ($ngaunhien < 100)
                  {
                    echo "000" . $ngaunhien;
                  }
                else if ($ngaunhien < 1000)
                   {
                    echo "00" . $ngaunhien;
                   }
                else if ($ngaunhien < 10000)
                   {
                    echo "0" . $ngaunhien;
                   }
                else
                   {
                    echo $ngaunhien;
                   }
                ?>
            </td>
        </tr>

    </table>
</body>







</html>