<?php
require "conn.php";
$user_name = $_POST["user_name"];
$user_pass = $_POST["password"];
$mysql_qry = "select * from register where email like '$user_name' and password like '$password';";
$result = mysqli_query($conn , $mysql_qry);



$numrows = mysqli_num_rows($result);
 
if($numrows > 0) {

echo "login yes";

}
else {
echo "login no";

}
?>
