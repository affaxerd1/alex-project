
<!-- Blogs -->
<section id="blogs">
<div class="container py-4">
        
        <h2 class="font-rubik font-size-20 color-primary m-l-50"  style="margin-left: 40%;"> Laundry</h2>

        <hr>

       

        <div class="owl-carousel owl-theme">
        <?php
        $conn=mysqli_connect("localhost","root","","alex db");
        $sql="SELECT * FROM post where category = 2 and state=0";
        $query=mysqli_query($conn, $sql);
        foreach($query as $q)
        {


        ?>
            <div class="item">
                <div class="card border-0 font-rale mr-5" style="width: 18rem;">
                    <h2 class="card-title font-size-16"><h4 style="color: pink;"><?php echo $q['title'];?></h4></h2>
                    
                    <label><b>Location: </b> <?php echo $q['location'];?></label>
                    <label><b>Cost:   </b> <?php echo $q['cost'];?>$</label>
                    <label><b>Duration: </b> <?php echo $q['duration'] ;?> Hours</label>
                    <label><b>Tel:</b>  <?php echo $q['tel'] ;?> </label>
                    <div id="btn-div"> 
                        <form action="state.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $q['id']?>">
                                <input type="submit" name="state" id="button" class="button color-second-bg" style="border-radius: 5px; color: #fff; padding:5px 5px; border:none; " value="Take job"></input>
                        </form>
                    </div>
        
                </div>
            </div>
            <?php
        }
        ?>   
        
        </div>
       
       
    </div>
    <div class="container py-4">
        
        <h2 class="font-rubik font-size-20 color-primary m-l-50"  style="margin-left: 40%;"> Babycare</h2>

        <hr>

       

        <div class="owl-carousel owl-theme">
        <?php
        $conn=mysqli_connect("localhost","root","","alex db");
        $sql="SELECT * FROM post where category = 1 AND state=0";
        $query=mysqli_query($conn, $sql);
        foreach($query as $q)
        {


        ?>
            <div class="item">
                <div class="card border-0 font-rale mr-5" style="width: 18rem;">
                    <h2 class="card-title font-size-16"><h4 style="color: pink;"><?php echo $q['title'];?></h4></h2>
                    
                    <label><b>Location: </b> <?php echo $q['location'];?></label>
                    <label><b>Cost:   </b> <?php echo $q['cost'];?>$</label>
                    <label><b>Duration: </b> <?php echo $q['duration'] ;?> Hours</label>
                    <label><b>Tel:</b>  <?php echo $q['tel'] ;?></label>
                    <div id="btn-div"> 
                        <form action="state.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $q['id']?>">
                                <input type="submit" name="state" id="button" class="button color-second-bg" style="border-radius: 5px; color: #fff; padding:5px 5px; border:none; " value="Take job"></input>
                        </form>
                        
                
                    </div>
        
                </div>
            </div>
            <?php
        }
        ?>   
        
        </div>
       
       
    </div>

<div class="container py-4">
        
        <h2 class="font-rubik font-size-20 color-primary m-l-50"  style="margin-left: 40%;"> House Cleaning</h2>

        <hr>

       

        <div class="owl-carousel owl-theme">
        <?php
        $conn=mysqli_connect("localhost","root","","alex db");
        $sql="SELECT * FROM post where category = 3 AND state =0";
        $query=mysqli_query($conn, $sql);
        foreach($query as $q)
        {


        ?>
            <div class="item">
                <div class="card border-0 font-rale mr-5" style="width: 18rem;">
                    <h2 class="card-title font-size-16"><h4 style="color: pink;"><?php echo $q['title'];?></h4></h2>
                    
                    <label><b>Location: </b> <?php echo $q['location'];?></label>
                    <label><b>Cost:   </b> <?php echo $q['cost'];?>$</label>
                    <label><b>Duration: </b> <?php echo $q['duration'] ;?> Hours</label>
                    <label><b>Tel:</b>  <?php echo $q['tel'] ;?> </label>
                    <div id="btn-div"> 
                        <form action="state.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $q['id']?>">
                                <input type="hidden" name="input" value="1">
                                <input type="submit" name="state" id="button" class="button color-second-bg" style="border-radius: 5px; color: #fff; padding:5px 5px; border:none; " value="Take job"></input>
                        </form>   
                   </div>
        
                </div>
            </div>
            <?php
        }
        ?> 

            
        
        </div>
       
       
    </div>

    </section>
<!-- !Blogs -->
