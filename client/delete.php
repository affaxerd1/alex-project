<?php
     $conn= mysqli_connect("localhost","root","","alex db");
    if(isset($_POST['delete']))
    {
      $id=$_POST['id'];
      $sql ="DELETE FROM post WHERE id='$id'";
      $query=mysqli_query($conn, $sql);  
      
      if($query)
      {
        echo '<script>alert("post Deleted");</script>';
        header("location:client.php? deletedsuccefully");
      }
    }

   
  ?>

