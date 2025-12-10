<?php
$conn = mysqli_connect("localhost:3307", "root", "", "tourism", 3307);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// التعامل مع حذف الوجهة
if (isset($_GET['id'])) {
    $destination_id = $_GET['id'];  // استلام ID الوجهة لحذفها

    // SQL query to delete the destination from the database
    $sql_delete = "DELETE FROM destination WHERE id = $destination_id";
    
    if ($conn->query($sql_delete) === TRUE) {
        // إعادة التوجيه إلى صفحة الداشبورد بعد الحذف
        header("Location:dashboard.php");
        exit();
    } else {
        echo "❌ Error: " . $conn->error;
    }
}

$conn->close();
?>