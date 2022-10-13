<?php
    include "connectiondb.inc.php";


    if(isset($_POST['blogsubmit'])){

        $blogtitle= $_POST['blogname'];
        $blogcategory= $_POST['blogcategory'];
        $maincontent= $_POST['maincontent'];
        $blog_id= $_POST['blogid'];
        
            
            $isql="UPDATE blog SET blog_title='$blogtitle',blog_category='$blogcategory',blog_main_content='$maincontent' WHERE blog_id='$blog_id'";
            echo '$maincontent'.'<br>';
            if ($conn->query($isql) === TRUE) {
                  echo "New record created successfully";
            } else {
                 echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            header("Location: blog.php");
            
        
    }




?>