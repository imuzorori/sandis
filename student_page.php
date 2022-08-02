

<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php");
}
elseif($_SESSION['usertype']=='administrator'){
    header("location:login.php");
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student-home-page</title>
    <?php
    include 'student.css.php';
    ?>

</head>
<body>
    <?php
    include 'student_sidebar.php';
    
    ?>
 <div class="main_container">
    <h1>main fuction here</h1>
    <p>Manchester United made it three wins out of three this pre-season with a comfortable victory over Crystal Palace in Melbourne.

Anthony Martial, Marcus Rashford and Jadon Sancho all found the back of the net to give the Reds a commanding lead. However a header from Joel Ward and a sending off for Will Fish took some of the gloss off the scoreline.

The early stages of the contest were overshadowed by more boos for the Reds captain Harry Maguire. Before a ball was kicked, the 29-year-old was jeered by fans in the MCG and he received a similar treatment following his first few touches on Tuesday.

Meanwhile Frenkie de Jong was spotted training with Barcelona on Tuesday during their tour of the United States. The Dutchman was all smiles during the session as the transfer saga with United rumbles on.

Last month United agreed a deal in principle with Barca for De Jong. However, since then progress has been limited on the move.</p>
 </div>
</body>
</html>
</html>