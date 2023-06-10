<?php
    
    $con = mysqli_connect("localhost","root","","dbaseon");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Messages</title>
      <style>
          body {
        font-family: Calibri, Helvetica, sans-serif;  
  background-color: #1D2228;  
}

        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }
        
        th {
            background-color: #f2f2f2;
        }
        td{
            background-color: #f2f2f2;
        }
        button{
            color: #fff;
    background:#FF6864;
    border: 0;
    outline: 0;
    width: 10%;
    height: 50px;
    font-size: 16px;
    text-align: center;
    cursor: pointer;
    border-radius: 10px;
        }
        a:visited{
            color: black;
        }
        a{
text-decoration: none;
}
h2
{
    color:white;
    font-size:50px;
    text-align: center;
}
    </style>
</head>
<body>
<?php
    // require('db.php');
    session_start();

    // Retrieve the messages from the database
    $query = "SELECT * FROM `contacts`";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));

    if (mysqli_num_rows($result) > 0) {
        ?>
        <center><button><a href="logout.php">Logout</a></button></center>
       
        <table width="80%" border>
            <caption>
        <h2 style="color:white;">Validate The Document</h2>
       </caption>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>File</th>
                </tr>
            </thead>
            <tbody>
            <?php
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row['name'];
            $email = $row['email'];
            $message = $row['message'];
            $file_name = $row['pdf_file'];

?>
             <tr>
                <td><?php echo $name; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $message; ?></td>
                <td>
                    <?php if (!empty($file_name)) { ?>
                        <a href="download.php?file=<?php echo urlencode($file_name); ?>"><?php echo $file_name; ?></a>
                    <?php } ?>
                </td>
        </tr>
<?php
        }
    } else {
        echo "<h2>No messages found.</h2>";
    }
?>
</body>
</html>
