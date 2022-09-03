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

    <div id="vendor">
        <h1>Vendor Dashboard</h1>
    </div>

    <header class="bg-light" id="wrapper" >
        <div id="stats">
            <div class="payment">
                <h4>Statistics</h4>
                <label>Number of jobs taken:</label>
                <input type="text" class="input">
                <br>
                <br>
                <label>Number of jobs completed:</label>
                <input type="text" class="input">
                <br>
                <br>
                <label>Number of jobs cancelled:</label>
                <input type="text" class="input input-neg">
                <br>
                <br>
                <label>Overrall finish time:</label>
                <input type="text" class="input">
            </div>
            <div class="payment">
                <h4> net amount</h4>
                <label>Total Received</label>
                <input type="text" class="input">
                <br>
                <br>
                <label>pending Payments:</label>
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
                <label>Available amount:</label>
                <input type="text" class="input">
                <br>
                <br>
                <label>Withdrawals:</label>
                <input type="text" class="input">
                <br>
                <br>
                <label>Total payments:</label>
                <input type="text" class="input">
                <br>
                <br>
            </div>
        
         </div>
        

         </div>
         <div id="withdraw">

            <button> <a href="check out.html"></a>Withdraw</button>

        </div>
    </div>
        
    <div id="rep-wrapper">
        <h2 id="header"> Vendor reputation</h2>
        <div id="feedback-wrapper">
            <div class="rep">
                <label>Number of jobs completed:</label>
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
                <button class="btn"> view all</a></button>
            </div>

        </div>
            
    </header> 
    <bod>

        <div class="active-jobs">
            <div >
                <h2 id="card-header">Active Jobs</h2>
            </div>
            <div class="jobs">
        
                <div class="cards">
                    <h2>content</h2>
                    
    
                </div>
            </div>
            
            
        </div>
        <?php
        // include footer.php file
            include ('footer.php');
        ?>
</html>
