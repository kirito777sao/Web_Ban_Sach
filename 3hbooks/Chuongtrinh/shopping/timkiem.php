<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm kiếm sách</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            width: 80%;
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

        .search-form {
            display: flex;
            justify-content: center; /* Căn giữa form tìm kiếm */
            margin-bottom: 20px;
        }
        .search-form table {
            width: auto;
        }
        .search-form input[type="text"] {
            width: 200px;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .search-form input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 10px; /* Khoảng cách giữa input và button */
        }

        .search-results {
            margin-top: 20px;
        }

        .book-item {
            border: 1px solid #ddd;
            margin-bottom: 15px;
            padding: 15px;
            border-radius: 5px;
        }

        .book-item h3 {
            margin-top: 0;
        }

        .book-item .price {
            color: red;
            font-weight: bold;
        }

        .book-item .buy-button img {
            vertical-align: middle;
            margin-left: 10px;
        }

        .pagination {
            text-align: center;
            margin-top: 20px;
        }

        .pagination a {
            display: inline-block;
            padding: 8px 12px;
            margin: 0 5px;
            background-color: #f0f0f0;
            color: #333;
            text-decoration: none;
            border-radius: 5px;
        }
        .back-link {
            text-align: center;
            margin-top: 20px;
        }

        .back-link a {
            display: inline-block;
            padding: 8px 15px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        .error-message{
            color: red;
            text-align: center;
        }



    </style>
</head>
<body>

<div class="container">
    <h2>Tìm kiếm sách</h2>

    <div class="search-form">
        <form method="post" action="timkiem.php?act=do">
            <table>
                <tr>
                    <td>Tên sách:</td>
                    <td><input type="text" name="tensach" value="<?php echo isset($_POST['tensach']) ? $_POST['tensach'] : ''; ?>"></td>
                </tr>
                <tr>
                    <td>Tác giả:</td>
                    <td><input type="text" name="tacgia" value="<?php echo isset($_POST['tacgia']) ? $_POST['tacgia'] : ''; ?>"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;"> <input type="submit" name="Submit" value="Tìm kiếm"></td>
                </tr>
            </table>
        </form>

    </div>

    <div class="search-results">

        <?php
        session_start();
        error_reporting(E_ALL ^ E_NOTICE);
        include("includes/conn.php");

        if (empty($_GET['act'])) $_GET['act'] = "undo";

        if ($_GET['act'] != "to") {
            if ($_GET['act'] == "do") {
                if (isset($_POST['tensach']) && isset($_POST['tacgia'])) {
                    $_SESSION["tensach"] = $_POST['tensach'];
                    $_SESSION["tacgia"] = $_POST['tacgia'];
                }
            } else {
                $_SESSION["tensach"] = $_SESSION["tensach"];
                $_SESSION["tacgia"] = $_SESSION["tacgia"];
            }

            $numberRecordPerPage = 4;
            $b = 0;
            for ($a = 1; $a <= 16; $a++) {
                $sql = "SELECT * from book$a where title like '%$_SESSION[tensach]%' and author like '%$_SESSION[tacgia]%'";
                $result = $conn->query($sql);

                while ($row = $result->fetch_assoc()) {
                    $b++;
                    $sql = "INSERT INTO search (id,title,author,price) VALUES ('$row[id]','$row[title]','$row[author]','$row[price]')";
                    $conn->query($sql);
                }
            }


            if ($b == 0) {
                echo "<p class='error-message'>Không tìm thấy kết quả!</p>";
            }else{
                echo "<b>Số kết quả tìm được: <span style='color:blue;'>$b</span></b>";


            }
            $numberPage = ceil($b / $numberRecordPerPage);
            $curPage = isset($_GET["page"]) ? $_GET["page"] : 1;
            $startRecord = ($curPage - 1) * $numberRecordPerPage;



            $sql = "SELECT * FROM search LIMIT $startRecord,$numberRecordPerPage";
            $mysql = $conn->query($sql);

            while ($row1 = $mysql->fetch_assoc()) {
                echo "<div class='book-item'>";
                echo "<h3>$row1[title]</h3>";
                echo "<p>Tác giả: $row1[author] - Giá bán: <span class='price'>" . number_format($row1['price'], 3) . "</span> VNĐ</p>";
                echo "<p><a href='chitiet.php?item=$row1[id]'>Chi tiết...</a></p>";
                echo "<a class='buy-button' href='addcart.php?item=$row1[id]'><img src='Images/btn_buy.gif' width='50' height='20' alt='Mua ngay'> Mua ngay</a>";
                echo "</div>";
                $conn->query("DELETE from search");
            }




            echo "<div class='pagination'>";
            echo "<b>Page:</b>";
            for ($k = 1; $k <= $numberPage; $k++) :
                print '<a href="timkiem.php?page=' . $k . '">' . $k . '</a>  ';
            endfor;
            echo "</div>";

        }

        $conn->close();
        ?>

    </div>

        <p class="back-link"><a href="index.php">Quay về trang chủ</a></p>

</div>

</body>
</html>