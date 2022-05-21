<?php 
    if(isset($_POST["submit"])){
        $file_name = $_FILES["file"]["name"];
        $file_type = $_FILES["file"]["type"];
        $file_size = $_FILES["file"]["size"];
        $file_tem = $_FILES["file"]["tmp_name"];
        $file_store = "./images/".$file_name;
        echo $file_store;
        move_uploaded_file($file_tem, $file_store);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <img src="./images/c1.jpg" alt=""> -->
    <form action="?" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>

Message Saja AL Ghalayini, 2-Bahaa Aldeen, 1- Sara Kteifan, 7. ro'a yaseen
