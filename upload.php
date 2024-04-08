<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploaded Details</title>
    <link rel="stylesheet" href="stylesupload.css">
</head>
<body>
    <h2>Uploaded Details</h2>
    
    <div class ="form">
        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
            if(isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
                $image_name = $_FILES['image']['name'];
                $description = $_POST['description'];
                $category = $_POST['category'];
                
                echo "<p><strong>Image:</strong> $image_name</p>";
                echo "<p><strong>Description:</strong> $description</p>";
                echo "<p><strong>Category:</strong> $category</p>";



            } else {
                echo "<p>Failed to upload image.</p>";
            }
        } else {
            echo "<p>No data uploaded.</p>";
        }
        ?>
        <button type="submit">Edit</button>
        <button type="delete">delete</button>
    </div>
    </div>
</body>
</html>
