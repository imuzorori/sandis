

<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php");
}
elseif($_SESSION['usertype']=='administrator'){
    header("location:login.php");
}

$host = "localhost";
$user ="root";
$password="";
$db="sandisdb";

$data = mysqli_connect($host,$user,$password,$db);
$name = $_SESSION['username'];
$sql = "SELECT * FROM user WHERE username ='$name' ";
$result = mysqli_query($data,$sql);
$infor =mysqli_fetch_assoc( $result);
if(isset($_POST['update_profile'])){
    
    $user_phone = $_POST['phone'];
    $user_email = $_POST['email'];
    $user_password= $_POST['password'];
    $sql2 = "UPDATE user SET phone = '$user_phone', email = ' $user_email', password = '$user_password' WHERE username = '$name'";
    $result2 = mysqli_query($data,$sql2);  
    if($result2){
        header("location:profile.php");
    }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student-home-page</title>

<style type="text/css">

    label{
        display: inline-block;
        text-align: right;
        width: 100px;
        padding-top: 10px;
        padding-bottom: 10px;
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
    .form{
            background-color: skyblue;
            width: 400px;
            padding-bottom: 70px;
            padding-top: 70px;
            border-radius: 5px;
    }
</style>
    <?php
    include 'student.css.php';
    ?>
  
</head>
<body>
    <?php
    include 'student_sidebar.php';
    
    ?>
 <center>
 <div class="main_container">
    <h1> update profile</h1>
   
    <form action="#" method="POST">
    <div class="form">
    <div class="edit">
        <label for="phone">phone:</label>
        <input type="number" name="phone"  value="<?php echo "{$infor['phone']}";?>">
    </div>
    <div class="edit">
        <label for="email">email:</label>
        <input type="email" name="email" value="<?php echo "{$infor['email']}";?>">
    </div>
    <div class="edit">
        <label for="password">password:</label>
        <input type="text" name="password" value="<?php echo "{$infor['password']}";?>">
    </div>
    <div class="edit">
       
        <input type="submit" class="btn btn-primary" name="update_profile" value="update">
    </div>
</div>
    </form>

 </div>
 </center>
</body>
</html>
</html>