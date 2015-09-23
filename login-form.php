<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<?php
// kiểm tra việc đăng nhập có chính xác không
//if (!isset($_POST["name"])) {
//   echo "bạn chưa nhập user";
//   die();
//}
$login_user = $login_password = "";

if (isset($_POST["login"])) {
    if(empty($_POST["name"])){
        echo "bạn chưa nhập user";
        die();
    }
    if (empty($_POST["PassWord"])) {
        echo "bạn chưa nhập password";
        die();
    }
}

//if (!isset($_POST["PassWord"])) {
//    echo "bạn chua nhập password";
//    die();
//}
$login_user = $_POST["name"];
$login_password = $_POST["PassWord"];
if ($login_user && $login_password) {
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
    $sql = "select*from user where user ='$login_user'and password ='$login_password'";
    $query = $conn->query($sql);
    if ($query->num_rows == 0) {
        echo "tài khoản hoặc mật khẩu không chính xác,vui lòng thử lại";
    } else {
        echo "đăng nhập thành công";
    }
}
?>

