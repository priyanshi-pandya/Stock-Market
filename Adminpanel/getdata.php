<?php
include "connectiondb.inc.php";

    if(isset($_POST['view_data_btn'])){
            //$months1 = $_POST['months'];
            $login_id = $_POST['login_id'];
            $sql = "Select * from `sub_mentorship` where `login_id` = $login_id";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0){
                 $data = '<h4>Subscription of Mentorships</h4>';
                foreach($result as $row){
                    $login = $row['login_id'];
                    $exp = $row['expiry'];
                    $expo = date('Y-m-d', strtotime('-1 days', strtotime($exp)));
                    $subid = $row['sub_num'];
                    $data = $data.'<p>Name Of Mentorship:-<b>'.$row['name'].'</b></p><p>Date of Enrollment:-'.$row['date'].'</p><p>Final Date of Expiry:-'.$expo.' 11:59 PM</p>';
                
        
                    $sql5 = "Select * from `sub2_mentorship` where `login_id` = $login_id AND sub_num= $subid order by id";
                    $result5 = mysqli_query($conn, $sql5);
                    $i=1;
                    if(mysqli_num_rows($result5)>0){
                    foreach($result5 as $row5){
                    //$exp = $row['expiry'];
                        $data = $data.'<p>New AddOn Date '.$i.':-'.$row5['date'].'</p><p>New Expiry Date '.$i.':-'.$row5['expiry'].'</p>';
                        $i++;
                    }
                }
            }
        }
        
            
            $sql = "Select * from `sub_workshop` where login_id=$login_id";
            $result1 = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result1)>0){
                 $data1 = '<h4>Subscription of Workshop</h4>';
                foreach($result1 as $row){
                        $login = $row['login_id'];
                        $exp = $row['expiry'];
                        $expo = date('Y-m-d', strtotime('-1 days', strtotime($exp)));
                        $subid = $row['sub_id'];
                        $data1 = $data1.'<p>Name Of Workshop:-<b>'.$row['name'].'</b></p><p>Date of Enrollment:-'.$row['date'].'</p><p>Final Date of Expiry:-'.$expo.' 11:59 PM</p>';
                
                        $sql3 = "Select * from `sub2_workshop` where `login_id` = $login_id AND sub_id=$subid order by id";
                        $result3 = mysqli_query($conn, $sql3);
                        $i=1;
                        if(mysqli_num_rows($result3)>0){
                            foreach($result3 as $row1){
                                $data1 = $data1.'<p>New AddOn Date '.$i.':-'.$row1['date'].'</p><p>New Expiry Date '.$i.':-'.$row1['expiry'].'</p>';
                                $i++;
                                
                            }
                        }
                    }    
                }
            
            
            $sql = "Select * from `sub_paidtip` where `login_id` = $login_id";
            $result2 = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result2)>0){
                 $data2 = '<h4>Subscription of Paid Tips</h4>';
                foreach($result2 as $row){
                    $login = $row['login_id'];
                    $exp = $row['expiry'];
                    $expo = date('Y-m-d', strtotime('-1 days', strtotime($exp)));
                    $subid = $row['sub_mem'];
                    $data2 = $data2.'  
                            <p>Name:-<b>Paid Tips</b></p><p>Date of Enrollment:-'.$row['date'].'</p><p>Final Date of expiry:-'.$expo.' 11:59 PM</p>';
                
                $sql6 = "Select * from `sub2_paidtip` where `login_id` = $login_id order by id";
                $result6 = mysqli_query($conn, $sql6);
                $i=1;
                if(mysqli_num_rows($result6)>0){
                foreach($result6 as $row6){
                    $data6 = $data6.'<p>New AddOn Date '.$i.':-'.$row6['date'].'</p><p>New Expiry Date '.$i.':-'.$row6['expiry'].'</p>';
                    $i++;
                }
            }
        }
    }        
            
          echo $return = $data." ".$data1." ".$data2." ".$data6; 
        // echo $return = $data;
    }
?>