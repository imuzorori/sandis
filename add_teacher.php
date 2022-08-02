<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php");
}
elseif($_SESSION['usertype']=='student'){
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
if(isset($_POST['add_teacher'])){
    
    $teacher_name = $_POST['name'];
    $teacher_description = $_POST['description'];
    $teacher_image= $_FILES['image']['name'];
    $dst = "./imgs/".$teacher_image;
    $dst_db= "imgs/".$teacher_image;
    move_uploaded_file($_FILES['image']['name'], $dst);




    $sql= "INSERT INTO teacher_details  ( teacher_name, teacher_description, teacher_image) VALUES(' $teacher_name', '$teacher_description','$dst_db')";
    $result = mysqli_query($data,$sql);  
    if($result){
        header('location:add_teacher.php');
    }
   
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add teacher</title>
    <style type="text/css">
     .teacher{
            background-color: skyblue;
           padding-top: 70px;
           padding-bottom: 70px;
           width: 500px;
           border-radius: 5px;
        }
        label{
        display: inline-block;
        text-align: right;
        width: 100px;
        padding-top: 10px;
        padding-bottom: 10px;
        }
        .tech{
            padding: 10px;
        }
        .tech input{
            height: 30px;
        }
        h1{
        background-color: #CBE0ED;
            color: white;
            width: 500px;
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
    <h1>add teacher</h1>
<div class="teacher">

<form action="#" method="POST" enctype="multipart/form-data">
<div class="form">
    <div class="tech">
        <label for=teachername">teacher name:</label>
        <input type="text" name="name"  >
    </div>
    <div class="tech">
        <label for="description">description:</label>
       <textarea name="description" id="" cols="30" rows="10"></textarea>
    </div>
    <div class="tech">
        <label for="image">image:</label>
        <input type="file" name="image">
    </div>
    <tech class="tech">
       
        <input type="submit" class="btn btn-primary" name="add_teacher" value="add teacher">
    </tech
</form>
</div>

    </center>
 </div>
</body>
</html>