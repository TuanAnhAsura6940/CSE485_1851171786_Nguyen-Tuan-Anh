<?php

require("config1.php");
$topic=$_POST['topic'];
$detail=$_POST['detail'];
$name=$_POST['name'];
$email=$_POST['email'];

$datetime=date("d/m/y h:i:s"); 

$sql="INSERT INTO forum_question (topic, detail, name, email, datetime)VALUES('$topic', '$detail', '$name', '$email', '$datetime')";
$result=mysqli_query($conn,$sql);

if($result){
echo "Thêm Thành Công<BR>";
echo "<a href=view_topic.php>Xem Bài Viết</a>";
}
else {
echo "ERROR";
}
?>
