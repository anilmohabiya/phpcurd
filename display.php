<?php
 include 'connect.php';
?>


<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">    
<a href="user.php" class="btn btn-success my-5">add user</a>
    <table class="table table-bordered">
    <thead>
      <tr>
      <th>sl no</th>
        <th>name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Password</th>
        <th>operation</th>
      </tr>
    </thead>
    <tbody>
     
     
     <?php
         $sql ="select * from `curd`";
         $result =mysqli_query($con, $sql);
         if($result){
            while($row=mysqli_fetch_assoc($result)){
             $id= $row['id'];
             $name=$row['name'];
             $email=$row['email'];
             $mobile=$row['mobile'];
             $password=$row['password'];

             echo' <tr>
             <td>'.$id.'</td>
             <td>'.$name.'</td>
           <td>'.$email.'</td>
           <td>'.$mobile.'</td>
           <td>'.$password.'</td>
           <td>
           
<a href="update.php? updateid='.$id.'" class="btn btn-success ">update</a>

<a href="delete.php?deleteid='.$id.'" class="btn btn-danger ">delete</a>
           </td>
         </tr>';
            }
         }

     ?>


    </tbody>
  </table>
</div>


</body>
</html>