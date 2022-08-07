<?php
include 'connection.php';


if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $filename = $_FILES['photo']['name'];
    $filepath = $_FILES['photo']['tmp_name'];
    $author = $_POST['author'];
    $post_listing = $_POST['post_listing'];

        $destfile = 'upload/'.$filename;
        move_uploaded_file($filepath,$destfile);
        $date = date('Y-m-d H:i:s');
        $insertQuery = "insert into posts(post_title, post_image, post_date, author_name, post_listing)
                       values('$title','$destfile','$date', '$author', '$post_listing')";
        
        $query = mysqli_query($conn, $insertQuery);
        if($query){
            ?><script>
                alert("posts added successfully");
                location.replace("index.php");
            </script><?php
            
        }
    }

?>