
<!-- Blogs -->
<section id="blogs">
<div class="container py-4">
        
        <h2 class="font-rubik font-size-20 color-primary m-l-50"  style="margin-left: 40%;"> Laundry</h2>

        <hr>

       

        <div class="owl-carousel owl-theme">
        <?php
        $conn=mysqli_connect("localhost","root","","alex db");
        $sql="SELECT * FROM post where category = 2";
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
                    <label><>Time: </label>
                    <div id="btn-div">  <button id="button" class="button color-second-bg" style="border-radius: 5px; color: #fff; padding:5px 5px; border:none; ">Take Job</button></div>
        
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
        $sql="SELECT * FROM post where category = 1";
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
                    <label><>Time: </label>
                    <div id="btn-div">  <button id="button" class="button color-second-bg" style="border-radius: 5px; color: #fff; padding:5px 5px; border:none; ">Take Job</button></div>
        
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
        $sql="SELECT * FROM post where category = 3";
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
                    <label><>Time: </label>
                    <div id="btn-div">  <button id="button" class="button color-second-bg" style="border-radius: 5px; color: #fff; padding:5px 5px; border:none; ">Take Job</button></div>
        
                </div>
            </div>
            <?php
        }
        ?> 

            
        
        </div>
       
       
    </div>

    </section>
<!-- !Blogs -->
