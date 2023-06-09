 <?php
    $conn= mysqli_connect('localhost','root','','online');
    if(!$conn)
    {
     die("Connection failed:" . mysqli_connect_error());
    }
     $name = $_POST['name'];
     $email = $_POST['email'];
    $comment= $_POST['text'];
    $sql = "INSERT INTO ontable(Fullname, Email, Comment) VALUES ('$name', '$email', '$comment')"; 
   
    if(mysqli_query($conn,$sql))
        {
            echo "Data inserted successfully";
        }
    else
        {
            echo "Data failed to insert".mysqli_error($conn);
        }
        mysqli_close($conn);
?> 