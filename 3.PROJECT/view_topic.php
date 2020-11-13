<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xem Bài Viết</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>
<html class="container">
     <header>
         <a href="index.php"><img src="img/logo2.jpg" width="600" height="100" alt=""></a>
     </header>
     <nav>
            <div class="menu">
               <ul>
                
                   <li><a href='forum.php'>Diễn Đàn</a></li>
                   <li><a href='create_topic.php'>Thêm Bài Viết</a></li>
                   <li><a href='view_topic.php'>Xem Bài Viết</a></li>
                   <li><a href="login.php">Đăng Nhập</a></li>
                   <li><a href="register.php">Đăng Ký</a></li>

               </ul>
            </div>
            <div class="search">
                <input type="search" placeholder="Search">
                <button>Tìm kiếm</button>
            </div>
        </nav>
</body>
<table border="1";>
    <style>
        table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  
}
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 15px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
    </style>
<tr>
        <th>STT</th>
        <th>Chủ Đề</th>
        <th>Nội Dung</th>
        <th>Tên Người Đăng</th>
        <th>Email</th>
        <th>Lượt Xem</th>
        <th>Trả Lời</th>
        <th>       </th>

</tr>
<?php
require("config1.php");
$list = mysqli_query($conn,"SELECT* FROM forum_question") or die ("Lỗi Truy Vấn");
$i = 1;
while ($r = mysqli_fetch_array($list)) {
    echo "<tr>";
    echo "<td>" . $i . "</td>";
    echo "<td>" . $r["topic"] . "</td>"; 
    echo "<td class = 'text'>" . $r["detail"] . "</td>";
    echo "<td>" . $r["name"] . "</td>";
    echo "<td>" . $r["email"] . "</td>";
    echo "<td>" . $r["view"] . "</td>";
    echo "<td>" . $r["reply"] . "</td>";
    echo "<td><a href='comment_topic.php?id=".$r['id']."'>Bình Luận</a>";
    //Bấm vào binh luận ở dòng nào thì lấy id ở dòng đấy , vào trang mới hiện bài viết
    $i++;
}
?>
</table>
</html>
