<?php
    include "connectiondb.inc.php";


    if(isset($_POST['psubmit'])){

        $title=mysqli_real_escape_string($conn,$_POST['title']);
    
        
        $des= mysqli_real_escape_string($conn,$_POST['des']);
        $price= mysqli_real_escape_string($conn,$_POST['price']); 
       
        $p_id= mysqli_real_escape_string($conn,$_POST['pid']);
  

           
        

            $isql="UPDATE peicepage SET c_name=?,description=?,price=? WHERE price_id=$p_id";
            $stmt=mysqli_stmt_init($conn);
    
            if(!mysqli_stmt_prepare($stmt,$isql)){
                echo "SQL ERROR";
                exit();
            }
            else{
                mysqli_stmt_bind_param($stmt,"sss",$title,$des,$price);
                mysqli_stmt_execute($stmt);
                
                
            }
            
            header("Location: pricing.php");
        
    }




?>