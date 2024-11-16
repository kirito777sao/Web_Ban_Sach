<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sách</title>
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
    <?php
    session_start();
    error_reporting(E_ALL ^ E_NOTICE);
    require_once("includes/conn.php");

    if (isset($_GET['do']) && $_GET['do'] == "them") {
        // ... (Xử lý thêm sách)
        $madm = $_SESSION['addcapnhat']; // Lấy mã danh mục từ session
    
        // Kiểm tra xem bảng có tồn tại không
        $check_table_sql = "SHOW TABLES LIKE 'book$madm'";
        $check_table_result = $conn->query($check_table_sql);
        if ($check_table_result->num_rows == 0) {
            die("<p class='error-message'>Lỗi: Bảng book$madm không tồn tại.</p>");
        }


        $id = $_POST['id'];
        $title = $_POST['title'];
        $author = $_POST['author'];
        $price = $_POST['price'];
        $tomtat = $_POST['tomtat'];
        $nxb = $_POST['nxb'];
        $sotrang = $_POST['sotrang'];
        $kichthuoc = $_POST['kichthuoc'];
        $namxb = $_POST['namxb'];


        // Xử lý upload ảnh
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Kiểm tra xem file đã tồn tại chưa
        if (file_exists($target_file)) {
            echo "<p class='error-message'>Lỗi: File ảnh đã tồn tại.</p>";
            $uploadOk = 0;
        }

        // Kiểm tra kích thước file
        if ($_FILES["image"]["size"] > 500000) { // 500KB
            echo "<p class='error-message'>Lỗi: File ảnh quá lớn.</p>";
            $uploadOk = 0;
        }

        // Cho phép các định dạng ảnh nhất định
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "<p class='error-message'>Lỗi: Chỉ cho phép file JPG, JPEG, PNG & GIF.</p>";
            $uploadOk = 0;
        }

        // Kiểm tra nếu $uploadOk == 0 thì có lỗi xảy ra
        if ($uploadOk == 0) {
            echo "<p class='error-message'>Lỗi: Không thể upload file ảnh.</p>";
        // Nếu mọi thứ ok, thử upload file
        } else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                $image = basename($_FILES["image"]["name"]); // Lấy tên file ảnh
                

                // Sử dụng prepared statements để ngăn chặn SQL injection
                $stmt = $conn->prepare("INSERT INTO book$madm (id, title, author, price, tomtat, nxb, sotrang, kichthuoc, namxb, image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("issiississ", $id, $title, $author, $price, $tomtat, $nxb, $sotrang, $kichthuoc, $namxb, $image);


                if ($stmt->execute()) {
                    echo "<p class='success-message'>Thêm sách thành công!</p>";
                } else {
                    echo "<p class='error-message'>Lỗi: " . $stmt->error . "</p>";
                }

                $stmt->close(); // Đóng prepared statement sau khi sử dụng



            } else {
                echo "<p class='error-message'>Lỗi: Đã xảy ra lỗi khi upload file ảnh.</p>";
            }
        }
    } else {
        echo "<h2>Thêm sách</h2>";
        echo "<form method='POST' action='?do=them' enctype='multipart/form-data'>";
        echo "<table>";
        echo "<tr><td>ID:</td><td><input type='text' name='id'></td></tr>";
        echo "<tr><td>Tiêu đề:</td><td><input type='text' name='title'></td></tr>";
        echo "<tr><td>Tác giả:</td><td><input type='text' name='author'></td></tr>";
        echo "<tr><td>Giá:</td><td><input type='text' name='price'></td></tr>";
        echo "<tr><td>Tóm tắt:</td><td><textarea name='tomtat' rows='4'></textarea></td></tr>";
        echo "<tr><td>Nhà xuất bản:</td><td><input type='text' name='nxb'></td></tr>";
        echo "<tr><td>Số trang:</td><td><input type='text' name='sotrang'></td></tr>";
        echo "<tr><td>Kích thước:</td><td><input type='text' name='kichthuoc'></td></tr>";
        echo "<tr><td>Năm xuất bản:</td><td><input type='text' name='namxb'></td></tr>";
        echo "<tr><td>Ảnh bìa:</td><td><input type='file' name='image' id='image'></td></tr>";
        echo "</table>";
        echo "<p><input type='submit' value='Thêm'> <input type='reset' value='Khôi phục'></p>";
        echo "</form>";
    }

    
    echo "<p class='back-link'><a href='capnhat_sach.php'><img src='Images/back.jpeg' alt='Quay lại'>Quay lại</a></p>";

$conn->close();
?>
</div>

</body>
</html>