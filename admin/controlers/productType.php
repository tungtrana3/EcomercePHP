<?php

class ProductType
{
    public function __construct()
    {
        require('../model/productTypeModel.php');
        $productTypes = array();
        $productType = new productTypeModel();
        echo("<script>console.log('log 1231231231132:  ');</script>");
         $productTypes = $productType->getList(20, 1);
         require('../views/product/productType.php');
        //  header('Location: product/productType.php');
    }
   public function getList($limit, $page)
    {
	// 	//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
	// 	// sql injection
		$limit = strip_tags($limit);
		$limit = addslashes($limit);
		$page = strip_tags($page);
		$page = addslashes($page);
            if ($limit && $page) {
                $productType = new productType();
                $result = $productType->getList($limit, $page);
                $check = $result->num_rows; /*đếm số dòng trong database*/
               return $result;
        }
        return $error;
    }
}