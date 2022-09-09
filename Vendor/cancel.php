<?php
     $conn= mysqli_connect("localhost","root","","alex db");
    if(isset($_POST['cancel']))
    {

        
      $id=$_POST['id'];
      $sql ="UPDATE post SET state=0 WHERE id='$id'";
      
      $query=mysqli_query($conn, $sql);  


      
      if($query)
      {
        echo '<script>alert("job cancelled");</script>';
        header("location:vendor.php?jobcancelled");
      }
    }

   
  ?>