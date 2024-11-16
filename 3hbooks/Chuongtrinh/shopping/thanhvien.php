<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách thành viên</title>
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

        .delete-link {
            color: #ff0000; /* Màu đỏ cho liên kết xóa */
            font-weight: bold;
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

        .home-link {
            display: block;
            text-align: center;
            margin-top: 20px;

        }

        .home-link img {
            width: 40px;
            height: auto;
            vertical-align: middle;

        }
    </style>
</head>
<body>
<div class="container">

    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Địa chỉ</th>
            <th>Tên thật</th>
            <th>Sinh nhật</th>
            <th>Xóa</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require_once("includes/conn.php");

        if (!empty($_GET['act'])) {
            $sql = "DELETE FROM members WHERE id = '{$_GET['act']}'";
            $conn->query($sql);
        }

        $sql = "SELECT * FROM members";
        $result = $conn->query($sql);
        $s = $result->num_rows;
        $numberRecordPerPage = 5;
        $numberPage = ceil($s / $numberRecordPerPage);
        $curPage = isset($_GET["page"]) ? $_GET["page"] : 1;
        $startRecord = ($curPage - 1) * $numberRecordPerPage;

        $sql = "SELECT * FROM members LIMIT $startRecord, $numberRecordPerPage";
        $query = $conn->query($sql);

        while ($row = $query->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['username']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['diachi']}</td>
                    <td>{$row['Name']}</td>
                    <td>{$row['Birthday']}</td>
                    <td><a href='thanhvien.php?act={$row['id']}' class='delete-link'>Xóa</a></td>
                  </tr>";
        }
        ?>
        </tbody>
    </table>

    <div class="pagination">
        <?php
        echo "<b>Page:</b>";
        for ($k = 1; $k <= $numberPage; $k++):
            echo "<a href='thanhvien.php?page=$k'>$k</a> ";
        endfor;
        ?>
    </div>
    <p class="home-link"> <a href=index.php><img src=Images/home.jpeg alt="home" border="0">Trang chủ</a></p>

</div>

</body>
</html>