<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        name : <input type="text" name="name"><br><br>
        E-mail : <input type="email" name="mail"><br><br>
        Location : <input type="text" name="city"><br><br>
        Mobile : <input type="number" name="phone"><br><br>
         <input type="submit" name="click">
    </form>
    <?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "adit";
    $conn  = mysqli_connect($server,$user,$password,$database);
    if(isset($_POST["click"]))
    {
        $aa = $_POST['name'];
        $ab = $_POST['mail'];
        $ac = $_POST['city'];
        $ad = $_POST['phone'];
        $query = "insert into students(name,mail,location,phone) values('$aa','$ab','$ac','$ad')";
        mysqli_query($conn,$query);
    }
    ?>
</body>
</html>