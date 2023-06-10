<?php
    if (isset($_GET['file'])) {
        $file = $_GET['file'];
        $file_path = "Homepage files/" . $file; // Update the path to your files directory
        if (file_exists($file_path)) {
            header("Content-Disposition: attachment; filename=" . urlencode($file));
            header("Content-Type: application/octet-stream");
            header("Content-Length: " . filesize($file_path));
            readfile($file_path);
            exit;
        } else {
            echo "File not found.";
        }
    } else {
        echo "Invalid request.";
    }
?>
