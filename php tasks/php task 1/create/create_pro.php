<?php 
  require('../inc/db.php');
?>
<?php 
    $first_name= $_POST['first_name'];
    $last_name= $_POST['last_name'];
    $email= $_POST['email'];
    $address= $_POST['address'];
    $phone_number = $_POST['phone_number'];
    $status= $_POST['status'];


    $sql = "INSERT INTO user_detail SET 
           first_name = '$first_name',
           last_name = '$last_name',
           email = '$email',
           address = '$address',
           phone_number = '$phone_number',
           status = '$status'
           ";
         if($query = mysqli_query($conn,$sql)){
            header("location:../table.php");
         }else{
            die('error');
         }  
    
?>