<?php
$conn = mysqli_connect("localhost:3307", "root", "", "tourism", 3307);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// إضافة وجهة جديدة
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_destination'])) {

    $name = $_POST['name'];
    $description = $_POST['description'];

    // رفع الصورة
    $image = $_FILES['image']['name'];
    $target_dir = "images/";
    $target_file = $target_dir . basename($image);

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {

        $sql = "INSERT INTO destination (name, description, image)
                VALUES ('$name', '$description', '$image')";

        if ($conn->query($sql) === TRUE) {
            $message = "✅ Destination added successfully!";
        } else {
            $message = "❌ Database Error: " . $conn->error;
        }

    } else {
        $message = "❌ Image upload failed!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Destination</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #b19128ff, #d8c98eff, #c9a227);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            width: 400px;
            box-shadow: 0 4px 10px rgba(0,0,0,.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input, textarea, button {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }

        button {
            background-color: #ff6600;
            color: white;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background-color: #ff4500;
        }

        .message {
            margin-bottom: 10px;
            text-align: center;
            font-weight: bold;
        }

        .success { color: green; }
        .error { color: red; }
    </style>
</head>

<body>

<div class="form-container">
    <h2>Add New Destination</h2>

    <?php if (!empty($message)): ?>
        <div class="message <?= strpos($message, '✅') !== false ? 'success' : 'error' ?>">
            <?= $message ?>
        </div>
    <?php endif; ?>

    <form method="POST" enctype="multipart/form-data">
        <label>Destination Name</label>
        <input type="text" name="name" required>

        <label>Description</label>
        <textarea name="description" required></textarea>

        <label>Destination Image</label>
        <input type="file" name="image" accept="image/*" required>

        <button type="submit" name="add_destination">Add Destination</button>
    </form>
</div>

</body>
</html>

<?php
$conn->close();
?>
