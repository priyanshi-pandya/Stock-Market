<?php
  session_start();
  if(!isset($_SESSION["adminemail"])){
    header("Location: login.php");
  }
?>

<?php
    include "connectiondb.inc.php";


    if(isset($_POST['couponsubmit'])){
        $code = $_POST['couponcode'];
        
        $sql = "select * from coupon where coupon_code = $code";
        $rs =  mysqli_query($conn, $sql);
        if(mysqli_num_rows($rs) > 0)
        {
            
           echo "<script>
                window.location.href='coupon.php';
                alert('Already added Coupon code');
            </script>";
        }
        $sdate = $_POST['cre_date'];
        $discount = $_POST['discount'];
        $month = $_POST['months'];
        $userid = $_POST['userid'];
        $services = $_POST['services'];
        $ex_date = date('Y-m-d', strtotime($date. ' + ' .$month. ' month'));
        echo $ex_date;

        $qry="INSERT INTO coupon(coupon_code,creation_date,discount_price,expire_date, services, user_id) VALUES ('".$code."','".$sdate."','".$discount."','".$ex_date."', '".$services."', '".$userid."')";
        $rs = mysqli_query($conn, $qry);
        if($rs){
            echo "Successfull";
        }
        else{
            die("Unsuccessfull".mysqli_error($conn));
        }
        
        header("Location: coupon.php");
        exit();
    }




?>