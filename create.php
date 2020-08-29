<?php
header("Content-type:text/html;charset=utf-8");
$userphone = $_POST['phone'];
$username = $_POST['name'];
$userpass = $_POST['password'];
// 连接数据库

$conn=mysql_connect("localhost","root","root");
if(!$conn){
	echo ("数据库出错".mysql_error());
}else{
	mysql_select_db("ysl",$conn);
	$result = mysql_query("select * from user where phone='$userphone'",$conn);
	$rows = mysql_num_rows($result);
	if($rows>0){
		mysql_close($conn);
		echo "-1";
	}else{
		$result = mysql_query("insert into user(phone,name,password) values('$userphone','$username','$userpass')",$conn);
		mysql_close($conn);
		if($result!=1){
			echo "0";
		}else{
			echo "1";
		}
		
	}
}
?>
