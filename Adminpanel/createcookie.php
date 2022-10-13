<?php
     include "connectiondb.inc.php";
    if(isset($_POST['chceking_sub_btn'])){
        $login_id = $_POST['login_id'];
        if(isset($_COOKIE['userid'])){
            setcookie("userid", "", time() - 3600);
        }
        setcookie('userid',$login_id);
        echo $return = "Record done ".$_COOKIE['userid'];
        
    }
    
    
    
    if(isset($_POST['sub_data'])){
        $id = $_COOKIE['userid'];
        $months = $_POST['months'];
        $mentors = $_POST['mentors'];
        $remark = $_POST['other'];
 
        $sql="UPDATE `login` SET `ispaid` = 1 WHERE `login_id` = $id;";
        $result = mysqli_query($conn, $sql);
        $row25 = mysqli_fetch_assoc($result);
 
            $sql4="SELECT * from `sub_mentorship` where login_id='".$id."'";
            $result4 = mysqli_query($conn, $sql4);   
            if(mysqli_num_rows($result4)>0)
            {
                       $counter=0;
                       foreach($result4 as $row1)
                       {
                           if($row1['name'] == $mentors){
                               $counter=1;
                                break;
                            }
                        }
                        
                        
                    
        
                    if($counter == 1){
                            $name=$row1['name'];
                            $id=$row1['login_id'];
                            $date=$row1['date'];
                            $exp=$row1['expiry'];
                            $remark=$row1['remark'];
                            $sub_id = $row1['sub_num'];
                            
                            $fin = date('Y-m-d', strtotime($exp . "+".$months." months"));
                            $final1 = $fin;
            
                            $sql1 = "UPDATE `sub_mentorship` SET `expiry`='".$fin."' WHERE login_id='".$id."' AND sub_num='".$sub_id."'";
                            $result1 = mysqli_query($conn, $sql1);
                            if($result1){
                                //echo "success";
                            }
                            else{
                                // die("Error".mysqli_error($conn));
                            }
                
                         $sql = "INSERT INTO `sub2_mentorship` (`name`, `login_id`, `date`, `expiry`, `remark`, `sub_num`) VALUES ('$name', '$id', current_timestamp(), '$final1', '$remark', '$sub_id');";
                        
                        $result = mysqli_query($conn, $sql);
                        if($result){
                            header("Location: user1.php");   
                            exit();
                        }else{
                          echo $return = "error done";
                        }
                        
                    } else{
                        $time1 = strtotime(date("Y-m-d",time()));
                        $final1 = date("Y-m-d", strtotime("+".$months." month", $time1));
                        $sql = "INSERT INTO `sub_mentorship` (`sub_num`, `name`, `login_id`, `date`, `expiry`, `remark`) VALUES (NULL, '$mentors', '$id', current_timestamp(), '$final1', '$remark');";
                        $result = mysqli_query($conn, $sql);
                        if($result){
                            header("Location: user1.php");   
                            exit();
                        }else{
                            echo $return = "error done";
                        }            
                    }
                }
                else{
                    $time = strtotime(date("Y-m-d",time()));
                    $final = date("Y-m-d", strtotime("+".$months." month", $time));
                    // echo $time;
                    // echo $final;
                     $sql = "INSERT INTO `sub_mentorship` (`sub_num`, `name`, `login_id`, `date`, `expiry`, `remark`) VALUES (NULL, '$mentors', '$id', current_timestamp(), '$final', '$remark');";
                    $result = mysqli_query($conn, $sql);
                    if($result){
                        header("Location: user1.php");   
                        exit();
                    }else{
                        echo $return = "error done";
                    }
                }
    }

    if(isset($_POST['sub_work'])){
            $id = $_COOKIE['userid'];
            $months = $_POST['months'];
            $workshop = $_POST['works'];
            $remark = $_POST['other'];
            
            $sql="UPDATE `login` SET `ispaid` = 1 WHERE `login_id` = $id;";
            $result = mysqli_query($conn, $sql);
            $row26 = mysqli_fetch_assoc($result);
            $pr = $row26['price'];
            
            $sql5 = "SELECT * from `sub_workshop` where `login_id` = $id ;";
            $result5 = mysqli_query($conn, $sql5);   

              if(mysqli_num_rows($result5) > 0)
               {
                   $counter=0;
                        foreach($result5 as $row2){
                            if($row2['name'] == $workshop){
                                $counter=1;
                                break;
                            }
                        }
                     
                    
                     if($counter == 1){
                        $name=$row2['name'];
                            $id=$row2['login_id'];
                            $date=$row2['date'];
                            $exp=$row2['expiry'];
                            $remark=$row2['remark'];
                            $sub_id = $row2['sub_id'];
                            $fin = date('Y-m-d', strtotime($exp . "+".$months." months"));
                            $final1 = $fin;
                         
                            $sql1 = "UPDATE `sub_workshop` SET `expiry`='".$fin."' WHERE login_id='".$id."' AND sub_id='".$sub_id."'";
                            $result1 = mysqli_query($conn, $sql1);
                
                         $sql = "INSERT INTO `sub2_workshop` (`name`, `login_id`, `date`, `expiry`, `remark`, `sub_id`) VALUES ('$name', '$id', current_timestamp(), '$final1', '$remark', '$sub_id');";
                        
                        $result = mysqli_query($conn, $sql);
                        if($result){
                            header("Location: user1.php");   
                            exit();
                        }else{
                          echo $return = "error done";
                        }
                        }else{
                        $time1 = strtotime(date("Y-m-d",time()));
                        $final1 = date("Y-m-d", strtotime("+".$months." month", $time1));
                        $sql = "INSERT INTO `sub_workshop` (`sub_id`, `name`, `login_id`, `date`, `expiry`, `remark`) VALUES (NULL, '$workshop', '$id', current_timestamp(), '$final1', '$remark');";
                        $result = mysqli_query($conn, $sql);
                        
                        if($result){
                            header("Location: user1.php");   
                            exit();
                        }else{
                            echo $return = "error done";
                        }            
                    }
            }else{
                $time = strtotime(date("Y-m-d",time()));
                $final = date("Y-m-d", strtotime("+".$months." month", $time));
                 $sql = "INSERT INTO `sub_workshop` (`sub_id`, `name`, `login_id`, `date`, `expiry`, `remark`) VALUES (NULL, '$workshop', '$id', current_timestamp(), '$final', '$remark');";
                $result = mysqli_query($conn, $sql);
                if($result){
                    header("Location: user1.php");   
                    exit();
                }else{
                    echo $return = "error done";
                }
        }
}
        
    if(isset($_POST['sub_paid'])){
        $id = $_COOKIE['userid'];
        $months = $_POST['months'];
        $remark = $_POST['other'];
        echo $id;
        echo $months;
        echo $id;
        $sql="UPDATE `login` SET `ispaid` = 1 WHERE `login_id` = $id;";
        $result = mysqli_query($conn, $sql);
        if(result){
            echo "success";
        }
        else{
            die(mysqli_error($conn));
        }
        
        $sql6="SELECT * from `sub_paidtip` where login_id='".$id."';";
            $result6 = mysqli_query($conn, $sql6);   
              echo $id;                                                            
              if(mysqli_num_rows($result6)>0)
              {
                    $row6 = mysqli_fetch_assoc($result6);
                    $id=$row6['login_id'];
                    $date=$row6['date'];
                    $exp=$row6['expiry'];
                    $remark=$row6['remark'];
                    $sub_id = $row6['sub_mem'];
                    $fin = date('Y-m-d', strtotime($exp . "+".$months." months"));
                    $final1 = $fin;
                         
                            $sql1 = "UPDATE `sub_paidtip` SET `expiry`='".$fin."' WHERE login_id='".$id."' AND sub_mem='".$sub_id."'";
                            $result1 = mysqli_query($conn, $sql1);
                            $sql = "INSERT INTO `sub2_paidtip` (`login_id`, `date`, `expiry`, `remark`, `sub_mem`) VALUES ('$id', current_timestamp(), '$final1', '$remark', '$sub_id');";
                        
                        $result = mysqli_query($conn, $sql);
                        if($result){
                            header("Location: user1.php");   
                            exit();
                        }else{
                          echo $return = "error done";
                        }
                    
                    
                }
                else{
            $time = strtotime(date("Y-m-d",time()));
            $final = date("Y-m-d", strtotime("+".$months." month", $time));
             $sql = "INSERT INTO `sub_paidtip` (`sub_mem`,`login_id`, `date`, `expiry`, `remark`) VALUES (NULL, '$id', current_timestamp(), '$final', '$remark');";
            $result = mysqli_query($conn, $sql);
            if($result){
                header("Location: user1.php");   
                exit();
            }else{
                die(mysqli_error($conn));
            }
        }
    }    
    
?>