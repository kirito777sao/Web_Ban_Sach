<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
include("includes/conn.php");

$madm = $_SESSION['addindex'];
$check_table_sql = "SHOW TABLES LIKE 'book$madm'";
$check_table_result = $conn->query($check_table_sql);

if ($check_table_result->num_rows > 0) {
    $sql = "SELECT COUNT(*) AS total FROM book$_SESSION[addindex]";
    $rowCount = $conn->query($sql)->fetch_assoc();

    $numberRecordPerPage = 4;
    $totalRecord = $rowCount['total']; // Thay 'COUNT(*)' bằng 'total'
    $numberPage = ceil($totalRecord / $numberRecordPerPage);
    $curPage = isset($_GET["page"]) ? $_GET["page"] : 1;
    $startRecord = ($curPage - 1) * $numberRecordPerPage;

    $sql = "SELECT * FROM book" . $madm . " LIMIT $startRecord,$numberRecordPerPage";
    $result = $conn->query($sql);


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class=pro>";
        echo "<h3>$row[title]</h3>";
        echo "<img src='uploads/$row[image]' width='100px' height='100px' border=0>"; // Đường dẫn ảnh đã sửa
        echo "Tác giả: $row[author] - Giá bán: <font color=red><b>" . number_format($row['price'], 3) . "</b></font> VNĐ";
        echo "<p align=left><font size=4><a href=chitiet.php?item=$row[id]>Chi tiết...</a></font></p>";
        echo "<p align=right><font size=4><a href=addcart.php?item=$row[id]><img src=Images/btn_buy.gif width=50px height=20 border=0 align=left/></a></font></p>";
        echo "</div>";
    }
}

echo "<p align=center><b>Page</b>: ";
    for ($k = 1; $k <= $numberPage; $k++) :
        echo '<a href="index.php?page=' . $k . '">' . $k . '</a>  ';
    endfor;
} else {
    echo "<p>Danh mục này chưa có sách. <a href='capnhat_sach.php'>Thêm sách mới</a></p>";
}

$conn->close();
?>