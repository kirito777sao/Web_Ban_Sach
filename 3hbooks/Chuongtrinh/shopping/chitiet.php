<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sách</title>
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

        h3 {
            margin-top: 0;
        }

        .book-info {
            display: flex;
            align-items: flex-start; /* Canh lề trên cho nội dung */
            margin-bottom: 20px;
        }

        .book-info img {
            width: 200px;
            /* Chiều rộng của khung chứa */
            height: 300px;
            /* Chiều cao của khung chứa */
            object-fit: cover;
            margin-right: 20px;
        }

        .book-details {
            flex: 1;
        }


        .book-details p {
            margin: 10px 0;
        }

        .buy-button {
            display: inline-block;
            background-color: #007bff;
            color: white;
            padding: 8px 15px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 15px;
        }

        .buy-button img {
            vertical-align: middle;
        }

        .back-link {
            display: inline-block;
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
        }

        .price {
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        session_start();
        include("includes/conn.php");
        $idb = $_GET['item'];

        for ($i = 1; $i <= 100; $i++) {
            $myStrSQL1 = "SELECT * FROM book$i WHERE id = $idb";
            $result = $conn->query($myStrSQL1);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='book-info'>";
                    echo "<img src='uploads/$row[image]' alt='$row[title]' >";
                    echo "<div class='book-details'>";
                    echo "<h3>$row[title]</h3>";
                    echo "<p>Tác giả: $row[author]</p>";
                    echo "<p>Giá bán: <span class='price'>" . number_format($row['price'], 3) . " VNĐ</span></p>";
                    echo "<p>Số trang: $row[sotrang]</p>";
                    echo "<p>Kích thước: $row[kichthuoc]</p>";
                    echo "<p>Năm xuất bản: $row[namxb]</p>";
                    echo "<a href='addcart.php?item=$row[id]' class='buy-button'>Mua ngay</a>";
                    echo "<p>$row[tomtat]</p>";

                    echo "</div>";
                    echo "</div>";
                    echo "<a href='timkiem.php' class='back-link'>Trở về</a>";
                }
            }
        }
        $conn->close();
        ?>
    </div>

</body>

</html>