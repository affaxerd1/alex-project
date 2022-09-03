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

<header class="bg-light" id="wrapper" >
        <div id="stats">
            <div class="payment">
                <h4>Statistics</h4>
                <label>Number of Tasks provided:</label>
                <input type="text" class="input">
                <br>
                <br>
                <label>Completed Tasks:</label>
                <input type="text" class="input">
                <br>
                <br>
                <label>Cancelled Tasks:</label>
                <input type="text" class="input input-neg">
                <br>
                <br>
               
            </div>
            <div class="payment">
                <h4> net amount</h4>
                <label>Total Paid</label>
                <input type="text" class="input">
                <br>
                <br>
                <label>Cancelled payments:</label>
                <input type="text" class="input">
                <br>
                <br>
            </div>
            <div class="payment">
                <h4> Penalties</h4>
                <label>Penalties:</label>
                <input type="text" class="input input-neg">
                <br>
                <br>
                <label>Total Amount deducted:</label>
                <input type="text" class="input input-neg">
                <br>
                <br>
                
            </div>
            <div class="payment">
                <h4> Available</h4>
                <label>Current Balance:</label>
                <input type="text" class="input">
                <br>
                <br>
                <label>Total amount Deposited:</label>
                <input type="text" class="input">
                <br>
                <br>
                <label>Total payments made:</label>
                <input type="text" class="input">
                <br>
                <br>
            </div>
        
         </div>
        

         </div>
         <div id="Deposit">

            <button> Deposit</button>

        </div>
    </div>
        
    <div id="rep-wrapper">
        <h2 id="header2"> Client reputation</h2>
        <div id="feedback-wrapper">
            <div class="rep">
                <label>Number of Tasks</label>
                <input type="text" class="input">
            </div> 
            <div class="rep">
                 <label>Positive feedbacks:</label>
                 <input type="text" class="input">
                <br>
                 <button class="btn "> View all</button>


            </div>
            <div class="rep">
                <label>Negative feedback:</label>
                <input type="text"  class="input input-neg">
                <br>
                <button class="btn"> View all</button>
            </div>

        </div>
            
    </header> 
    <body>

        <div class="active-jobs">
            <div >
                <h2 id="card-header">Post a Job</h2>
            </div>
            <div class="jobs">
        
                <div class="cards">
                
                    <div>
                    <form action="post.php" method="post">
                        <label>Job title</label>
                        <br>
                        <input type="text" name="title"  class="input1" id="category" required>
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
                        <input type="numbers" name="duration"  class="input1" id="duration" required>
                        <br>
                        <br>
                        <label>Location</label>
                        <br>
                        <input type="text"  name="location" class="input1" id="location" required>
                        <br>
                        <br>
                        <label>cost</label>
                        <br>
                        <input type="number" name="cost" class="input1" id="cost" required>
                        <br>
                        <br>
                        <label>Time</label>
                        <br>
                        <input type="time" name="time" class="input1" id="time" required>
                        <br>
                        <br>
                        <div class="submit1">
                            <input type="submit" name="submit"  class="submit" value="Post" />
                        </div>
                    </form>
                    </div>
                   
                  

                    
    
                </div>
            </div>


            <div class="table">


                    <h2>Active Jobs</h2>
                   

                    <table>
                    <tr>
                        <th>Job title</th>
                        <th>category</th>
                        <th>Duration</th>
                        <th>Location</th>
                        <th>cost</th>
                        <th>Update</th>
                        <th>Delete</th>
                        <th>status</th>
                    </tr>

                    <?php
                                $conn= mysqli_connect("localhost","root","","alex db");
                                $sql="SELECT * FROM post";
                                $query=mysqli_query($conn,$sql);

                                foreach($query as $q)
                                {
                                ?>
            
                    <tr>
                        <td><?php echo $q['title'];?></td>
                        <td><?php echo $q['category'];?></td>
                        <td><?php echo $q['duration'];?></td>
                        <td><?php echo $q['location'];?></td>
                        <td><?php echo $q['cost'];?></td>
                        <td>
                        <div id="update">
                                <form action="delete.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $q['id']?>">
                                    <input type="submit" name="delete" id="bt2" class="btn btn-danger"  value="update"></input>
                                </form>
    
                        </div>
                        </td>
                        <td>
                        <div id="delete">
                                <form action="delete.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $q['id']?>">
                                    <input type="submit" name="delete" id="bt2" class="btn btn-danger"  value="delete"></input>
                                </form>
    
                        </div>
                        </td>
                        <td> <div id="status">
                                <form action="delete.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $q['id']?>">
                                    <input type="submit" name="delete" id="bt2" class="btn btn-danger"  value="status"></input>
                                </form>
    
                            </div>
                        </td>
                        
                    </tr>


                    <?php
                        }
                        ?>
                   
                    </table>



            </div>

            <div class="active-jobs">
                <div >
                    <h2 id="card-header"> </h2>
                </div>
                
            
            
        </div>

<?php
// include footer.php file
include ('footer.php');
?>

</html>