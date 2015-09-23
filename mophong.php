<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        $nu1 = "";
        $nu2 = "";
        $phep = "";
        $ketqua = "";
        $kiemtra = TRUE;
        if (isset($_POST["sothu1"]) && isset($_POST["sothu2"]) && isset($_POST["pheptoan"])) {
            $nu1 = $_POST["sothu1"];
            $nu2 = $_POST["sothu2"];
            $phep = $_POST["pheptoan"];
            if (is_numeric($nu1) && is_numeric($nu2)) {
                switch ($phep) {
                    case "+":
                        $ketqua = $nu1 + $nu2;
                        break;
                    case "*":
                        $ketqua = $nu1 * $nu2;
                        break;
                    case "-":
                        $ketqua = $nu1 - $nu2;
                        break;
                    case "/":
                        $ketqua = $nu1 / $nu2;
                        break;
                    default :
                        $ketqua = "khong thuc hien duoc";
                        $kiemtra = FALSE;
                        break;
                }
            } else {
                $ketqua = "khong thuc hien duoc";
                $kiemtra = FALSE;
            }
        }
        ?>
        <form action="#" name="mophong" method="post">
            Số thứ nhất <br>   
            <input type="text"  name="sothu1" value="<?php echo $nu1; ?>" /><br/>
            phép toán <br/>
            <input type="text" name="pheptoan" value="<?php echo $phep; ?>" ><br/>
            Số thứ 2  <br/>
            <input type="text" name="sothu2" value="<?php echo $nu2; ?>" /><br/>
            <button type="submit" style="cursor: pointer">ket qua</button> <br/>
            
        </form>
        <p>
            <?php
            if ($kiemtra == TRUE) {
                echo "ket qua " . $nu1 . " " . $phep . " " . $nu2 . " = " . $ketqua;
            } else {
                echo $ketqua;
            }
            ?>
        </p>


    </body>
</html>

