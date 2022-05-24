<?php
 include 'connect.php';

 if (isset($_POST['submit'])){
     $name = $_POST['name'];
     $email =$_POST['email'];
     $mobile =$_POST['mobile'];
     $password=$_POST['password'];

     $sql = "insert into `curd` (name,email,mobile, password) values('$name','$email','$mobile','$password')";
     $result =mysqli_query($con, $sql);
     if($result){
        // echo "data save successfully";
        header('location:display.php');
         
     }else{
        die(mysqli_error($con));
        
     }
 }


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>User form</h2>
  <form method="POST" action="">
  <div class="mb-3 mt-3">
      <label for="name">Name</label>
      <input type="text" class="form-control"  placeholder="Enter  name" name="name">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3 mt-3">
      <label for="mobile">Mobile:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Mobile" name="mobile">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
 
    <button name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
