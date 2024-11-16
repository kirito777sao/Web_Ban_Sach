<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thoát</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa; /* Màu nền nhạt */
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .container {
            flex-grow: 1; /* Cho phép phần nội dung co giãn */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            text-align: center;
        }

        .message {
            font-size: 24px;
            color: #007bff; /* Màu xanh dương */
            margin-bottom: 20px;
        }

        .home-link {
            display: block;
            width: 120px;
            height: 60px;
            margin: 0 auto;
        }

        .home-link img {
            width: 100%;
            height: auto;
            border: none;
        }


        footer {
           background-color: #343a40; /* Màu xám đậm */
           color: #fff;
           text-align: center;
           padding: 10px 0;
           width: 100%;
           position: relative; /* Để footer luôn ở dưới cùng */
           bottom: 0;
        }
    </style>
</head>
<body>
    <?php
    session_start();
    unset($_SESSION['addindex']);
    unset($_SESSION['user_id']);
    header('Content-Type: text/html; charset=UTF-8');

    if (session_destroy()) {
        echo "<div class='container'>";
        echo "<div class='message'>Thoát thành công!</div>";
        echo "<a href='index.php' class='home-link'><img src='Images/home.jpeg' alt='Trang chủ'></a>";
        echo "</div>";
    } else {
        echo "<div class='container'>";
        echo "<div class='message'>Không thể thoát được, có lỗi trong việc hủy session</div>";
        echo "<a href='index.php' class='home-link'><img src='Images/home.jpeg' alt='Trang chủ'></a>";
        echo "</div>";
    }
    ?>
   <footer>
      <p>© 2024 Bản quyền thuộc về website bán sách của hoàn</p>
   </footer>
</body>
</html>