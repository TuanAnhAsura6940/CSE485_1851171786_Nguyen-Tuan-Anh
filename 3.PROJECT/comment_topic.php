<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topic</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body{
        background-image:url("https://img4.thuthuatphanmem.vn/uploads/2020/07/05/hinh-anh-background-mau-sac-that-dep_034909644.jpg");
    }
</style>
<?php

require("config.php");
$id = $_GET['id'];
$list = mysqli_query($conn,"SELECT * FROM `forum_question` WHERE id = $id") or die ("Lỗi Truy Vấn");
$result = mysqli_fetch_object($list);
?>
<table> 
    <thead class="table1">
        <?php 
            ?>
        
    </thead>
    <tbody>
    <tr>
            <th>Bài Viết Vào Lúc</th>
            <td><label for="label1" cols="10" row="1" border="1"></label></td>
            <td bgcolor="#F8F7F1"><label><?php echo $result->datetime; ?></label></td>
        </tr>
        <tr>
            <td>Chủ Đề </td>
            <td><label for="label1" cols="10" row="1" border="1"></label></td>
            <td bgcolor="#F8F7F1"><label><?php echo $result->topic; ?></label></td>
        </tr>
        <tr>
            <td>Tên Người Đăng</td>
            <td><label for="label2" cols="10" row="3"></label></td>
            <td bgcolor="#F8F7F1"><?php echo $result->name; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><label for="label3" cols="10" row="3"></label></td>
            <td bgcolor="#F8F7F1"><?php echo $result->email; ?></td>
        </tr>
        <tr>
            <td>Nội Dung</td>
            <td><label for="label4" cols="100" row="40"></label></td>
            <td bgcolor="#F8F7F1"><p class="c" ><?php echo $result->detail; ?></p></td>
        </tr>

<?php

        
// require("config.php");
// $list = mysqli_query($conn,"SELECT* FROM forum_question") or die ("Lỗi Truy Vấn");
// //Xuất Nội dung ứng với id của bài viết
// //
?>
    </tbody>

</table>
<body>
  <table class="table2">
      <thead>
          <tr>
              <th>Các Bình Luận</th>
              <table>

<?php

$list = mysqli_query($conn,"SELECT* FROM forum_answer") or die ("Lỗi Truy Vấn");
$i = 1;
while ($r = mysqli_fetch_array($list)) {
    echo "<tr>";
    echo "<td>" . $i . "</td>";
    echo "<td>" . $r["a_name"] . "</td>"; 
    echo "<td class = 'text'>" . $r["comment"] . "</td>";
    echo "<td>" . $r["datetime"] . "</td>";
    $i++;
}
?>
              </table>
              
          </tr>
      </thead>
      <tbody>
          <form action="answer_topic.php" method="post">
            <label for="comment">Bình Luận:</label>
            <input type="text" id="comment" name="comment"><br><br>
            <label for="a_name">Tên Hiển Thị:</label>
            <input type="text" id="a_name" name="a_name"><br><br>
            <input type="submit" value="Bình Luận">
</form>
      </tbody>
  </table>
</body>
</html>