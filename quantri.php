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
        <label for="">Tìm kiếm người dùng:</label><br>
        <input type="search" name="search"> <br>
        <input type="submit" name="btn_submit" value="Tìm kiếm"> <br> <br>
    </form>
    <?php
    include("conn.php");
    if(isset($_POST['btn_submit']))
    {
        $search = mysqli_real_escape_string($conn,$_POST['search']);
        $sql3= "SELECT * FROM users WHERE name ='$search'";
        $query3=mysqli_query($conn,$sql3);
        $num3=mysqli_num_rows($query3);
        if($num3==0){
            echo "Không tìm thấy tài khoản";
        } else{
            while($row=mysqli_fetch_assoc($query3)){
                echo "<b> id:</b> " . $row["id"]. " - <b>name:</b> " . $row["name"]." - <b> password:</b> " . $row["password"];
            }
        }
    }
?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="">
    <label for="">Đăng bài: </label> <br>
        <input type="text"name="new">
    </form>
</body>
</html>