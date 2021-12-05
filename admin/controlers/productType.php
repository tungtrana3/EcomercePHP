<?php

class ProductType
{
    public function __construct()
    {
        require('../model/productTypeModel.php');
        $productTypes = array();
        $productType = new productTypeModel(); 
         $productTypes = $productType->getList(20, 1);
        

         if (isset($_POST['addProduct'])) {
			$name = $_POST['name'];
			$img = $_POST['img'];
			$infor = $_POST['info'];

			if ($name) {
				$productType->addType($name, $img, $infor);
				$alert['success'] = 'Thêm thành công';
			}
		}
        require('../views/product/productType.php');
        
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
    public function addType($name, $img, $infor)
    {
	// 	//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
	// 	// sql injection
		$infor = strip_tags($infor);
		$infor = addslashes($infor);
		$name = strip_tags($name);
		$name = addslashes($name);
        $img = strip_tags($img);
		$img = addslashes($img);
            if ($infor && $name) {
                $productType = new productType();
                $result = $productType->addType($name, $img, $infor);
                $check = $result->num_rows; /*đếm số dòng trong database*/
               return $result;
        }
        return $error;
    }
  
}