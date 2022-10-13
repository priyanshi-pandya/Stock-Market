<?php
  session_start();
  if(!isset($_SESSION["adminemail"])){
    header("Location: login.php");
  }
?>

<?php
    include "connectiondb.inc.php";

    echo "enter";
    if(isset($_POST['blogsubmit'])){
        $blogtitle=mysqli_real_escape_string($conn,$_POST['blogname']);
        $blogcategory= mysqli_real_escape_string($conn,$_POST['blogcategory']);
        $maincontent= mysqli_real_escape_string($conn,$_POST['maincontent']);
        
        $timeofcreation=date('Y-m-d H:i:s');
        $creator="Administrator";

        $folder_name = '../assets/images/blog/';

        if(!empty($_FILES))
        {
            //  SET FILE ATTRIBUTES
            $temp_file = $_FILES['file']['tmp_name'];
            $name = $_FILES["file"]["name"];

            move_uploaded_file($_FILES["file"]["tmp_name"], $folder_name.$name);
        }
        

        $header_img= $folder_name.$name;
      
        $folder_path=substr($header_img, strpos($header_img, "../") + 3);
        

        $isql="INSERT INTO blog(blog_id,blog_title,blog_creation_date,blog_creator_name,blog_category,blog_main_content,blog_header_image) VALUES (NULL,'$blogtitle','$timeofcreation','$creator','$blogcategory','$maincontent','$folder_path');";
        if ($conn->query($isql) === TRUE) {
              echo "New record created successfully";
        } else {
             echo "Error: " . $sql . "<br>" . $conn->error;
        }
           
        header("Location: blog.php");
    }




?>