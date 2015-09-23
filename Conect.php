<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "giang";
// ket noi
$conn = new mysqli($servername, $username, $password, $dbname);
// kiem tra ket noi
if ($conn->connect_error) {
    echo "connect failed:" . $conn->connect_error;
}
$sql = "insert into sv(id,user,password) value('','tien',564)";

if ($conn->query($sql)) {

    echo "hoan thanh";
} else {
    echo "error" . $conn->error;
}



$conn->close();
?>