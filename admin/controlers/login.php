<?php

class Login
{
    public function __construct()
    {
        /**
        * Nếu tồn tại $_SESSION['useradmin'] chuyển hướng vào trang admin
        * Ngược lại hiển thị giao diện đăng nhập
        */
        require('../model/client/UserModel.php');
        if (!empty($_SESSION['useradmin'])) {
            echo("<script>console.log('log eqweqwefqwef:  ');</script>");
            header('Location: home/home.php');
        } else {
            $userModel = new UserModel();
            echo("<script>console.log('log eqweqwefqwef:  ');</script>");
            $this->loginAdmin($userModel);
            require('../views/user/login.php');
        }
    }

    public function loginAdmin($userModel)
    {
        $username = $password = $fullName = NULL;
        $error = array();
        $error['inputEmailAddress'] = $error['inputPassword'] = NULL;
        if (!empty($_POST['login_admin'])) {
            if (empty($_POST['inputEmailAddress'])) {
                $error['inputEmailAddress'] = '* Cần điền tên đăng nhập';
            } else {
                $username = $_POST['inputEmailAddress'];
            }
            if (empty($_POST['inputPassword'])) {
                $error['inputPassword'] = '* Cần điền mật khẩu';
            } else {
                $password = $_POST['inputPassword'];
            }
        echo("<script>console.log('PHP: " .$username . "');</script>");
	// 	//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
	// 	// sql injection
		$eusernamem = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);
            if ($username && $password) {
                $result = $userModel->login($username, $password);
                $check = $result->num_rows; /*đếm số dòng trong database*/
                if ($check > 0) {
                    $data = $result->fetch_array(); /*lấy dữ liệu tương ứng với username và password nhập*/
                    $_SESSION['useradmin'] = $data; /*lưu session*/
                    if ($data['role'] == admin) {
                        header('Location: home/home.php');
                    } else {
                        echo "<script>alert('Vui lòng đăng nhập lại')</script>";
                    }
                } else {
                    echo "<script>alert('Sai mật khẩu hoặc tên đăng nhập')</script>";
                }
            }
        }
        return $error;
    }
}