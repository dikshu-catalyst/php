<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_Form</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="assets/js/next.js"></script>
    <script src="assets/uploads"></script>
    <link rel="stylesheet" href="assets/css/style.css">
       
</head>
<body>
<form class="form" method="post" id="data" action="#" enctype="multipart/form-data">
    <label for="heading">Heading:</label>
    <input type="text" id="head" name="heading" required>
<br>
    <label for="text">Text:</label><br>
    <textarea id="txt" name="text" rows="4" cols="50" required></textarea>
<br>
    <label for="img">Image:</label>
    <input type="file" name="upload_img" id="img" accept="image/*" required>
    
    <input type="submit" id="submit-button" value="Submit">

    <br>
    <a href="logout.php">logout</a>
</form>
</body>
</html>
