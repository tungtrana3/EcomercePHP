<?php

class ProductType
{
    public function __construct()
    {
        /**
        * Nếu tồn tại $_SESSION['useradmin'] chuyển hướng vào trang admin
        * Ngược lại hiển thị giao diện đăng nhập
        */
        require('../model/client/UserModel.php');
        if (!empty($_SESSION['useradmin'])) {
            
            header('Location: product/productType.php');
        } else {
            $userModel = new UserModel();
            $error = $this->loginAdmin($userModel);
            require('../views/user/login.php');
        }
    }

}