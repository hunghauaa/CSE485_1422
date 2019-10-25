<?php
    session_start();
?>
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
<label for="">Tài khoản</label><br>
<input type="text" name="name"><br>
<label for="">Mật khẩu</label><br>
<input type="password" name="password"><br>
<input type="submit" name="submit" value="đăng nhập"> <br>
<label for="">Bạn chưa có tài khoản ? <a href="dangky.php">Đăng ký</a></label>
 </form>
</body>
</html>
<?php 
    include("conn.php");
    if(isset($_POST['submit']))
    {
            $name = mysqli_real_escape_string($conn,$_POST['name']);
            $password = mysqli_real_escape_string($conn,$_POST['password']);
            $password=md5($password);
            $sql = "SELECT * FROM users WHERE name ='$name' and password ='$password'";
            $query=mysqli_query($conn,$sql);
            $num=mysqli_num_rows($query);
                    if($num!=0){
                    //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
                    $_SESSION['name'] = $name;
                        if($name == 'admin' && $password == 'admin'){
                            header('location:quantri.php');
                        } else{
                            // Thực thi hành động sau khi lưu thông tin vào session
                            // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                            header('Location:index2.php');
                        }
                    } else{
                        echo "Sai tên đăng nhập hoặc mật khẩu";
                    }
    }
?>

    