<?php
    ob_start();
    // include header.php file
    include ('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAMA OSHA AND DAYTIME NANNIES MANAGEMENT SYSTEM</title>

    <!-- Latest compiled and minified CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="style1.css" rel="stylesheet" />
</head>

        
  
    <body>

        <?php
        $conn=mysqli_connect("localhost","root","","alex db");
         $id=$_POST['id'];
         $sql="SELECT * FROM post WHERE id='$id'";
         $query=mysqli_query($conn, $sql);

         if($query){
            while($row=mysqli_fetch_assoc($query)){
    ?>
  
                <div class="active-jobs">
                    <div >
                        <h2 id="card-header">Update</h2>
                    </div>
                    <div class="jobs">
                
                        <div class="cards">
                        
                            <div>
                            <form action="post.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                <label>Job title</label>
                                <br>
                                <input type="text" name="title"  class="input1" id="category" value="<?php echo $row['title']?>"  required>
                                <br>
                                <br>
                                <label>category</label>
                                <br>
                                <select name="category" class="input1" required>
                                    <option selected disabled value="">choose one</option>
                                    <option value="1">baby care</option>
                                    <option value="2">Laundry</option>
                                    <option value="3">House cleaning</option>
                                
                                </select>
                                <br>
                                <br>
                                <label>Duration</label>
                                <br>
                                <input type="numbers" name="duration"  class="input1" id="duration" value="<?php echo $row['duration']?>" required>
                                <br>
                                <br>
                                <label>Location</label>
                                <br>
                                <input type="text"  name="location" class="input1" id="location" value="<?php echo $row['location']?>" required>
                                <br>
                                <br>
                                <label>cost</label>
                                <br>
                                <input type="number" name="cost" class="input1" id="cost" value="<?php echo $row['cost'] ?>" required>
                                <br>
                                <br>
                                <label>Tel</label>
                                <br>
                                <input type="tel" name="tel" class="input1" id="tel" value="<?php echo $row['tel'] ?>" required>
                                <br>
                                <br>
                                <div class="submit1">
                                    <input type="submit" name="update"  class="submit" value="Update" >
                                  <!--  <a href="client.php" class="delete">Cancel</a> -->
                                   

                                </div>
                               
                                
                            </form>

                            <?php 
                             $conn=mysqli_connect("localhost","root","","alex db");
                            
                               if(isset($_POST['update'])){
                                 $title =$_POST['title'];
                                 $category =$_POST['category'];
                                 $duration =$_POST['duration'];
                                 $location =$_POST['location'];
                                 $cost =$_POST['cost'];
                                 $tel =$_POST['tel'];
                               
                            $sql="UPDATE post SET title='$title', category='$category', duration='$duration', location='$location', cost='$cost', tel='$tel' WHERE id='$id'" ;
                            $query=mysqli_query($conn, $sql);
                            if($query){
                                echo "<script> alert('data updated')</script>";
                                header("location:client.php?updatesuccessful");
                            }
                            else {
                                echo "<script> alert('data not updated')</script>";
                                header("location:update.php?updatenotsuccesful");
                            };

                                 

                        }

                            ?>
                            
                            </div>
                        
                        

                            
            
                        </div>
                    </div>


                

                
                    
                    
                </div>

                <?php
        

    }
}
         ?>
<?php

       
// include footer.php file
include ('footer.php');
?>

</html>