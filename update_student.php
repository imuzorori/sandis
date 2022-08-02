<?php

use LDAP\Result;

session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php");
}
elseif($_SESSION['usertype']=='student'){
    header("location:login.php");
}
$host="localhost";
$user ="root";
$password= "";
$db="sandisdb";
$data = mysqli_connect($host,$user,$password,$db);
$id= $_GET['student_id'];
$sql ="SELECT * FROM user WHERE id = '$id'";
$result =mysqli_query($data,$sql);
$info = $result-> fetch_assoc();
if(isset($_POST['update'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "UPDATE user SET username='$name', phone ='$phone',email='$email',password ='$password' WHERE id ='$id'";
    $result2 = mysqli_query($data,$query);
    if($result2){
        header("location:view_students.php");
    }

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update-student-page</title>

    <style type="text/css">

        label{
            display: inline-block;
            width: 100px;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .updates{
            background-color: skyblue;
            width: 400px;
            padding-bottom: 70px;
            padding-top: 70px;
            border-radius: 5px;
        }
        h1{
            background-color: #CBE0ED;
            color: white;
            width: 400px;
            padding: 10px;
            text-transform: capitalize;
            font-size: 20px;
            font-family: 'Times New Roman', Times, serif;
            font-weight: bold;
        }
    </style>
    <?php
    include('styles_css.php')
    ?>
</head>
<body>
<?php
include('admin_sidebare.php')
?>
 <div class="main_container">
    <center>
    <h1>update student</h1>
    <div class="updates">
        <form action="#" method="POST">

        <div class="content">
            <label for="username"> Username:</label>
            <input type="text" name="name" value="<?php echo "{$info['username']}";?>">
        </div>
        
        <div class="content">
            <label for="phone"> Phone:</label>
            <input type="number" name="phone" value="<?php echo "{$info['phone']}";?>">
        </div>
        
        <div class="content">
            <label for="email"> Email:</label>
            <input type="email " name="email" value="<?php echo "{$info['email']}";?>">
        </div>
        
        <div class="content">
            <label for="password"> Password:</label>
            <input type="text" name="password" value="<?php echo "{$info['password']}";?>">
        </div>
        
        <div class="content">
           
            <input type="submit" name="update" value="update" class="btn btn-primary">
        </div>
        </form>
    </div>
    </center>
 </div>
</body>
</html>