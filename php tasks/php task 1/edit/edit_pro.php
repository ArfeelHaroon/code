<?php 
  require('../inc/db.php');
  if(isset($_GET['id']))
  {
    $id = $_GET['id'];
  }

  
?>
<?php 
    $first_name= $_POST['first_name'];
    $last_name= $_POST['last_name'];
    $email= $_POST['email'];
    $address= $_POST['address'];
    $phone_number = $_POST['phone_number'];
    $status= $_POST['status'];

    $sql = "UPDATE user_detail SET 
           first_name = '$first_name',
           last_name = '$last_name',
           email = '$email',
           address = '$address',
           phone_number = '$phone_number',
           status = '$status'
           WHERE id = '$id'

           ";
         if($query = mysqli_query($conn,$sql)){
            header("location:../table.php");
         }else{
            die('error');
         }  
    
?>