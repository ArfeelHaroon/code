<?php 
require('../inc/db.php');
?>
<?php 
   if(isset($_GET['id'])){
    $id = $_GET['id'];
   }else{
    header('location:../table.php');
   }
   $sql=""
?>