<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>
<style>
    /* Đặt màu nền chung */
body {
    background-color: #f5f5f5;
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

/* Hộp đăng nhập chính */
.login-container {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
    padding: 20px 30px;
    width: 100%;
    max-width: 400px;
    text-align: center;
}

/* Tiêu đề */
.login-container h2 {
    color: #333;
    margin-bottom: 20px;
    font-size: 24px;
    font-weight: bold;
}

/* Tin nhắn lỗi */
.error-message {
    color: #ff0000;
    font-size: 16px;
    margin-bottom: 15px;
}

/* Liên kết quay lại */
.back-link {
    color: #007bff;
    text-decoration: none;
    font-size: 14px;
    display: inline-block;
    margin-top: 10px;
    transition: color 0.3s;
}

.back-link:hover {
    color: #0056b3;
}

/* Nút */
button {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
    font-size: 16px;
}

button:hover {
    background-color: #0056b3;
}
</style>
<body>
    <div class="login-container">
        <h2>Đăng nhập</h2>
        <?php
        session_start();
        error_reporting(E_ALL ^ E_NOTICE);
        require_once("includes/conn.php");

        if ($_GET['act'] == "do") {
            $username = addslashes($_POST['username']);
            $password = md5(addslashes($_POST['password']));
            
            $sql = "SELECT id, username, password, Name, diachi FROM members WHERE username = '$username'";
            $result = $conn->query($sql);

            if ($result->num_rows <= 0) {
                echo "<p class='error-message'>Tên truy nhập không tồn tại.</p>";
                echo "<a href='javascript:history.go(-1)' class='back-link'>Quay lại</a>";
                exit;
            }

            $member = $result->fetch_assoc();

            if ($password != $member['password']) {
                echo "<p class='error-message'>Nhập sai mật khẩu.</p>";
                echo "<a href='javascript:history.go(-1)' class='back-link'>Quay lại</a>";
                exit;
            }

            if (!isset($_SESSION['user_id'])) {
                $_SESSION['user_id'] = "doit";
            }
            $_SESSION['user_id'] = $member['id'];
            $_SESSION['tenkh'] = $member['Name'];
            $_SESSION['dc'] = $member['diachi'];
            
            $temp = "Bạn đăng nhập với tài khoản: '{$member['username']}' thành công!";
            echo '<script type="text/javascript">
                function hello(temp){
                     alert(temp);
                    window.location="index.php";
                }
                hello("'.$temp.'");
                </script>';
        }
        ?>
    </div>
</body>
</html>