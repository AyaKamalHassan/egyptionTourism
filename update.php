<?php
$conn = mysqli_connect("localhost:3307", "root", "", "tourism",3307);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_GET['id'])) {
    $trip_id = $_GET['id'];
    $sql_trip = "SELECT * FROM trips WHERE id = $trip_id";
    $result_trip = $conn->query($sql_trip);
    $trip = $result_trip->fetch_assoc();
}


$sql_destination = "SELECT id, name FROM destination";
$result_destination = $conn->query($sql_destination);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $client_name = $_POST['client_name'];
    $destination_id = $_POST['destination_id'];
    $trip_date = $_POST['trip_date'];

    $sql_update = "UPDATE trips 
                   SET client_name='$client_name', destination_id='$destination_id', trip_date='$trip_date' 
                   WHERE id=$trip_id";

    if ($conn->query($sql_update) === TRUE) {
        echo "Trip updated successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Trip</title>
</head>
<body>
    <h2>Edit Trip</h2>
    <form method="POST">
        <label for="client_name">Client Name:</label>
        <input type="text" id="client_name" name="client_name" value="<?php echo $trip['client_name']; ?>" required><br><br>

        <label for="destination_id">Select Destination:</label>
        <select id="destination_id" name="destination_id" required>
            <?php
            // عرض الوجهات في القائمة المنسدلة
            if ($result_destination->num_rows > 0) {
                while($row = $result_destination->fetch_assoc()) {
                    echo "<option value='" . $row["id"] . "' " . ($trip['destination_id'] == $row["id"] ? 'selected' : '') . ">" . $row["name"] . "</option>";
                }
            } else {
                echo "<option>No destinations available</option>";
            }
            ?>
        </select><br><br>

        <label for="trip_date">Trip Date:</label>
        <input type="date" id="trip_date" name="trip_date" value="<?php echo $trip['trip_date']; ?>" required><br><br>

        <button type="submit">Update Trip</button>
    </form>
</body>
</html>
