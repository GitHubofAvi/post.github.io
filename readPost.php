
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>readPost</title>
</head>
<body>
    <table border= 1>
        <thead>
            <tr>
                <th>id</th>
                <th>Post Title</th>
                <th>Post Image</th>
                <th>Post Author's Name</th>
                <th>Post's Date</th>
                <th>Post's Description</th>
                <th>Delete Post</th>
            </tr>
        </thead>
        <tbody>
        <?php 
include 'connection.php';

$selectQuery = "select * from posts";
$query = mysqli_query($conn, $selectQuery);

while($res = mysqli_fetch_assoc($query)){ 
   
    ?>
    <tr>
    <td><?php echo $res['id'];?></td>
    <td><?php echo $res['post_title'];?></td>
    <td><img src="<?php echo $res['post_image'];?>" width= "150" height="80"></td>
    <td><?php echo $res['author_name'];?></td>
    <td><?php echo $res['post_date'];?></td>
    <td><?php echo $res['post_listing'];?></td>
    <td><a href="deletePost.php?ids=<?php echo $res['id'];?>">Delete</a></td>
    
</tr>
    
<?php
}
?> 
          
        </tbody>
        
    </table><br><br><br>
    <button><a href="index.php">want to upload new post </a></button>
</body>
</html>


