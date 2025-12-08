<?php
$conn = mysqli_connect("localhost:3307", "root", "", "tourism",3307);
;

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $trip_id = $_GET['id'];
    $sql_delete = "DELETE FROM trips WHERE id = $trip_id";
    
    if ($conn->query($sql_delete) === TRUE) {
        echo "Trip deleted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
