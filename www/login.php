<?php
require "conn.php";
$user_name = "wenhui@gwmail.gwu.edu";
$user_pass = "123456";
$mysql_qry = "select * from register where email like '$user_name' and password like '$user_pass';";
$result = mysqli_query($conn , $mysql_qry);


echo "hello";

$numrows = mysqli_num_rows($result);
 
if($numrows > 0) {

echo "login yes";

}
else {
echo "login no";

}
?>
