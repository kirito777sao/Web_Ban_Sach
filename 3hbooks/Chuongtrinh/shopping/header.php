    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Header</title>
        <style>
            header {
                background-color: #C1E20D;
                padding: 20px;
                color: #333;
            }

            .header-content {
                display: flex;
                justify-content: space-between;
                align-items: center;
                width: 90%; /* Giới hạn chiều rộng nội dung header */
                margin: 0 auto; /* Căn giữa nội dung header */
            }

            .logo h1 {
                margin: 0;
                font-size: 2em;
            }

            .logo a {
                text-decoration: none;
                color: #DF2850;
            }


            nav ul {
                list-style: none;
                margin: 0;
                padding: 0;
                display: flex; /* Hiển thị menu theo hàng ngang */

            }

            nav li {
                margin-right: 150px;
        margin-left: 50px; /* Khoảng cách giữa các mục menu */
            }

            nav a {
                text-decoration: none;
                color: #0189C7;
                font-weight: bold;
            }

            /* Thêm style cho phần thông báo */
            .account-info {
                text-align: right; /* Canh phải thông báo */
            }
        </style>
    </head>
    <body>

    <header>
        <div class="header-content">
            <div class="logo">
                <h1><a href="index.php">░▒▓█ 𝟛ℍ-𝔹𝕆𝕆𝕂𝕊 █▓▒░</a></h1>
            </div>

            <nav>
                <ul>
                    <li><a href="index.php">Trang chủ</a></li>
                    <li>
                        <?php                    
                        if (!empty($_SESSION['user_id'])) {
                            echo '<a href="timkiem.php?act=to">Tìm kiếm</a>';
                        } else {
                            echo '<a href="index.php">Tìm kiếm</a>';
                        }
                        ?>
                    </li>
                    <li><a href="huong_dan.php">Hướng dẫn</a></li>  </li>
                    <li><a href="gioithieu.html">Giới thiệu</a></li>
                </ul>
            </nav>
                    <div class="account-info">
                <?php include('thongbao.php'); ?>
            </div>

        </div>

    </header>

    </body>
    </html>