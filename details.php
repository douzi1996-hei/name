


<?php

  header("Content-Type: text/html;charset=utf-8");
  //接收前端数据
  $shoppname=$_GET["shoppname"];
  $shoppnorm=$_GET["shoppnorm"];
  $shoppsrc=$_GET["shoppsrc"];
  $shoppprice=$_GET["shoppprice"];
  $num=$_GET["num"];
  //连接数据库
  $conn=mysql_connect("localhost","root","root");
  if(!$conn){
    echo("连接数据库出错".mysql_error());
  }else{
    //选择库
    mysql_select_db("ysl",$conn);
    //添加数据
      $result=mysql_query("insert into shop(shopname,norm,src,price,num) values ('$shoppname','$shoppnorm','$shoppsrc','$shoppprice','$num')",$conn);
      if($result!=1){
        echo"0";//添加购物车失败
      }else{
        echo "1";//添加购物车成功
      }
      mysql_close($conn);
    }
?>
