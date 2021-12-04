
<?php
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