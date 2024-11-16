<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật sách</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 90%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f0f0f0;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .add-book-link {
            display: inline-block;
            margin-bottom: 15px;
            background-color: #007bff;
            color: white;
            padding: 8px 15px;
            text-decoration: none;
            border-radius: 5px;
            margin-right: 15px;
        }

        .add-book-link img {
            vertical-align: middle;
            margin-right: 5px;
        }

        .back-link {
            display: inline-block;
            margin-top: 20px;
            background-color: #007bff;
            color: white;
            padding: 8px 15px;
            text-decoration: none;
            border-radius: 5px;
        }

        .pagination {
            text-align: center;
            margin-top: 20px;
        }

        .pagination a {
            display: inline-block;
            padding: 8px 12px;
            margin: 0 5px;
            text-decoration: none;
            background-color: #f0f0f0;
            color: #333;
            border-radius: 5px;
        }
        .sidebar {
            width: 25%;
            float: left;
            margin-right: 20px;
        }
        .content {
            width: 70%;
            float: left;
        }
         .sidebar table {
            width: 100%; /* Chiều rộng của bảng danh mục */
         }
        .sidebar a{
            display: block; /* Hiển thị các liên kết danh mục thành từng dòng */
            margin-bottom: 5px; /* Khoảng cách giữa các liên kết */
            text-decoration: none; /* Loại bỏ gạch chân */
            color: #007bff; /* Màu xanh cho liên kết */
        }

    </style>
</head>
<body>
<div class="container">
    <div class="sidebar">
        <?php
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        error_reporting(E_ALL ^ E_NOTICE);
        require_once("includes/conn.php");
        $sql = "SELECT * FROM Danhmuc ORDER BY Madm";
        $result = $conn->query($sql);
        echo '<table>'; // Bỏ thuộc tính border
        while (list($maDM, $tenDM) = $result->fetch_row()) {
            echo '<tr><td><a href="addcapnhat.php?id=' . $maDM . '">' . $tenDM . '</a></td></tr>';
        }
        echo '</table>';
        ?>
    </div>

    <div class="content">
            <?php
            error_reporting(E_ALL ^ E_NOTICE);
            require_once("includes/conn.php");

            $madm = $_SESSION['addcapnhat'];
            $check_table_sql = "SHOW TABLES LIKE 'book$madm'";
            $check_table_result = $conn->query($check_table_sql);

            if ($check_table_result->num_rows > 0) {
                if (empty($_SESSION['addcapnhat'])) $_SESSION['addcapnhat'] = 1;
                if (empty($_GET['act'])) $_GET['act'] = 'hehe';
                if ($_GET['act']) {
                    $sql = "DELETE FROM book$_SESSION[addcapnhat] WHERE id='$_GET[act]'";
                    $conn->query($sql);
                }
        }
        echo "<a href=themsach.php class='add-book-link'><img src=Images/add.jpeg width=30px height=30 border=0 align=center/>Thêm sách</a>";
        echo "<a href=themdanhmuc.php class='add-book-link'><img src=Images/add.jpeg width=30px height=30 border=0 align=center/>Thêm danh mục</a>";


        if ($check_table_result->num_rows > 0) {
            $sql = "SELECT * FROM book$_SESSION[addcapnhat]";
            $result = $conn->query($sql);
            $s = $result->num_rows;


            $numberRecordPerPage = 5;
            $numberPage = ceil($s / $numberRecordPerPage);
            $curPage = isset($_GET["page"]) ? $_GET["page"] : 1;
            $startRecord = ($curPage - 1) * $numberRecordPerPage;

            $sql = "SELECT * FROM book$madm LIMIT $startRecord,$numberRecordPerPage";
            $query = $conn->query($sql);

            echo '<table>';
            echo '<tr><th>ID</th><th>Tên sách</th><th>Tác giả</th><th>Giá sách</th><th>Sửa</th><th>Xóa</th></tr>';

        while ($row = $query->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['title']}</td>
                    <td>{$row['author']}</td>
                    <td>" . number_format($row['price'], 3) . "VNĐ</td>
                    <td><a href=sua_sach.php?act_sua={$row['id']}><img src=Images/edit.jpeg width=30px height=30 border=0 ></a></td>
                    <td><a href=capnhat_sach.php?act={$row['id']}><img src=Images/del.jpeg width=30px height=30 border=0/></a></td>
                  </tr>";
        }
        echo '</table>';

        echo "<div class='pagination'><b>Page:</b>";
            for ($k = 1; $k <= $numberPage; $k++) :
                echo '<a href="capnhat_sach.php?page=' . $k . '">' . $k . '</a>  ';
            endfor;
            echo '</div>';

        } else {
            echo "<p>Danh mục này chưa có sách. <a href='themsach.php'>Thêm sách mới</a></p>";
        }

        $conn->close();
        ?>
        <p align="center"><a href=index.php class='back-link'><img src=Images/home.jpeg width=30px height=30 border=0 align=center/>Trang chủ</a></p>
    </div>
</div>
</body>
</html>