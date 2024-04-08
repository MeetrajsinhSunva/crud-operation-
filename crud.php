<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MY";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




function createRecord($image_name, $description, $category, $conn) {
    $sql = "INSERT INTO uploaded_details (image_name, description, category) VALUES ('$image_name', '$description', '$category')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function readRecords($conn) {
    $sql = "SELECT * FROM uploaded_details";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<p><strong>Image:</strong> " . $row["image_name"] . "</p>";
            echo "<p><strong>Description:</strong> " . $row["description"] . "</p>";
            echo "<p><strong>Category:</strong> " . $row["category"] . "</p>";
            echo "<hr>";
        }
    } else {
        echo "0 results";
    }
}


function updateRecord($id, $image_name, $description, $category, $conn) {
    $sql = "UPDATE uploaded_details SET image_name='$image_name', description='$description', category='$category' WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}


function deleteRecord($id, $conn) {
    $sql = "DELETE FROM uploaded_details WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}


$conn->close();
?>
