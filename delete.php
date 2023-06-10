<?php
 
   
   $con = mysqli_connect("localhost","root","","dbaseon");
 
   if (mysqli_connect_errno()){
       echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
?>
<?php
    session_start();

    // Check if the form is submitted and the contact_id is set
    if (isset($_POST['delete']) && isset($_POST['contact_id'])) {
        $contact_id = $_POST['contact_id'];

        // Perform the deletion
        // Add your database connection and delete query here
        $query = "DELETE FROM `contacts` WHERE `id` = $contact_id";
        mysqli_query($con, $query) or die(mysqli_error($con));

        // Redirect back to the page where the delete button was clicked
        header("Location: admin.php");
        exit();
    } else {
        // Redirect back to the page where the delete button was clicked
        header("Location: admin.php");
        exit();
    }
?>
