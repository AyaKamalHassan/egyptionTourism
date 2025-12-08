<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

$conn = mysqli_connect("localhost:3307", "root", "", "tourism",3307);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// retrieve all reservation
$sql_trips = "SELECT t.id, t.client_name, t.trip_date, d.name as destination_name 
              FROM trips t 
              JOIN destination d ON t.destination_id = d.id"; 
$result_trips = $conn->query($sql_trips);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
             background: linear-gradient(135deg, #d4af37, #f5e6a8, #c9a227);
    min-height: 100vh;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #747272ff;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
       .edit-btn {
    background: linear-gradient(to right, #b18f21ff, #a57a0cff);
    color: white;
    border: none;
    padding: 6px 12px;
    border-radius: 6px;
    cursor: pointer;
    font-weight: bold;
    margin-right: 5px;
}

.edit-btn:hover {
    opacity: 0.85;
}

.delete-btn {
    background-color: #8B0000;   
    color: white;
    border: none;
    padding: 6px 12px;
    border-radius: 6px;
    cursor: pointer;
    font-weight: bold;
}

.delete-btn:hover {
    background-color: #a40000;
}
.add_btn {
    background-color: #292929ff;   
    color: white;
    border: none;
    padding: 8px 17px;
    border-radius: 6px;
    cursor: pointer;
    font-weight: bold;
}
.add_btn:hover {
    background-color: #b16e21ff;  
}
    </style>
</head>
<body>
    <h2 style="text-align: center;">Admin Dashboard</h2>

    <h3>Manage Bookings</h3>
    <a href="add.php"><button class="add_btn">Add New Trip</button></a>

    <table>
        <tr>
            <th>Client Name</th>
            <th>Destination</th>
            <th>Trip Date</th>
            <th>Actions</th>
        </tr>

       <?php
// show all reservation
if ($result_trips->num_rows > 0) {
    while($row = $result_trips->fetch_assoc()) {

       echo "<tr>
        <td>{$row['client_name']}</td>
        <td>{$row['destination_name']}</td>
        <td>{$row['trip_date']}</td>
        <td>
            <a href='update.php?id={$row['id']}'>
                <button class='edit-btn'>Edit</button>
            </a>
            <a href='delete.php?id={$row['id']}' 
               onclick='return confirm(\"Are you sure you want to delete this trip?\")'>
                <button class='delete-btn'>Delete</button>
            </a>
        </td>
      </tr>";

    }
} else {
    echo "<tr><td colspan='4'>No bookings found.</td></tr>";
}
?>

    </table>
</body>
</html>
