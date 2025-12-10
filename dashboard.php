<?php
$conn = mysqli_connect("localhost:3307", "root", "", "tourism", 3307);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// استعلام للحصول على جميع الوجهات
$sql_destinations = "SELECT * FROM destination";
$result_destinations = $conn->query($sql_destinations);

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

    <h3>Manage Destinations</h3>
    <a href="add.php"><button class="add_btn">Add New Destination</button></a>

    <table>
        <tr>
            <th>Destination Name</th>
            <th>Location</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>

        <?php
        // عرض جميع الوجهات
        if ($result_destinations->num_rows > 0) {
            while ($row = $result_destinations->fetch_assoc()) {
                echo "<tr>
                    <td>{$row['name']}</td>
                    <td>
        <img src='images/{$row['image']}' alt='{$row['name']}' width='100'>
                   </td>    
                      <td>{$row['description']}</td>
                    <td>
                        <!-- إضافة زر حذف مع معرّف الوجهة -->
                        <a href='delete.php?id={$row['id']}' 
                           onclick='return confirm(\"Are you sure you want to delete this destination?\")'>
                            <button class='delete-btn'>Delete</button>
                        </a>
                    </td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No destinations found.</td></tr>";
        }
        ?>

    </table>
</body>
</html>