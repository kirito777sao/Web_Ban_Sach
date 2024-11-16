    <?php 
    error_reporting (E_ALL ^ E_NOTICE);
    require_once("includes/conn.php");
    ?>

    <!DOCTYPE html>
    <html lang="vi">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập/Thông tin tài khoản</title>
    <style>
    .account-area {
        text-align: right;
        margin-bottom: 20px; /* Khoảng cách với nội dung phía dưới */
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown span {
        cursor: pointer;
        padding: 10px;
        border: 1px solid #ccc;
        background-color: #f0f0f0;
        border-radius: 5px;
    }


    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        right: 0; /* Hiển thị menu dropdown về bên phải */
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1
    }

    .login-form input[type="text"],
    .login-form input[type="password"] {
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    .login-form input[type="submit"] {
        padding: 8px 16px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }


    </style>
    </head>
    <body>


    <div class="account-area">

    <?php
    if (isset($_SESSION['user_id'])) {
        $user_id = intval($_SESSION['user_id']);
        $sql_query = "SELECT * FROM members WHERE id = '$user_id'";
        $result = $conn->query($sql_query);

        if ($result->num_rows > 0) {
            $member = $result->fetch_assoc();
            echo "<div class='dropdown'>
                    <span>Tài khoản: <b>{$member['username']}</b></span>
                    <div class='dropdown-content'>";

            echo "<a href='suathongtin.php'>Sửa thông tin</a>";
            if ($member['admin'] == "1") {
                echo "<a href='thanhvien.php'>Thành viên</a>";
                echo "<a href='hoadon.php'>Hóa đơn</a>";
                echo "<a href='capnhat_sach.php'>Cập nhật sách</a>";
            }
            echo "<a href='thoat.php'>Thoát ra</a>";

            echo "</div></div>";
        }
    } else {
        echo "<div>Bạn chưa đăng nhập! <a href='register1.php'>Đăng ký</a> </div>"; 
        echo "<form action='login.php?act=do' method='post' class='login-form'>
                <p>Tên truy nhập: <input type='text' name='username' value=''></p>
                <p>Mật khẩu: <input type='password' name='password' value=''></p>
                <p><input type='submit' name='submit' value='Đăng nhập'></p>
            </form>";
    }
    ?>
    </div>

    </body>
    </html>