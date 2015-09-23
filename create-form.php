<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<?php
//đưa thông tin vào csdl
$User = $Password = $PasswordConfirm = $Email = "";

//if (!isset($_POST["user"])) {
//    echo "mời nhập đầy đủ thông tin";
//    die();
//} else {
//    if (!preg_match("/^[a-zA-Z0-9&@#\/%=~_|]{3,}*$/", $_POST["user"])) {// kiểm tra user có kí tự trong khoảng a-z,A-Z
//        //$Usererr = "nhap user không chính xac ";
//        echo "nhập user không chính xác";
//        die();
//    }
//}
//if (!isset($_POST["password"])) {
//    echo "mời nhập đầy đủ thông tin";
//    die();
//} else {
////    if (!preg_match("/^[a-zA-Z0-9&@#\/%=~_|]{6,}$/", $_POST["password"])) {// kiểm tra password trong khoảng kí tự a-z,A-z,0-9 và lớn hơn 6 kì tự
////        // $Passworderr = "mời nhập lại password,password phải lớn hơn 6 kí tự trở lên";
////        echo "mời nhập lại password,password phải lớn hơn 6 kí tự trở lên";
////        die();
////    }
//}
//if (!isset($_POST["passwordconfirm"])) {
//    echo" mời nhập đầy đủ thông tin";
//    die();
//} else {
//    if ($_POST["password"] != $_POST["passwordconfirm"]) {
//        //$Passworderr = "password không chính xác";
//        echo "password không chính xác";
//        die();
//    }
//}
//if (!isset($_POST["email"])) {
//    echo "mời nhập đầy đủ thông tin";
//    die();
//} else {
//    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
//        //$Emailerr// = "mời nhập lại Email";
//        echo "mời nhập lại Email";
//        die();
//    }
//}
if (isset($_POST["create"])) {
    if (empty($_POST["user"])) {
        echo "ban chua nhap user";
        die();
    } else {
        if (!preg_match("/^[a-zA-Z0-9&@#\/%=~_|]*$/", $_POST["user"])) {// kiểm tra user có kí tự trong khoảng a-z,A-Z
            //$Usererr = "nhap user không chính xac ";
            echo "moi nhap lai user";
            die();
        }
    }
    if (empty($_POST["password"])) {
        echo "ban chua nhap password";
        die();
    }
    if (empty($_POST["passwordconfirm"])) {
        echo "moi ban nhap lai password";
        die();
    } else {
        if ($_POST["password"] != $_POST["passwordconfirm"]) {
            //$Passworderr = "password không chính xác";
            echo "password không chính xác, moi nhap lai password";
            die();
        }
    }
    if (empty($_POST["email"])) {
        echo "ban chua nhap email";
        die();
    } else {
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            //$Emailerr// = "mời nhập lại Email";
            echo "mời nhập lại Email";
            die();
        }
    }
}


$User = $_POST["user"];
$Password = $_POST["password"];
$Email = $_POST["email"];
if ($User && $Password && $Email) {
    // mở kết nối mysql
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "giang";
// ket noi
    $conn = new mysqli($servername, $username, $password, $dbname);
// check ket noi
    if ($conn->connect_error) {
        die("connect failed" . $conn->connect_error);
    }
    $sql = "select * from user where user='$User' or email='$Email'";
    $result = $conn->query($sql);
    if ($result->num_rows>= 1) {
        echo "tài khoản đã tồn tài,vui lòng thử lại";
        die();
    } else {
        $sql = "insert into user(id,user,password,email)value('','$User','$Password','$Email')";
        if ($conn->query($sql)) {
            echo "chúc mừng đăng kí thành công";
        } else {
            echo "đăng kí thất bại, xin kiểm tra lại thông tin" . $conn->error;
        }
    }
}    