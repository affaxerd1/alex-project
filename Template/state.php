<?php
     $conn= mysqli_connect("localhost","root","","alex db");
    if(isset($_POST['state']))
    {

        
      $id=$_POST['id'];
      $state=$_POST['input'];
      $sql ="INSERT INTO post(state) values($state)";
      $query=mysqli_query($conn, $sql);  


      
      if($query)
      {
        echo '<script>alert("post Deleted");</script>';
        header("location:vendor.php?jobtaken");
      }
    }

   
  ?>