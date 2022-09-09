<?php
     $conn= mysqli_connect("localhost","root","","alex db");
    if(isset($_POST['state']))
    {

        
      $id=$_POST['id'];
      $sql ="UPDATE post SET state=1 WHERE id='$id'";
      
      $query=mysqli_query($conn, $sql);  


      
      if($query)
      {
        echo '<script>alert("post Deleted");</script>';
        header("location:vendor/vendor.php?jobtaken");
      }
    }

   
  ?>