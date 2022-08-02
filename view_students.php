<?php
error_reporting(0);
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



$sql ="SELECT * FROM user WHERE usertype = 'student'";
$result =mysqli_query($data,$sql);

    

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin-home-page</title>

    <style type="text/css">

        .tbl_design{
            padding: 20px;
            background-color: royalblue;
        }
        .tbl_dsgn{
            padding: 20px;
            background-color: skyblue;
           
        }
    
        h1{
            background-color: #404243;
            color: white;
            width: 730px;
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
 <center>
 <div class="main_container">
    <h1 style="color:white;">View students</h1>
    <?php
    if($_SESSION['message']){

        echo $_SESSION['message'];
    }
    unset($_SESSION['message']);
    ?>
    <table  border="1px;">
        <tr>
            <th class="tbl_design" >username</th>
            <th class="tbl_design" >phone number</th>
            <th class="tbl_design" >email</th>
            <th class="tbl_design" >password</th>
            <th class="tbl_design" >delete</th>
            <th class="tbl_design" >update</th>
           
            
        </tr>
        <?php
    while($infor = $result-> fetch_assoc()){

    
    ?>
        <tr>
            <td class="tbl_dsgn"><?php echo "{$infor['username']}"?></td>
            <td class="tbl_dsgn"><?php echo "{$infor['phone']}"?></td>
            <td class="tbl_dsgn"><?php echo "{$infor['email']}"?></td>
            <td class="tbl_dsgn"><?php echo "{$infor['password']}"?></td>
            <td class="tbl_dsgn"><?php echo "<a class= 'btn btn-danger' onClick =\" javascript:return confirm('are you sure you want to remove data');\" href= ' delete.php?student_id={$infor['id']}'>delete</a>" ?></td>
            <td class="tbl_dsgn"><?php echo "<a class= 'btn btn-primary'href ='update_student.php?student_id={$infor['id']}'> update</a>";?></td>
          
        </tr>
        <?php
    }
        ?>
    </table>
 </div>
 </center>
</body>
</html