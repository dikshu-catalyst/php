<?php
SESSION_START();
$email = $_SESSION['email'];
include 'connection.php';
$head = $_POST['head'];
$txt = $_POST['txt'];
$img = '';

$sql_check = "SELECT * FROM data WHERE email = '$email'";
$result_check = mysqli_query($conn, $sql_check);
if(mysqli_num_rows($result_check) > 0){
    $sql = "UPDATE data SET head = '$head', txt = '$txt'";
    
    if (isset($_FILES['upload_file'])) {
        $img = $_FILES['upload_file']['name'];
        $file_tmp = $_FILES['upload_file']['tmp_name'];
        move_uploaded_file($file_tmp, "assets/uploads/" . $img);
        $sql .= ", img = '$img'";
    }

    $sql .= " WHERE email = '$email'";
} else {
    if (isset($_FILES['upload_file'])) {
        $img = $_FILES['upload_file']['name'];
        $file_tmp = $_FILES['upload_file']['tmp_name'];
        move_uploaded_file($file_tmp, "assets/uploads/" . $img);
    }
    $sql = "INSERT INTO data (head, txt, img, email)
            VALUES ('$head', '$txt', '$img', '$email')";
}

if (mysqli_query($conn, $sql)) {
    echo "Records updated/inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
