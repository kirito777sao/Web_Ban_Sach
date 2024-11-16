<?php session_start(); // Đặt session_start() lên đầu file
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3H-BOOKS-NHÓM 7</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        #layer {
            background-color: #f0f0f0; /* Màu nền nhẹ nhàng hơn */
            padding: 10px;
            overflow: hidden; /* Ngăn marquee tràn ra ngoài */
            color: #666; /* Màu chữ nhẹ nhàng */
        }

        #layer marquee {
            font-size: 14px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed; /* Cố định chiều rộng cột */
        }

        td {
            padding: 15px;
            vertical-align: top;
        }

        /* Header */
        .header {
            background-color: #FED120;
            color: #333;
            padding: 20px;
            text-align: center;
            position: relative; /* Để định vị account-info */
        }

        .header h1 {
            font-size: 2.5em;
            margin: 0;
        }

        /* Left Panel */
        .left-panel {
            background-color: #f0f0f0;
            width: 20%;
            padding: 20px;
            border-right: 1px solid #ddd;
        }

        .left-panel a {
            display: block;
            margin-bottom: 10px;
            color: #007bff;
            text-decoration: none;
        }

        /* Main Content */
        .main-content {
            background-color: #fff;
            width: 60%;
            padding: 20px;
        }

        .pro {
            border: 1px solid #ddd;
            margin-bottom: 20px;
            padding: 15px;
            overflow: hidden; /* Ngăn hình ảnh tràn ra ngoài */
        }

        .pro img {
            float: left;
            margin-right: 15px;
            max-width: 100px; /* Giới hạn chiều rộng ảnh */
            height: auto;
        }

        /* Right Panel */
        .right-panel {
            background-color: #f0f0f0;
            width: 20%;
            padding: 20px;
            border-left: 1px solid #ddd;
        }

        /* Footer */
        .footer {
            background-color: #227CE8;
            color: #fff;
            text-align: center;
            padding: 10px;
            clear: both; /* Đảm bảo footer nằm dưới cùng */
        }

        /* Account Info */
        .account-info {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            z-index: 1000; /* Đảm bảo nó nằm trên các phần tử khác */
        }

        .account-info .dropdown {
            position: relative;
            display: inline-block;
        }

        .account-info .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            padding: 12px 16px;
            z-index: 1;
            right: 0;
        }

        .account-info .dropdown:hover .dropdown-content {
            display: block;
        }

        .account-info a {
            color: #007bff;
            text-decoration: none;
            display: block;
            margin-bottom: 5px;
        }

        /* Form đăng nhập */
        .account-info form {
            text-align: right;
            margin: 0;
        }

        .account-info form p {
            margin: 5px 0;
        }

        .account-info form input[type="text"],
        .account-info form input[type="password"] {
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .account-info form input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
        }

        td {
            padding: 15px;
            vertical-align: top;
        }

    </style>
</head>
<body>
<?php include('header.php'); ?>
<div id="layer">
    <marquee loop="-1" scrollamount="2" width="100%">
        <!-- Nội dung marquee -->
    </marquee>
</div>

<table >
  <tr>
    <td class="left-panel">
        <?php include ("left_panel.php"); ?>
    </td>
    <td class="main-content">
        <?php
        if (isset($_SESSION['user_id'])) {
            if ($_SESSION['user_id'] == null) {
                include("homepage.html");
            } else {
                include("main.php");
            }
        } else {
            include("homepage.html");
        }
        ?>
    </td>
    <td class="right-panel">
        <?php include("right_panel.php"); ?>
    </td>
  </tr>
</table>

<div class="footer">
    <?php include("footer.php"); ?>

    <?php
    if (isset($_SESSION['user_id'])) {
        $temp = "Bạn cần đăng nhập để mua sách!" . "username: 'admin'; pass:'admin'";
    } else {
        $temp = "Bạn cần đăng nhập để mua sách!" . "username: 'admin'; pass:'admin'";
    }

    if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == null) {
        echo '<script type="text/javascript">
            function hello(temp){
                 alert(temp);
            }
            hello("' . $temp . '");
        </script>';
    }
    ?>
</div>

</body>
</html>