<?php
    include 'config.php';
    if(isset($POST['submit']) && $POST["username"] != ''   && $POST["email"] !='' && $POST["password"] !='' && $POST["repassword"] !=''){
       //thực hiện xử lý nút submit và điền đầy đủ thông tin
       $username = $_POST["username"];
       $email = $_POST["email"];
       $password = $_POST["password"];
       $repassword = $_POST["repassword"];
       if( $password != $repassword) {
           header("location:register.php");
       }
       $sql = "SELECT * FROM  user WHERE username='username' ";
       $old = mysqli_query($conn,$sql);
       $password = md5($password);
       if(mysqli_num_rows($old) > 0 ) {
           header("location:register.php");
       }
        $sql = "INSERT INTO user ( username , email , password ) VALUES ('$username' , '$email' , '$password' )";
        mysqli_query($conn,$sql);
        echo " Đã đăng ký thành công !";
    }else{
        header("location:register.php");
    }

?>