<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký thành viên</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            width: 50%;
            margin: 50px auto;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        p {
            text-align: center;
            font-size: 16px;
        }

        .success-message {
            color: green;
            font-weight: bold;
        }

        .error-message {
            color: red;
            font-weight: bold;
        }

    </style>
</head>
<body>
<div class="container">
    <?php
    include("includes/conn.php");

    $username = addslashes($_POST['usrname']);
    $password = md5(addslashes($_POST['passwd']));
    $verify_password = md5(addslashes($_POST['repasswd']));
    $email = addslashes($_POST['email']);
    $ten = addslashes($_POST['fname']);
    $sinhnhat = addslashes($_POST['sn']);
    $url = addslashes($_POST['dc']);

    if (!$username || !$_POST['passwd'] || !$_POST['repasswd'] || !$email || !$ten || !$sinhnhat || !$url) {
        echo "<p class='error-message'>Xin vui lòng nhập đủ các thông tin!<br><a href='register1.php'>Đăng ký lại</a></p>";
        exit;
    }

    $sql = "SELECT username FROM members WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<p class='error-message'>Username này đã có người dùng, Bạn vui lòng chọn username khác!<br><a href='register1.php'>Đăng ký lại</a></p>";
        exit;
    }

    $sql = "SELECT email FROM members WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<p class='error-message'>Email này đã có người dùng, Bạn vui lòng chọn Email khác!<br><a href='register1.php'>Đăng ký lại</a></p>";
        exit;
    }

    if ($password != $verify_password) {
        echo "<p class='error-message'>Mật khẩu không giống nhau, bạn hãy nhập lại mật khẩu!<br><a href='register1.php'>Đăng ký lại</a></p>";
        exit;
    }

    $a = $conn->query("INSERT INTO members (username, password, email,diachi,Name,Birthday) VALUES ('{$username}', '{$password}', '{$email}', '{$url}', '{$ten}', '{$sinhnhat}')");

    if ($a) {
        echo "<p class='success-message'>Tài khoản <span style='color:blue;'><b>{$username}</b></span> đã được tạo.<br> <a href='index.php'>Click vào đây để đăng nhập</a></p>";
    } else {
        echo "<p class='error-message'>Lỗi khi tạo tài khoản. Vui lòng thử lại.</p>";
    }
    ?>
</div>
</body>
</html>