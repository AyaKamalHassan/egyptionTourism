<?php
$conn = mysqli_connect("localhost:3307", "root", "", "tourism", 3307);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql_destination = "SELECT id, name FROM destination";
$result_destination = $conn->query($sql_destination);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $client_name = $_POST['client_name'];
    $destination_id = $_POST['destination_id'];
    $trip_date = $_POST['trip_date'];

    $sql = "INSERT INTO trips (client_name, destination_id, trip_date) 
            VALUES ('$client_name', '$destination_id', '$trip_date')";

    if ($conn->query($sql) === TRUE) {
        $message = "✅ Trip added successfully!";
    } else {
        $message = "❌ Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Trip</title>

    <style>
       body {
    font-family: 'Segoe UI', Tahoma, sans-serif;
    background: linear-gradient(135deg, #d4af37, #f5e6a8, #c9a227);
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.trip-container {
    background: rgba(255, 255, 255, 0.95);
    width: 420px;
    padding: 28px;
    border-radius: 14px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.25);
    border: 2px solid #d4af37;
}

.trip-container h2 {
    text-align: center;
    color: #b8860b;
    margin-bottom: 25px;
    font-weight: 700;
    letter-spacing: 1px;
}

label {
    font-weight: 600;
    margin-top: 12px;
    display: block;
    color: #8b7500;
}

input, select {
    width: 100%;
    padding: 11px;
    margin-top: 6px;
    border-radius: 10px;
    border: 1px solid #d4af37;
    background-color: #fffdf3;
    outline: none;
    font-size: 14px;
}

input:focus, select:focus {
    border-color: #b8860b;
    box-shadow: 0 0 6px rgba(184,134,11,0.6);
}

button {
    margin-top: 22px;
    width: 100%;
    padding: 13px;
    border: none;
    border-radius: 12px;
    background: linear-gradient(to right, #d4af37, #c9a227, #b8860b);
    color: #fff;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s ease;
}

button:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 18px rgba(0,0,0,0.3);
}

.message {
    text-align: center;
    margin-bottom: 18px;
    font-weight: bold;
}

.success {
    color: #9c7c00;
}

.error {
    color: #b22222;
}

        
    </style>
</head>
<body>

<div class="trip-container">
    <h2>✈️ Add New Trip</h2>

    <?php if (!empty($message)): ?>
        <div class="message <?php echo strpos($message, '✅') !== false ? 'success' : 'error'; ?>">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

    <form method="POST">
        <label>Client Name</label>
        <input type="text" name="client_name" required>

        <label>Select Destination</label>
        <select name="destination_id" required>
            <?php
            if ($result_destination->num_rows > 0) {
                while($row = $result_destination->fetch_assoc()) {
                    echo "<option value='{$row['id']}'>{$row['name']}</option>";
                }
            } else {
                echo "<option>No destinations available</option>";
            }
            ?>
        </select>

        <label>Trip Date</label>
        <input type="date" name="trip_date" required>

        <button type="submit">Add Trip</button>
    </form>
</div>

</body>
</html>

<?php
$conn->close();
?>
