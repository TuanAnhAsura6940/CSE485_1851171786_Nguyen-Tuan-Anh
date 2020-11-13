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
        <tr>
            <th>Bài Viết Vào Lúc</th>
            <td bgcolor="#F8F7F1"><?php echo $result->datetime; ?></td>
        </tr>
    </thead>
    <tbody>
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
              <th></th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td scope="row"></td>
              <td>Nhập Bình Luận:</td>
              <td><input id="comment" type="text" placeholder="Bình Luận"></td>
              <td><button name ="button" type="button" href='answer_topic.php'>Bình Luận</button></td>
              <td>Tên Hiển Thị:<input id=a_name></td>
          </tr>
      </tbody>
  </table>
</body>
</html>