
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>

    <form action="upload.php" enctype="multipart/form-data" method = "post">

    <input type="text" name = "title" placeholder="Post Title" required><br><br>
    <input type="file" name = "photo" required><br><br>
    <input type="text" name = "author" placeholder="Author Name" required><br><br>
    <input type="text" name = "post_listing" placeholder="About Post" required><br><br>
    <input type="submit" name = "submit" value="submit"><br><br><br>

</form>
<button><a href="readPost.php">see uploaded post </a></button>
</body>

<?php
include 'connection.php';
?>

</html>