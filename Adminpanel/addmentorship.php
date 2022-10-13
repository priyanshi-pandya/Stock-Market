<?php
    include "connectiondb.inc.php";


    if(isset($_POST['mentorshipsubmit'])){

        $course=mysqli_real_escape_string($conn,$_POST['mname']);
       $date= mysqli_real_escape_string($conn,$_POST['mdate']);
        $description=mysqli_real_escape_string($conn ,$_POST['des']);
        $price=mysqli_real_escape_string($conn,$_POST['price']);
        
       
        
        $isql="INSERT INTO mentorship(mentorship_id,mentorship_topic,mentorship_date,description,mentorship_price) VALUES (DEFAULT,?,?,?,?);";
                $stmt=mysqli_stmt_init($conn);

                if(!mysqli_stmt_prepare($stmt,$isql)){
                    echo "SQL ERROR";
                    exit();
                }
                else{
                    mysqli_stmt_bind_param($stmt,"ssss",$course,$date,$description,$price);
                    mysqli_stmt_execute($stmt);
                }
        
        header("Location: mentorship.php");
    }




?>