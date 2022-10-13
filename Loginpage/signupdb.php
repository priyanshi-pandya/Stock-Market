<?php

include 'connectiondb.inc.php';

if(isset($_POST['signupsubmit'])){

    $name=mysqli_real_escape_string($conn,$_POST['s_name']);
    $email= mysqli_real_escape_string($conn,$_POST['s_mail']);
    $password1= mysqli_real_escape_string($conn,$_POST['s_pass1']);
    $password2= mysqli_real_escape_string($conn,$_POST['s_pass2']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location:../account.php?error=Invalid_Email_Error");
        exit();
    }             
    else if(ctype_alpha(str_replace(' ', '', $name)) === false){
        header("Location: ../account.php?error=Name_Content_Error");
        exit();
    }
    else{

        $sql="SELECT * from login WHERE email='$email'";
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);
        
        if($count>0)
        {
            header("Location: ../account.php?error=Existing_User_Error");
            exit();
        }
        

        else{
                if($password1!=$password2)
                {
                    header("Location: ../account.php?error=PasswordNotSame");
                    exit();
                }
                else{
                    
                    if(strlen($password1)<6){
                        header("Location: ../account.php?error=Password_Length_Error");
                       exit();
                    }
                    else{
                        // INSERT QUERY

                        $isql="INSERT INTO login(login_id,email,password,name) VALUES (DEFAULT,?,?,?);";
                        $stmt=mysqli_stmt_init($conn);

                        if(!mysqli_stmt_prepare($stmt,$isql)){
                            echo "SQL ERROR";
                            exit();
                        }
                        else{
                            mysqli_stmt_bind_param($stmt,"sss",$email,$password1,$name);
                            mysqli_stmt_execute($stmt);
                        }
                        header("Location: ../login.php?error=SignupSucessful");
                    }

                }
            }
        }
        
    }
else{
    header("Location: ../account.php?UsernamessError");
}
?>