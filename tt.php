<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php include("conn.php")?>;
    <form action="" method="post">
        <label for="">Tìm kiếm người dùng:</label><br>
        <input type="search" name="search"> <br>
        <input type="submit" name="btn_submit" value="Tìm kiếm"> <br> <br>
    </form>
    <table border="1">
        <?php
            if(isset($_POST['btn_submit'])){
                $search = mysqli_real_escape_string($conn,$_POST['search']);
                $sql5 = "SELECT * FROM user WHERE name ='$search'";
                $query5 = mysqli_query($conn,$sql5);
                if(mysqli_num_rows($query5)==0){
                    echo "ko tim thay tk";
                } else{
                    
                }
            }
        ?>
        
        <tr>
            <td>id</td>
            <td>name    </td>
            <td>password</td>
        </tr>
        <tr>
            <td>$row</td>
        </tr>
    </table>
</body>
</html>