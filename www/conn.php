<?php
$db_name = "android_test_0";
$mysql_username = "root";
$mysql_password = "123456";
$server_name = "localhost";
$conn = mysqli_connect($server_name , $mysql_username , $mysql_password , $db_name);
if($conn){
echo "conn yes";
}
else {
echo "conn no";
}
?>
