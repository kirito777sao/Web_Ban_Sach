<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .pro {
            border: 1px solid #ddd;
            margin-bottom: 15px;
            padding: 15px;
            border-radius: 5px;
        }

        .pro h3 {
            margin-top: 0;
        }

        .pro p {
            margin: 10px 0;
        }

        .pro input[type="text"] {
            width: 50px;
            padding: 5px;
            border: 1px solid #ddd;
            border-radius: 3px;
        }

        .pro a {
            color: #007bff;
            text-decoration: none;
        }

        .total {
            text-align: right;
            font-weight: bold;
            margin-top: 20px;
        }

        .actions {
            text-align: center;
            margin-top: 20px;
        }
        .actions a{
            display: inline-block;
            margin: 0 10px;
        }
        .pagination {
            text-align: center;
            margin-top: 20px;
        }

        .pagination a {
            display: inline-block;
            padding: 8px 12px;
            margin: 0 5px;
            background-color: #f0f0f0;
            color: #333;
            text-decoration: none;
            border-radius: 5px;

        }
        form p{
            text-align: right;
        }
        form input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }



    </style>
</head>
<body>
<?php
session_start();
include("includes/conn.php");
error_reporting(E_ALL ^ E_NOTICE);

if (isset($_POST['submit'])) {
    foreach ($_POST['qty'] as $key => $value) {
        if (($value == 0) and (is_numeric($value))) {
            unset($_SESSION['cart'][$key]);
        } elseif (($value > 0) and (is_numeric($value))) {
            $_SESSION['cart'][$key] = $value;
        }
    }
    header("location:cart.php");
    exit();
}
?>

<div class="container">
    <h1>GIỎ HÀNG</h1>

    <?php
    $ok = 1;
    $s = 0;
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $k => $v) {
            if (isset($k)) {
                $ok = 2;
                $s++;
            }
        }
    }
    if ($ok == 2) {
        echo "<form action=cart.php method=post>";
        foreach ($_SESSION['cart'] as $key => $value) {
            $item[] = $key;
        }
        $str = implode(",", $item);
        $total = 0;
        $numberRecordPerPage = 3;
        $numberPage = ceil($s / $numberRecordPerPage);

        $curPage = isset($_GET["page"]) ? $_GET["page"] : 1;
        $startRecord = ($curPage - 1) * $numberRecordPerPage;
        for ($i = 1; $i <= 16; $i++) {
            $sql = "select * from book$i where id in ($str)";
            $result = $conn->query($sql);

            while ($row = $result->fetch_assoc()) {
                $sql2 = "INSERT INTO search (id,title,author,price) VALUES ('$row[id]','$row[title]','$row[author]','$row[price]')";
                $conn->query($sql2);
            }
        }

        $mysql = $conn->query("SELECT * FROM search");
        while ($row = $mysql->fetch_assoc()) {
            $total += $_SESSION['cart'][$row['id']] * $row['price'];
        }

        $mysql = $conn->query("SELECT * FROM search LIMIT $startRecord,$numberRecordPerPage");
        while ($row = $mysql->fetch_assoc()) {
            echo "<div class='pro'>";
            echo "<h3>$row[title]</h3>";
            echo "Tác giả: $row[author] - Giá bán: <span style='color:red; font-weight:bold;'>" . number_format($row['price'], 3) . " VNĐ</span>";
            echo "<p><label for='qty[{$row['id']}]'>Số lượng:</label><input type='text' name='qty[{$row['id']}]' id='qty[{$row['id']}]' size='5' value='{$_SESSION['cart'][$row['id']]}'> - 
                      <a href='delcart.php?productid={$row['id']}'>Xóa</a></p>"; // Sử dụng thẻ <label> cho input
            echo "<p>Giá tiền cho món hàng: <span style='color:red; font-weight:bold;'>" . number_format($_SESSION['cart'][$row['id']] * $row['price'], 3) . " VND</span></p>";
            echo "</div>";

            $conn->query("DELETE from search");
        }


        echo "<div class='total'>Tổng tiền tất cả hàng: <span style='color:red; font-weight:bold;'>" . number_format($total, 3) . " VND</span></div>";
        echo "<p><input type='submit' name='submit' value='Cập nhật giỏ hàng'></p>";
        echo "<div class='actions'>
                <a href='index.php'>Mua sách tiếp</a> - 
                <a href='?act=thanhtoan&ok=1'>Thanh toán</a> - 
                <a href='delcart.php?productid=0'>Xóa bỏ giỏ hàng</a>
              </div>";

        if (!isset($_GET['ok'])) {
            $_GET['ok'] = 'undefine';
        }
        if ($_GET['ok'] == "1") {

            $sql = "INSERT INTO `hoadon` (`hoadon_sanpham`,`hoadon_khachhang`,`hoadon_tongtien`,`diachi`) VALUES ('$str','$_SESSION[tenkh]','$total','$_SESSION[dc]')";
            $result = $conn->query($sql);
            if ($result) {
                $temp = "Hóa đơn của bạn đã đc lưu trong CSDL! Hàng sẽ được chuyển đến địa chỉ bạn đã đăng ký";
                echo '
                    <script type="text/javascript">
                    function hello(temp){
                        alert(temp);
                        window.location="index.php";
                    }
                    hello("' . $temp . '");
                    </script>
                    ';
            }
        }
        echo "<div class='pagination'><b>Page:</b>";
        for ($k = 1; $k <= $numberPage; $k++) :
            print '<a href="cart.php?page=' . $k . '">' . $k . '</a>  ';
        endfor;
        echo "</div>";

        echo "</form>"; // Đóng thẻ form 
    } else {
        echo "<div class=pro>";
        echo '<p align=center><b>Bạn không có món hàng nào trong giỏ hàng</b><br /><a href=index.php><b>Quay về trang chủ</b></a></p>';
        echo "</div>";
    }

    $conn->close();
    ?>
</div>

</body>
</html>