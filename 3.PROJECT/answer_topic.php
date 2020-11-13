<?php

require("config1.php");

$comment=$_POST['comment'];
$a_name=$_POST['a_name'];
$sql="INSERT INTO forum_answer (comment,a_name)VALUES('$comment','$a_name')";
$result=mysqli_query($conn,$sql);

if($result){
echo "Thêm Thành Công<BR>";
echo "<a href=view_topic.php>Xem Bài Viết</a>";
}
else {
echo "ERROR";
}
?>
