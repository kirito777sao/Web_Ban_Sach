<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <style>
        footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center; /* Căn giữa nội dung footer */
        }

        .footer-content {
            width: 80%;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap; /* Cho phép các cột xuống dòng khi màn hình nhỏ */
            justify-content: space-around; /* Phân bố đều khoảng cách giữa các cột */
        }

        .footer-column {
            width: 30%; /* Điều chỉnh chiều rộng cột cho phù hợp */
            margin-bottom: 20px;
        }

        .footer-column h4 {
            margin-bottom: 10px;
        }

        .footer-column ul {
            list-style: none;
            padding: 0;
        }

        .footer-column li {
            margin-bottom: 5px;
        }

        .footer-column a {
            color: #fff;
            text-decoration: none;
        }

        .copyright {
            width: 100%;
            margin-top: 20px;
            font-size: 14px;
        }
    </style>
</head>
<body>

<footer>
    <div class="footer-content">
        <div class="footer-column">
            <h4>Liên hệ</h4>
            <ul>
                <li>Địa chỉ: UNETI - HÀ NỘI</li>
                <li>Email: duchoan77482003@gmail.com</li>
                <li>Số điện thoại: 0372165970</li>                
            </ul>
        </div>
        <div class="footer-column">
            <h4>Giới thiệu</h4>
            <ul>
                <li>Về chúng tôi: Nhóm 7</a></li>
                <li><a href="#">Trần Đức Hoàn(LD) - 21103100849</a></li>
                <li><a href="#">Tạ Xuân Hoàng - 21103100814</a></li>
                <li><a href="#">Trần Quang Huy - 21103100802</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h4>Hướng dẫn</h4>
            <ul>
                <li><a href="#">Cách thức mua hàng</a></li>
                <li><a href="#">Hình thức thanh toán</a></li>
                <li><a href="#">Chính sách đổi trả</a></li>
            </ul>
        </div>
    </div>
    <div class="copyright">
    <strong>Mọi vấn đề thắc mắc hay cần hỗ trợ vui lòng nhấn <strong><a href="LienHe.html">VÀO ĐÂY</a></strong> để được hỗ trợ</strong><br>
        <strong> Copyright 2024 - HIỆU SÁCH 3HBOOKS <br>
            UNETI - HÀ NỘI
        </strong>
    </div>
</footer>

</body>
</html>