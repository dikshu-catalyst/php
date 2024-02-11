<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Execute select query
$sql = "SELECT * FROM data"; 
$result = mysqli_query($conn, $sql);

// Check if query execution was successful
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<b>This is heading: " .$row['head']."</b>" ;
        echo "This is text: ".$row['txt'];
        echo "<img src='admin/assets/uploads/" . $row['img'] . "' alt='Image' style='max-width: 100px; max-height: 100px;'>";
        echo "<br>";
        echo "This data was added by: <b>".$row['email']."</b>";
        echo "<br>";
        
    }

    echo "</table>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
