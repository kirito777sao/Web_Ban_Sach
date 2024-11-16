<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin cá nhân</title>
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
        input[type="password"] {
            width: calc(100% - 16px);
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
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


        .home-link {
            text-align: center;
            margin-top: 20px;
        }

        .home-link img {
            vertical-align: middle;
            margin-right: 5px;
            width: 24px;
            height: auto;
        }
        .home-link a{
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
    header('Content-Type: text/html; charset=UTF-8');
    require_once("includes/conn.php");

    if (!$_SESSION['user_id']) {
        echo "<p class='error-message'>Bạn chưa đăng nhập! <a href='login.php'>Nhấp vào đây để đăng nhập</a> hoặc <a href='register.php'>Nhấp vào đây để đăng ký</a></p>";
    } else {
        $user_id = intval($_SESSION['user_id']);
        $sql_query = "SELECT * FROM members WHERE id='{$user_id}'";
        $result = $conn->query($sql_query);

        if ($result->num_rows > 0) {
            $member = $result->fetch_assoc();

            $thanhcong = 'Sửa thành công';
            $kothanh = 'Sửa không thành công';

            if (isset($_GET['do']) && $_GET['do'] == "sua") {
                // ... (Xử lý cập nhật thông tin)
                if ($conn->query($sql)) {
                    echo "<p class='success-message'>$thanhcong</p>";
                } else {
                    echo "<p class='error-message'>$kothanh</p>";
                }
            } else {
                echo "<h2>Đang sửa tài khoản: <span style='color: red;'>{$member['username']}</span></h2>";
                echo "<form method='POST' action='?do=sua'>";
                echo "<table>";
                echo "<tr><td>Tên:</td><td><input type='text' value='{$member['Name']}' name='name'></td></tr>";
                echo "<tr><td>Địa chỉ:</td><td><input type='text' value='{$member['diachi']}' name='url'></td></tr>";
                echo "<tr><td>Sinh nhật:</td><td><input type='text' name='sn' value='{$member['Birthday']}'></td></tr>";
                echo "<tr><td>Email:</td><td><input type='text' name='email' value='{$member['email']}'></td></tr>";
                echo "<tr><td>Mật khẩu mới:</td><td><input type='password' name='pass'></td></tr>"; // Thêm label rõ ràng
                echo "</table>";
                echo "<p><input type='submit' value='Sửa'> <input type='reset' value='Khôi phục'></p>";

                echo "</form>";
            }


           echo "<p class='home-link'><a href='index.php'><img src='Images/home.jpeg' alt='Trang chủ'>Trang chủ</a></p>";

        }

    }

    $conn->close();
    ?>

</div>
</body>
</html>