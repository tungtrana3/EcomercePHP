<!-- PHP config -->

<?php
/* Database Connection */

$dbConn = mysqli_connect('localhost', 'root', '', 'assigment1');

if (!$dbConn) {
    error_log("Failed to connect to MySQL: " . dbConn_error($dbConn));
    die('Internal server error');
}

$db_select = mysqli_select_db($dbConn,'assigment1');
if (!$db_select) {
    error_log("Database selection failed: " . dbConn_error($dbConn));
    die('Internal server error');
}

?>