<?php

require("config.php");

$comment=$_POST['comment'];
$a_name=$_POST['a_name'];
$datetime=date("d/m/y h:i:s"); 
$sql="INSERT INTO forum_answer (comment,name,datetime)VALUES('$comment', '$a_name', '$datetime')";
$result=mysqli_query($conn,$sql);

if($result){
echo "Thêm Thành Công<BR>";
echo "<a href=view_topic.php>Xem Bài Viết</a>";
}
else {
echo "ERROR";
}
?>
