<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
 <label for="">Tài Khoản</label><br>
 <input type="text" name="name"><br>
 <label for="">Password</label><br>
 <input type="password" name="password"><br>
 <input type="submit" name="submit" value="đăng ký" ><br>
 <label for=""> Bạn đã có tài khoản <a href="dangnhap.php">Đăng nhập</a></label><br>

</body>
</html>
<?php 
    include("conn.php");

    if(isset($_POST['submit'])){
        $name=mysqli_real_escape_string($conn,$_POST['name']);
        $password=mysqli_real_escape_string($conn,$_POST['password']);
        $password=md5($password);
        $sql1=" SELECT * FROM users WHERE name='$name'";
        $query1=mysqli_query($conn,$sql1);
            if(mysqli_num_rows($query1)!=0){
                echo "tài khoản đã tồn tại";
            } else{
                $sql2="INSERT INTO users(name,password) VALUES('$name','$password')";
                $query2=mysqli_query($conn,$sql2);
                echo ("đăng kí thành công tài khoản:".$name);
            }
    }
?>