<?php
  session_start();
  if(!isset($_SESSION["adminemail"])){
    header("Location: login.php");
  }
?>

<?php
    include "connectiondb.inc.php";


    if(isset($_POST['tipsubmit'])){

        $stockname=mysqli_real_escape_string($conn,$_POST['stockname']);
        $stockquantity= mysqli_real_escape_string($conn,$_POST['stockquantity']);
        $buy_sell= mysqli_real_escape_string($conn,$_POST['buysell']);
        $entryprice= mysqli_real_escape_string($conn,$_POST['entryprice']);
        $targetprice= mysqli_real_escape_string($conn,$_POST['targetprice']);
        $stoplossprice= mysqli_real_escape_string($conn,$_POST['stoplossprice']);

        $timeofentry=date('Y-m-d H:i:s');
        

        if($buy_sell=="Buy"){
            if(($targetprice<$entryprice) or ($stoplossprice>$entryprice)){
                header("Location: freetipswall.php?error=InputError");
            }
            else{
                $isql="INSERT INTO freetips(id,BuySell,Stock_Name,Entry_price,Stoploss,Target,Time_of_entry,quantity) VALUES (DEFAULT,?,?,?,?,?,?,?);";
                $stmt=mysqli_stmt_init($conn);

                if(!mysqli_stmt_prepare($stmt,$isql)){
                    echo "SQL ERROR";
                    exit();
                }
                else{
                    mysqli_stmt_bind_param($stmt,"ssiiisi",$buy_sell,$stockname,$entryprice,$stoplossprice,$targetprice,$timeofentry,$stockquantity);
                    mysqli_stmt_execute($stmt);
                }
                header("Location: freetipswall.php");
            }
        }
        else{
            if(($targetprice>$entryprice) or ($stoplossprice<$entryprice)){
                header("Location: freetipswall.php?error=InputError");
            }
            else{
                header("Location: freetipswall.php?error=InputError");
            }
        }


        
    }




?>