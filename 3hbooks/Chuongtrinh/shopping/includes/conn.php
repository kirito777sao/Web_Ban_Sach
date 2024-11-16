<?php
    $mysqlHost = "localhost";
    $mysqlUser = "root";
    $mysqlPass = "";
    $mysqlDB   = "qlbooks";

    $conn = new mysqli($mysqlHost, $mysqlUser, $mysqlPass, $mysqlDB);

    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    }

    $conn->set_charset("utf8");
?>