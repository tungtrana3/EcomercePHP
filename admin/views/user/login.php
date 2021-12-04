
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

	// if (isset($_POST["btn_submit"])) {
	// 	// lấy thông tin người dùng
	// 	$em = $_POST["inputEmailAddress"];
	// 	$pw = $_POST["inputPassword"];
	// 	//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
	// 	// sql injection
	// 	$em = strip_tags($em);
	// 	$em = addslashes($em);
	// 	$pw = strip_tags($pw);
	// 	$pw = addslashes($pw);
	// 	if ($em == "" || $pw =="") {
	// 		echo "<script>
	// 			document.getElementById('inputEmailAddress').style.borderColor = 'red';
	// 			document.getElementById('inputPassword').style.borderColor = 'red';
	// 			document.getElementById('checkem').style.color = 'red';
	// 			document.getElementById('checkpm').style.color = 'red';
	// 			document.getElementById('checkem').innerHTML = ' Email must be filled in! &#10005;';
	// 			document.getElementById('checkpw').innerHTML = ' Password must be filled in! &#10005;';
	// 		</script>";
	// 	}else{
	//         require('../controlers/login.php');
    //         // $db->closeDatabase();
	// 	}
	// }
?>
	<body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Đăng nhập</h3></div>
                                    <div class="card-body">
										
                                        <form method="POST">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Tài khoản</label><span id="checkem"></span>
                                                <input class="form-control py-4" id="inputEmailAddress" name="inputEmailAddress" type="email" placeholder="" required />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Mật khẩu</label><span id="checkpw"></span>
                                                <input class="form-control py-4" id="inputPassword" name="inputPassword" type="password" placeholder="" required />
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password/password.php">Quên mật khẩu?</a>
                                                <button class="btn btn-primary" name="login">Đăng nhập</button>
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
