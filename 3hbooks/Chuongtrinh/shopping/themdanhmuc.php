<!DOCTYPE html>
<html>
<head>
<title>Thêm Danh Mục</title>
<style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            width: 60%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 8px;
        }

        input[type="text"],
        textarea {
            width: calc(100% - 16px);
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            resize: vertical;
        }

        input[type="submit"],
        input[type="reset"] {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 5px;
        }

        input[type="file"] {
            border: none; /* Loại bỏ border mặc định của input file */
        }


        .message {
            text-align: center;
            margin-top: 10px;
        }

        .success-message {
            color: green;
        }

        .error-message {
            color: red;
        }

        .back-link {
            text-align: center;
            margin-top: 20px;
        }

        .back-link a {
            display: inline-block; /* Để có thể set padding và background */
            padding: 8px 15px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        .back-link img {
            vertical-align: middle;
            margin-right: 5px;
            width: 24px;
            height: auto;
        }

        form p{
            text-align: center;
        }

    </style>
</head>
<body>
<div class="container">
    <h2>Thêm Danh Mục</h2>

    <?php
    session_start();
    include("includes/conn.php");

    if (isset($_POST['them'])) {
        $madm = $_POST['madm'];
        $tendm = $_POST['tendm'];

        // Kiểm tra xem mã danh mục đã tồn tại chưa
        $check_sql = "SELECT * FROM Danhmuc WHERE Madm = '$madm'";
        $check_result = $conn->query($check_sql);
        if ($check_result->num_rows > 0) {
            echo "<p class='error-message'>Mã danh mục đã tồn tại. Vui lòng chọn mã khác.</p>";
        } else {
            $sql = "INSERT INTO Danhmuc (Madm, Tendm) VALUES ('$madm', '$tendm')";

            if ($conn->query($sql) === TRUE) {
                // Tạo bảng sách cho danh mục mới
                $create_table_sql = "CREATE TABLE book$madm (
                  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                  `title` varchar(255) NOT NULL,
                  `author` varchar(100) NOT NULL,
                  `price` int(30) NOT NULL,
                  `tomtat` mediumtext NOT NULL,
                  `nxb` varchar(255) NOT NULL,
                  `sotrang` int(11) NOT NULL,
                  `kichthuoc` varchar(255) NOT NULL,
                  `namxb` varchar(255) NOT NULL,
                  `image` varchar(255) DEFAULT NULL
                ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;";
                if ($conn->query($create_table_sql) === TRUE) {
                    echo "<p class='success-message'>Thêm danh mục và tạo bảng thành công!</p>";
                } else {
                    echo "<p class='error-message'>Lỗi tạo bảng: " . $conn->error . "</p>";
                }

            } else {
                echo "<p class='error-message'>Lỗi: " . $sql . "<br>" . $conn->error . "</p>";
            }
        }
    }
    ?>

    <form method="post" action="">
        <table>
            <tr>
                <td>Mã Danh Mục:</td>
                <td><input type="text" name="madm" required></td>
            </tr>
            <tr>
                <td>Tên Danh Mục:</td>
                <td><input type="text" name="tendm" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="them" value="Thêm">
                    <input type="reset" value="Nhập lại">
                </td>
            </tr>
        </table>
    </form>
    <p class='back-link'><a href='capnhat_sach.php'><img src='Images/back.jpeg' alt='Quay lại'>Quay lại</a></p>

</div>
</body>
</html>