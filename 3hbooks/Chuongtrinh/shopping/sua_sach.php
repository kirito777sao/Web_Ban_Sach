<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật sách</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background-color: rgb(255, 255, 204);
            color: #333;
        }

        .container {
            width: 60%; /* Điều chỉnh chiều rộng form */
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
            width: calc(100% - 16px); /* Chiếm toàn bộ chiều rộng trừ padding */
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            resize: vertical; /* Cho phép thay đổi chiều cao của textarea */

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
            border: none;
        }


        img {
            max-width: 100px;
            height: auto;
            display: block;
            margin: 0 auto; /* Căn giữa ảnh */
        }

        .error-message {
            color: red;
            text-align: center;
            margin-top: 10px;
        }
        .back-link {
            text-align: center;
            margin-top: 20px;
        }

        .back-link img {
            vertical-align: middle; /* Canh giữa ảnh và text */
            margin-right: 5px; /* Khoảng cách giữa ảnh và text */
            width: 24px; /* Điều chỉnh kích thước ảnh */
            height: auto;
        }
        .back-link a{
             background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
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

    if (isset($_GET['do']) && $_GET['do'] == "sua") {
        // ... (Xử lý cập nhật sách)
        $madm = $_SESSION['addcapnhat'];
        $id = $_POST['id'];
        $title = $_POST['title'];
        $author = $_POST['author'];
        $price = $_POST['price'];
        $tomtat = $_POST['tomtat'];
        $nxb = $_POST['nxb'];
        $sotrang = $_POST['sotrang'];
        $kichthuoc = $_POST['kichthuoc'];
        $namxb = $_POST['namxb'];

        // Khởi tạo $uploadOk và $image
        $uploadOk = 1; 
        $image = ""; // Khởi tạo $image

        // Kiểm tra xem bảng có tồn tại không
        $check_table_sql = "SHOW TABLES LIKE 'book$madm'";
        $check_table_result = $conn->query($check_table_sql);
        if ($check_table_result->num_rows == 0) {
            die("<p class='error-message'>Lỗi: Bảng book$madm không tồn tại.</p>");
        }

        // Xử lý upload ảnh (nếu có thay đổi ảnh)
        if ($_FILES["image"]["name"] != "") {  // Kiểm tra xem có file ảnh mới được chọn không
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            // Kiểm tra định dạng, kích thước,... (tương tự như trong themsach.php)

            if ($uploadOk == 0) {
                echo "<p class='error-message'>Lỗi upload ảnh.</p>";
            } else {
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    $image = basename($_FILES["image"]["name"]);
                } else {
                    echo "<p class='error-message'>Lỗi: Đã xảy ra lỗi khi upload file ảnh.</p>";
                    $uploadOk = 0; // Đánh dấu lỗi upload
                }
            }
        } else {
            // Không thay đổi ảnh, lấy tên ảnh cũ từ CSDL (cần truy vấn CSDL để lấy)
            $id = $_POST['id']; // Lấy id sách từ form
            $sql = "SELECT image FROM book$madm WHERE id = $id";
            $result = $conn->query($sql);
            if ($result && $result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $image = $row['image'];
            } else {
                // Xử lý trường hợp không tìm thấy ảnh trong CSDL (ví dụ: hiển thị lỗi, dùng ảnh mặc định,...)
                echo "<p class='error-message'>Không tìm thấy ảnh bìa hiện tại.</p>";
                $uploadOk = 0; // Có thể đặt $uploadOk = 0 để ngăn cập nhật nếu cần
            }
        }


        if ($uploadOk == 1) {  // Chỉ cập nhật CSDL nếu upload ảnh thành công (hoặc không thay đổi ảnh)
            // Sử dụng prepared statement để cập nhật dữ liệu
            $stmt = $conn->prepare("UPDATE book$madm SET title=?, author=?, price=?, tomtat=?, nxb=?, sotrang=?, kichthuoc=?, namxb=?, image=? WHERE id=?");
            $stmt->bind_param("ssiississi", $title, $author, $price, $tomtat, $nxb, $sotrang, $kichthuoc, $namxb, $image, $id);

            if ($stmt->execute()) {
                echo "<p class='success-message'>Cập nhật sách thành công!</p>";
                echo "<p class='back-link'><a href='capnhat_sach.php'>Quay lại</a></p>";
            } else {
                echo "<p class='error-message'>Lỗi: " . $stmt->error . "</p>";
            }
            $stmt->close();

        }
    } else {
        $id = $_GET['act_sua'];
        $sql = "SELECT * FROM `book$_SESSION[addcapnhat]` WHERE `id` = '$id'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        if ($row && isset($row['id'])) {
            echo "<h2>Cập nhật sách</h2>";
            echo "<form method='POST' action='?do=sua' enctype='multipart/form-data'>";
            echo "<table>";
            echo "<tr><td>ID:</td><td><input type='text' value='{$row['id']}' name='id' readonly></td></tr>";
            echo "<tr><td>Tiêu đề:</td><td><input type='text' value='{$row['title']}' name='title'></td></tr>";
            echo "<tr><td>Tác giả:</td><td><input type='text' value='{$row['author']}' name='author'></td></tr>";
            echo "<tr><td>Giá:</td><td><input type='text' value='{$row['price']}' name='price'></td></tr>";
            echo "<tr><td>Tóm tắt:</td><td><textarea name='tomtat' rows='4'>{$row['tomtat']}</textarea></td></tr>";
            echo "<tr><td>Nhà xuất bản:</td><td><input type='text' value='{$row['nxb']}' name='nxb'></td></tr>";
            echo "<tr><td>Số trang:</td><td><input type='text' value='{$row['sotrang']}' name='sotrang'></td></tr>";
            echo "<tr><td>Kích thước:</td><td><input type='text' value='{$row['kichthuoc']}' name='kichthuoc'></td></tr>";
            echo "<tr><td>Năm xuất bản:</td><td><input type='text' value='{$row['namxb']}' name='namxb'></td></tr>";
            echo "<tr><td>Ảnh bìa hiện tại:</td><td><img src='uploads/{$row['image']}' alt='{$row['title']}'></td></tr>";
            echo "<tr><td>Thay đổi ảnh bìa:</td><td><input type='file' name='image' id='image'></td></tr>";
            echo "</table>";
            echo "<p><input type='submit' value='Cập nhật'> <input type='reset' value='Khôi phục'></p>";
            echo "</form>";

        } else {
            echo "<p class='error-message'>Lỗi: Không tìm thấy sách có ID này.</p>";

        }
         echo "<p class='back-link'><a href='capnhat_sach.php'>Quay lại</a></p>";


    }

    $conn->close();
    ?>
</div>

</body>
</html>