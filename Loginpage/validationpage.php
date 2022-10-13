<?php


include 'connectiondb.inc.php';


if(isset($_POST['s_username'])){
    
    $username=$_POST['s_username'];

    if(strlen($username)==0){
        echo"";
    }
    else if(ctype_alpha(str_replace(' ', '', $username)) === false){
        echo "Name should contain only letters !";
    }
}

if(isset($_POST['s_email'])){
    
    $email=$_POST['s_email'];

    if(strlen($email)==0){
        echo"";
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format!";
    }
    else if(strlen($email)>8){

        $query="SELECT * from login WHERE email='$email'";
        $result = mysqli_query($conn, $query);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        if($row>0)
        {
            echo "EMAIL ALREADY TAKEN !";
        }
    }
}

if(isset($_POST['s_password'])){
    
    $password=$_POST['s_password'];

    if(strlen($password)==0){
        echo"";
    }
    else if(strlen($password)<6){
        echo "Password should be atleast 6 characters!";
    }
    else if (preg_match("/\s/", $password)) {
       echo "Password should not contain any white space";
    }
}

?>

