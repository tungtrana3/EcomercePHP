
<?php
define('admin', 1); // quyền admin
define('client', 0); // quyền người dùng thông thường
// $document_root = $_SERVER['DOCUMENT_ROOT']+'/assignment/EcomercePHP/admin/';
$dbConn = mysqli_connect('localhost', 'root', '', 'assigment');

if (!$dbConn) {
    error_log("Failed to connect to MySQL: " . dbConn_error($dbConn));
    die('Internal server error');
}

$db_select = mysqli_select_db($dbConn,'assigment');
if (!$db_select) {
    error_log("Database selection failed: " . dbConn_error($dbConn));
    die('Internal server error');
}

?>