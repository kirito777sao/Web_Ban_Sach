<!DOCTYPE html>
<html>
<head>
<title>Quản lý hóa đơn</title>
<style>
body {
    font-family: sans-serif;
    background-color: #FFFFCC;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

th, td {
    text-align: left;
    padding: 8px;
    border: 1px solid #3333CC;
}

th {
    background-color: #FF99FF;
    font-weight: bold;
}

tr:nth-child(even) {
    background-color: #FFCCFF;
}

.container {
    width: 80%;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.button-container {
    text-align: center;
}

.button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.button:hover {
    background-color: #3e8e41;
}

form {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="number"],
select {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 10px;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-left: auto;
    margin-right: auto;
    display: block;
}

input[type="submit"]:hover {
    background-color: #3e8e41;
}

/* CSS cho phần thống kê doanh thu */
.statistic-table {
    width: 50%;
    margin: 20px auto;
    border-collapse: collapse;
}

.statistic-table th,
.statistic-table td {
    text-align: left;
    padding: 8px;
    border: 1px solid #3333CC;
}

.statistic-table th {
    background-color: #FF99FF;
    font-weight: bold;
}

.statistic-table tr:nth-child(even) {
    background-color: #FFCCFF;
}

.statistic-result {
    margin-top: 20px;
    font-weight: bold;
}
</style>
</head>
<body>
<div class="container">
<h1 style="font-family: 'Times New Roman', Times, serif; font-size: 50px; text-align: center;">Quản lý hóa đơn</h1>

<?php
header('Content-Type: text/html; charset=UTF-8');
require_once("includes/conn.php"); 

// Xử lý xóa hóa đơn
if(Empty($_GET['act'])) $_GET['act']='hehe';
if($_GET['act']) {
	$sql1="delete from hoadon where hoadon_id='$_GET[act]'";
	$conn->query($sql1); 
}

// Hiển thị danh sách hóa đơn
$sql="select * from hoadon";
$result = $conn->query($sql); 
$s= $result->num_rows; 
$numberRecordPerPage= 5;
$numberPage	= ceil($s / $numberRecordPerPage);
$curPage				= isset($_GET["page"])?$_GET["page"]:1;
$startRecord			= ($curPage-1)*$numberRecordPerPage;

$sql = "select * from hoadon LIMIT $startRecord,$numberRecordPerPage";
$query = $conn->query($sql); 

echo '<h2>Danh sách hóa đơn</h2>';
echo '<table border="1">';
echo '<tr>';
echo '<th>ID</th>';
echo '<th>Tên khách hàng</th>';
echo '<th>Mã sản phẩm</th>';
echo '<th>Tổng tiền</th>';
echo '<th>Địa chỉ</th>';
echo '<th>Thời gian mua</th>';
echo '<th>Xóa</th>';
echo '</tr>';

while($row = $query->fetch_assoc()) { 
    echo '<tr>';
    echo '<td>' . $row['hoadon_id'] . '</td>';
    echo '<td>' . $row['hoadon_khachhang'] . '</td>';
    echo '<td>' . $row['hoadon_sanpham'] . '</td>';
    echo '<td>' . number_format($row['hoadon_tongtien'],3) . "VNĐ" . '</td>';
    echo '<td>' . $row['diachi'] . '</td>';
    echo '<td>' . $row['ngaymua'] . '</td>';
    echo '<td>' . "<a href=hoadon.php?act=$row[hoadon_id]><b>Xóa</b></a>" . '</td>';
    echo '</tr>';
}

echo '</table>';
echo '<p align=center><b>Page:</b>';
for ($k=1; $k<=$numberPage; $k++):
    print '<a href="hoadon.php?page='.$k.'">'.$k.'</a>  ';
endfor;
echo '</p>';

// Form nhập liệu cho thống kê theo tháng
echo '<h2>Thống kê doanh thu theo tháng</h2>';
echo '<form method="post" action="hoadon.php">';
echo '<label for="month">Tháng:</label>';
echo '<input type="number" id="month" name="month" min="1" max="12" required>';
echo '<label for="year">Năm:</label>';
echo '<input type="number" id="year" name="year" min="2000" required>';
echo '<input type="submit" name="action" value="Thống Kê Theo Tháng">';
echo '</form>';

// Form nhập liệu cho thống kê theo quý
echo '<h2>Thống kê doanh thu theo quý</h2>';
echo '<form method="post" action="hoadon.php">';
echo '<label for="year">Năm:</label>';
echo '<input type="number" id="year" name="year" min="2000" required>';
echo '<label for="quarter">Quý:</label>';
echo '<select id="quarter" name="quarter">';
echo '<option value="1">Quý 1</option>';
echo '<option value="2">Quý 2</option>';
echo '<option value="3">Quý 3</option>';
echo '<option value="4">Quý 4</option>';
echo '</select>';
echo '<input type="submit" name="action" value="Thống Kê Theo Quý">';
echo '</form>';

// Xử lý thống kê
if (isset($_POST['action'])) {
    if ($_POST['action'] == 'Thống Kê Theo Tháng') {
        $month = $_POST['month'];
        $year = $_POST['year'];

        // Kiểm tra giá trị
        if (empty($month) || !is_numeric($month) || $month < 1 || $month > 12) {
            echo "Vui lòng nhập tháng hợp lệ (1-12)";
            exit;
        }

        if (empty($year) || !is_numeric($year)) {
            echo "Vui lòng nhập năm hợp lệ";
            exit;
        }

        // Thực hiện truy vấn
        $sql = "SELECT hoadon_tongtien FROM hoadon WHERE MONTH(ngaymua) = $month AND YEAR(ngaymua) = $year";
        $result = $conn->query($sql);
        $tongtien = 0;
        while ($row = $result->fetch_assoc()) {
            $tongtien += $row['hoadon_tongtien'];
        }

        // Hiển thị kết quả trong bảng
        echo '<div class="statistic-result">';
        echo '<table class="statistic-table">';
        echo '<tr><th>Tổng doanh thu</th><th>Số tiền</th></tr>';
        echo '<tr><td>Tháng ' . $month . '/' . $year . ':</td><td>' . number_format($tongtien, 3) . ' VND</td></tr>';
        echo '</table>';
        echo '</div>';
    } elseif ($_POST['action'] == 'Thống Kê Theo Quý') {
        $year = $_POST['year'];
        $quarter = $_POST['quarter'];

        // Kiểm tra giá trị
        if (empty($year) || !is_numeric($year)) {
            echo "Vui lòng nhập năm hợp lệ";
            exit;
        }

        if (empty($quarter) || !is_numeric($quarter) || $quarter < 1 || $quarter > 4) {
            echo "Vui lòng chọn quý hợp lệ (1-4)";
            exit;
        }

        // Xác định tháng đầu và tháng cuối của quý
        $firstMonth = ($quarter - 1) * 3 + 1;
        $lastMonth = $firstMonth + 2;

        // Thực hiện truy vấn
        $sql = "SELECT hoadon_tongtien FROM hoadon WHERE MONTH(ngaymua) BETWEEN $firstMonth AND $lastMonth AND YEAR(ngaymua) = $year";
        $result = $conn->query($sql);
        $tongtien = 0;
        while ($row = $result->fetch_assoc()) {
            $tongtien += $row['hoadon_tongtien'];
        }

        // Hiển thị kết quả trong bảng
        echo '<div class="statistic-result">';
        echo '<table class="statistic-table">';
        echo '<tr><th>Tổng doanh thu</th><th>Số tiền</th></tr>';
        echo '<tr><td>Quý ' . $quarter . ' năm ' . $year . ':</td><td>' . number_format($tongtien, 3) . ' VND</td></tr>';
        echo '</table>';
        echo '</div>';
    }
}

echo '<p align="center"><a href=index.php><img src=Images/home.jpeg width=60px height=40 border=0 align=center/></a></p>';
?>
</div>
</body>
</html>