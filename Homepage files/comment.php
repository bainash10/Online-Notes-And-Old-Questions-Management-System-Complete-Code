<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// File upload handling
$targetDir = "uploads/";
if (!is_dir($targetDir)) {
    mkdir($targetDir, 0777, true);
}
$targetFile = $targetDir . basename($_FILES["pdfFile"]["name"]);
$uploadOk = 1;
$pdfFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// Check if file is selected and it's a PDF
if (isset($_FILES["pdfFile"]) && $_FILES["pdfFile"]["size"] > 0 && $pdfFileType === 'pdf') {
    // Move uploaded PDF file to the target directory
    if (move_uploaded_file($_FILES["pdfFile"]["tmp_name"], $targetFile)) {
        echo "The PDF file " . htmlspecialchars(basename($_FILES["pdfFile"]["name"])) . " has been uploaded.";

        // Add form data and file path to the database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "dbaseon";

        // Create a database connection
        $conn =  mysqli_connect($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and bind the SQL statement
        $stmt = $conn->prepare("INSERT INTO contacts (name, email, message, pdf_file) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $message, $targetFile);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Form submitted successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the database connection
        $stmt->close();
        $conn->close();
    } else {
        echo "Sorry, there was an error uploading your PDF file.";
        $uploadOk = 0;
    }
} else {
    echo "Please select a valid PDF file.";
    $uploadOk = 0;
}

// If there was an error or the file upload failed, handle it accordingly
if ($uploadOk === 0) {
    echo "Sorry, your PDF file was not uploaded.";
}
?>