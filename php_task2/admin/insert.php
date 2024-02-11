<?php
include ('connection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $sql = "INSERT INTO credentials ( firstName, lastName, email, pwd)
    VALUES ('$firstName','$lastName','$email', '$pwd')";
    if (!mysqli_query($conn,$sql))
        {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

}
?>