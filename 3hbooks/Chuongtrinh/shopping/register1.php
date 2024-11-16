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
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
		}

		.register-container {
			background-color: #fff;
			padding: 30px;
			border-radius: 8px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			width: 400px;
		}

		h1 {
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

		input[type="button"],
		input[type="reset"] {
			background-color: #007bff;
			color: #fff;
			padding: 8px 15px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			margin-right: 10px;

		}

		#message,
		#data {
			text-align: center;
			margin-top: 10px;
		}

		.homelink {
			text-align: center;
			margin-top: 20px;
		}

		.homelink img {
			width: 50px;
			height: auto;
		}
	</style>
</head>

<body>
	<div class="register-container">
		<h1>Đăng ký thành viên</h1>
		<div id="message" style="color:#FF0000;font-weight:bold"></div>

		<form action="doRegister.php" method="post" onsubmit="submitFORM(); return false;">
			<table>
				<tr>
					<td>Tên truy cập:</td>
					<td><input type="text" id="usrname" name="usrname"></td>
				</tr>
				<tr>
					<td>Mật khẩu:</td>
					<td><input type="password" id="passwd" name="passwd"></td>
				</tr>
				<tr>
					<td>Xác nhận mật khẩu:</td>
					<td><input type="password" id="repasswd" name="repasswd"></td>
				</tr>
				<tr>
					<td>Tên thật:</td>
					<td><input type="text" id="fname" name="fname"></td>
				</tr>
				<tr>
					<td>Địa chỉ Email:</td>
					<td><input type="text" id="email" name="email"></td>
				</tr>
				<tr>
					<td>Sinh nhật:</td>
					<td><input type="text" id="sn" name="sn"></td>
				</tr>
				<tr>
					<td>Địa chỉ:</td>
					<td><input type="text" id="dc" name="dc"></td>
				</tr>
				<tr>
					<td colspan="2" style="text-align: center;">
						<input type="button" value="Đăng ký tài khoản" onclick="submitFORM()">
						<input type="reset" value="Hủy bỏ">
					</td>
				</tr>
			</table>
			<script>
				var params;
				var req;

				function submitFORM() {
					var url = "doRegister.php";
					var un = document.getElementById("usrname");
					var pw = document.getElementById("passwd");
					var repw = document.getElementById("repasswd");
					var fn = document.getElementById("fname");
					var em = document.getElementById("email");
					var sn = document.getElementById("sn");
					var dc = document.getElementById("dc");

					// Sử dụng encodeURIComponent để mã hóa URI component
					var params;
					params = "usrname=" + encodeURIComponent(un.value);
					params += "&passwd=" + encodeURIComponent(pw.value);
					params += "&repasswd=" + encodeURIComponent(repw.value);
					params += "&fname=" + encodeURIComponent(fn.value);
					params += "&email=" + encodeURIComponent(em.value);
					params += "&sn=" + encodeURIComponent(sn.value);
					params += "&dc=" + encodeURIComponent(dc.value);

					if (window.XMLHttpRequest) {
						req = new XMLHttpRequest();
						req.onreadystatechange = processStateChange;
						try {
							req.open("POST", url, true); // Sử dụng asynchronous request
							req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
							req.send(params);
						} catch (e) {
							alert(e);
						}
					} else if (window.ActiveXObject) {
						req = new ActiveXObject("Microsoft.XMLHTTP");
						if (req) {
							req.onreadystatechange = processStateChange;
							req.open("POST", url);
							req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
							req.send(params);
						}
					}
					document.getElementById("message").innerHTML = "Đang xử lý..."; // Hiển thị thông báo
				}


				function processStateChange() {
					if (req.readyState == 4) { // Complete
						if (req.status == 200) { // OK response
							document.getElementById("data").innerHTML = req.responseText;
							document.getElementById("message").innerHTML = ""; // Xóa thông báo sau khi xử lý xong
						} else {
							alert("Problem: " + req.statusText);
							document.getElementById("message").innerHTML = ""; // Xóa thông báo nếu có lỗi

						}
					}
				}
			</script>
		</form>
		<p class="homelink"><a href="index.php"><img src="Images/home.jpeg" alt="home" border="0"></a></p>
		<div id="data" style="color:#FF0000;font-weight:bold"></div>

	</div>

</body>

</html>