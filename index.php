<?php
if(isset($_POST["admin_ID"])){
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server,$username,$password);
if(!$con){
    die("Connection to this DB failed due to".mysqli_connect_error());
}
//echo "Success connecting to DB";

$admin_ID = $_POST['admin_ID'];
$pass = $_POST['pass'];

$sql = "INSERT INTO `admin_id`.`admin` (`Admin_ID`, `Password`, `dt`) VALUES ('$admin_ID', '$pass', current_timestamp());";
//echo $sql;

if($con->query($sql)==true){
    //echo "Success";
}
else{
    echo "Error: $sql <br> $con->error";
}

$con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LookMyShow</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <img class="bg" src="movies.jpg" alt="background">
     <img class="logo" src="logo.png" alt="logo">
     <div class="container">
        <h3><br> <br> <br> <br>
             Admin Login <br></h3>
             <br>
             <br>
         <p> Enter Login Details</p>
         <br>
         <form action="index.php" method="POST">
         
        <input type="text" name="admin_ID" id ="admin_ID" placeholder="Enter your Admin ID">
        <br>
        <input type="text" name="pass" id ="Pass" placeholder="Enter your Password">
         <br>
        <button class="btn">Login</button>
        
         </form>
     </div>
     <script src="index.js"></script>
     <!--INSERT INTO `admin` (`sno`, `Admin ID`, `Password`, `dt`) VALUES ('1', '123456', 'testadmin1', current_timestamp());-->
</body>
</html>