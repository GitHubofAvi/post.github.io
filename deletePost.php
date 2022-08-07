
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>deletePost</title>
</head>
<body>
<?php
include 'connection.php';  

$i_d = $_GET['ids'];

$deleteQuery = "DELETE FROM `posts` WHERE id = {$i_d}";
$query = mysqli_query($conn,$deleteQuery);

    if($query){
        ?>
        <script>
            alert("post is deleted properly");
        </script>
        <?php
    }else{
       ?>
       <script>
           alert("post is not deleted, try again!!!");
       </script>
       
       <?php
    }



?>
      <button><a href="readPost.php">check posts here!!</a></button>
</body>
</html>
