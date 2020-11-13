<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
    
    <div class="signup">

        <h2> Đăng ký </h2>
        <form action="register_submit.php" method="POST">
        <div class="enter2">
            <img src=" images/user.PNG">
            <input type = "text" name = "username" placeholder = "  Họ tên người dùng "  >
         </div>

         <div class="enter2">
            <img src=" images/email.PNG">
            <input type = "text" name = "email" placeholder = " Google mail "  >
         </div>

         <div class="enter2">
            <img src=" images/pass.PNG">
            <input type ="password" name = "password" placeholder = "Nhập mật khẩu" >
        </div>

        <div class="enter2">
            <img src=" images/pass.PNG">
            <input type ="password" name = "repassword" placeholder = "Nhập lại mật khẩu" >
        </div>

        <button type="submit" name="submit"> Đăng ký </button>

    </div>

</body>
</html>