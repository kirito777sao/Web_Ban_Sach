<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh mục sách</title>
    <style>
        .category-list {
            list-style: none; /* Loại bỏ dấu chấm tròn của list */
            padding: 0;
            margin: 0;
            font-size: 25px;
        }

        .category-list li {
            margin-bottom: 10px; /* Khoảng cách giữa các mục */
        }

        .category-list a {
            display: block; /* Hiển thị liên kết trên toàn bộ diện tích li */
            padding: 8px 15px; /* Thêm padding */
            text-decoration: none; /* Loại bỏ gạch chân */
            color: #0189C7; /* Màu chữ */
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s ease; /* Thêm hiệu ứng chuyển đổi mượt mà */
        }


        .category-list a:hover {
            background-color: #f0f0f0; /* Màu nền khi hover */
        }

        /* CSS cho thông báo "Không có danh mục nào" */
        .no-categories {
            text-align: center;
            padding: 20px;
            color: #999; /* Màu chữ nhạt */
            font-style: italic;
        }

    </style>
</head>
<body>

<?php
include("includes/conn.php");

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

$sql = "SELECT * FROM Danhmuc ORDER BY Madm";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<ul class='category-list'>";
    while ($row = $result->fetch_assoc()) {
        echo "<li><a href='addindex.php?id=" . $row['Madm'] . "'>" . $row['Tendm'] . "</a></li>";
    }
    echo "</ul>";
} else {
    echo "<div class='no-categories'>Không có danh mục nào</div>";
}

$conn->close();
?>

</body>
</html>