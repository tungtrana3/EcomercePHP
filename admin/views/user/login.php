
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin - Login</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
<?php

	if (isset($_POST["btn_submit"])) {
		
	
		// lấy thông tin người dùng
		$em = $_POST["inputEmailAddress"];
		$pw = $_POST["inputPassword"];
		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
		$em = strip_tags($em);
		$em = addslashes($em);
		$pw = strip_tags($pw);
		$pw = addslashes($pw);
		if ($em == "" || $pw =="") {
			echo "<script>
				document.getElementById('inputEmailAddress').style.borderColor = 'red';
				document.getElementById('inputPassword').style.borderColor = 'red';
				document.getElementById('checkem').style.color = 'red';
				document.getElementById('checkpm').style.color = 'red';
				document.getElementById('checkem').innerHTML = ' Email must be filled in! &#10005;';
				document.getElementById('checkpw').innerHTML = ' Password must be filled in! &#10005;';
			</script>";
		}else{
			$sql = "select * from accounts_admin where email = '$em' and password = '$pw' ";
			$query = mysqli_query($dbConn,$sql);
			if (mysqli_num_rows($query) > 0) {
				
				$sql_log = "INSERT INTO logs (email)VALUES ('$em')";
				$query_log = mysqli_query($dbConn,$sql_log);
				
				
				$_SESSION['loggedin'] = TRUE;
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
				$_SESSION['email'] = $em;
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                echo "<script> window.location.href='http://localhost/admin/index.php';</script>";
				
			}else{
				echo "
				<div style='width: 20%;top: 5%;position: fixed;' class='alert alert-warning alert-dismissible fade show' role='alert'>
				<strong style='color:red;'>Email or Password not correct!!</strong>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
				</div>";
			}
		}
	}
?>
	<body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login - Admin</h3></div>
                                    <div class="card-body">
										
                                        <form method="POST" name="cForm" onSubmit="return checksub()">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label><span id="checkem"></span>
                                                <input class="form-control py-4" id="inputEmailAddress" name="inputEmailAddress" type="email" placeholder="Enter email address" required />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label><span id="checkpw"></span>
                                                <input class="form-control py-4" id="inputPassword" name="inputPassword" type="password" placeholder="Enter password" required />
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password/password.php">Forgot Password?</a>
                                                <button class="btn btn-primary" name="btn_submit">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
		<script src="js/validate-login.js"></script>
    </body>
</html>
