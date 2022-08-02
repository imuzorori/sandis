<?php
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


if(isset($_POST['add_student'])){
$user_name=$_POST['name'];
$user_phone=$_POST['phone'];
$user_email=$_POST['email'];
$user_password=$_POST['password'];
$usertype ="student";


$check ="SELECT * FROM user WHERE username = '$user_name'";
$check_user = mysqli_query($data,$check);
$row_count= mysqli_num_rows($check_user);
if($row_count ==1){
    echo "<script type ='text/javascript'>
    alert('user already exsit');
    </script>";
    
}
else{


$sql="INSERT INTO user (username,phone,email,usertype,password) 
      VALUES( '$user_name','$user_phone','$user_email','$usertype','$user_password')";

           $result=mysqli_query($data,$sql);
           if($result){
            echo "<script type ='text/javascript'>
            alert('data succefully uploaded');
            </script>";
           }
           else{
            echo "faild to upload data";
           }
        }


}
    


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin-home-page</title>

    <style type="text/css">

        label{
            display: inline;
            text-align: right;
            width: 100px;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        h1{
            text-transform: capitalize;
            background-color: #646160;
            width: 100%;
            padding: 10px;
            bottom: -10px;
            
        }
        .main_container{
           
            width: 50%;
            height: 450px ;
           padding-top: 20px;
           padding-bottom: 20px;
        }
        .add_student{
            background-color: #C1E0F2;
            height: 380px;
            border-radius: 10px;
            padding-top: 70px;
            padding-bottom: 70px;
        }
        form{
            padding: 20px;
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
 <center>
 <div class="main_container">
    <center>
    <h1>add student</h1>
    <div class="add_student">
   
        <form action="#" method="POST">
       

            <div class="details">
                <label for="username">Username:</label>
                <input type="text" name= "name">
            </div>
            <div class="details">
                <label for="phone"> Phone :</label>
                <input type="number" name= "phone">
            </div>
            <div class="details">
                <label for="email"> Email:</label>
                <input type="email" name= "email">
            </div>
            <div class="details">
                <label for="password"> Password :</label>
                <input type="text" name= "password">
            </div>
            <div class="details">
                <input type="submit" class="btn btn-primary" name= "addStudent" value="Add Student">
            </div>
        </form>
    </div>
    </center>
 </div>
 </center>
</body>
</html>