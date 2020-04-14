<?php
//Variable Setting
$name=$_Request['name'];
$name=$_Request['Email'];
$name=$_Request['Messege'];
//check input field
if (empty($name)|| (empty($Email) || (empty($Messege)) {
	echo "Please fill all the field";
}
else(mail("ferhan.aust@gmail.com", "Web Mail",$Messege,"from:$name<$Email>""))
?>
