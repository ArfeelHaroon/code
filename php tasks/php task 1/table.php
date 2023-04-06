<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>user info</title>
  <!-- bootstrap css cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <!-- data table css cdn -->
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <!-- sweet alert CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<style>
  .dataTables_wrapper {
    width: 90%;
    margin: auto;
  }

  #myTable {
    margin-top: 3em;
    border-collapse: collapse;
  }

  .dataTables_filter {
    margin-bottom: 1em;
  }

  #myTable_length {
    margin-bottom: 1em;
  }

  thead {
    background-color: darkgrey;
    
  }

  

  #btn {
    margin-left: 85%;
  }

  div#action {
    display: flex;
  }

  .button,
  .badge {
    width: 5em;
    margin: 0 3px;
  }
</style>
<?php
include('./inc/db.php');

$sql = "SELECT * FROM user_detail";
$query = mysqli_query($conn, $sql);
$table = "";
while ($fetch = mysqli_fetch_assoc($query)) {
  if ($fetch['status'] == 1) {
    $status = " <span class='badge bg-success'>Acive</span>";
  } else {
    $status = "<span class='badge bg-danger'>Inacive</span>";

  }
  $table .= "
        
        <tr>
       <td>$fetch[id]</td>
       <td>$fetch[first_name]</td>
       <td>$fetch[last_name]</td>
       <td>$fetch[email]</td>
       <td>$fetch[address]</td>
       <td>$fetch[phone_number]</td>
       <td>$status</td>
       <td>
         <div id='action'>
       <a class='btn btn-secondary button' href='./edit/edit_form.php?id=$fetch[id]'>edit</a>
       <a class='btn btn-danger button' data_id='$fetch[id]'>delete</a> 
       </div>      
       </td>
       </tr>
     
    ";
}
?>

<body>
  <h1>User info!</h1>
  <button id="btn" type="button" class="btn btn-primary" onclick="window.location.href = './create/create.php'">Create
    New..</button>

  <hr>
  <table id='myTable'>
    <thead>
      <tr>
        <th>Id</th>
        <th>first_name</th>
        <th>last_name</th>
        <th>email</th>
        <th>address</th>
        <th>phone_number</th>
        <th>status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      echo $table;
      ?>
    </tbody>
  </table>
  <!-- jquert CDN -->
  <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
    crossorigin="anonymous"></script>
  <!-- Bootstrap CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <!-- data table js CDN -->
  <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>



  <script>
    let table = new DataTable('#myTable');
    // $(document).ready(function () {
    //   $('#myTable').DataTable();
    // });

  </script>

</body>

</html>