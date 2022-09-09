<?php
$conn=mysqli_connect("localhost", "root", "", "Alex db");

if(isset($_POST["submit"])){
    $title=$_POST["title"];
    $category=$_POST["category"];
    $duration=$_POST["duration"];
    $location=$_POST["location"];
    $cost=$_POST["cost"];
    $tel=$_POST['tel'];

    $sql="SELECT id from post where id=?";
    $stmt=mysqli_stmt_init($conn);   #initiate the stmt statement
     if(!mysqli_stmt_prepare($stmt, $sql))
        {
            header("Location:signup.php?sqlerror");
            exit();

        }

    else{
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultcheck=mysqli_stmt_num_rows($stmt);
            if ($resultcheck>0){
                header("location:sighup.php?error");
            }

            else {
                $sql="INSERT INTO post ( title, category, duration,location, cost, tel) VALUES (?, ?, ? , ?, ?,?)";
                $stmt=mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location:client.html?error");
                    exit();
                }
                else{
                    mysqli_stmt_bind_param($stmt, "ssisii", $title,$category,$duration,$location,$cost,$tel);
                    mysqli_stmt_execute($stmt);
                    header("Location:client.phps?signinsuccess");
                    exit();
                }

                
            

            }
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);

    }

?>




 
 

 