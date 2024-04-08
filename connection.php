<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "my";

$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    if(isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image_name = $_FILES['image']['name'];
        $description = $_POST['description'];
        $category = $_POST['category'];

        $sql = "INSERT INTO uploaded_details (image_name, description, category) VALUES ('$image_name', '$description', '$category')";
        if ($conn->query($sql) === TRUE) {
            echo "<p>Record inserted successfully</p>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "<p>Failed to upload image.</p>";
    }
} else {
    echo "<p>No data uploaded.</p>";
}

$conn->close();
?>
