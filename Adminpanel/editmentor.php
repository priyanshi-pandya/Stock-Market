<?php
    include "connectiondb.inc.php";


    if(isset($_POST['msubmit'])){

        $title=mysqli_real_escape_string($conn,$_POST['topic']);
    
        
        $date= mysqli_real_escape_string($conn,$_POST['men_date']);
        $des= mysqli_real_escape_string($conn,$_POST['des']); 
        $price= mysqli_real_escape_string($conn,$_POST['price']); 
       
        $p_id= mysqli_real_escape_string($conn,$_POST['mid']);
  

           
        

            $isql="UPDATE mentorship SET mentorship_topic =?,mentorship_date =?,description=?,mentorship_price=? WHERE mentorship_id=$p_id";
            $stmt=mysqli_stmt_init($conn);
    
            if(!mysqli_stmt_prepare($stmt,$isql)){
                echo "SQL ERROR";
                exit();
            }
            else{
                mysqli_stmt_bind_param($stmt,"ssss",$title,$date,$des,$price);
                mysqli_stmt_execute($stmt);
                
                
            }
            
            header("Location: mentorship.php");
        
    }




?>