<!DOCTYPE html>
<html>

<head>
    <title>Insert</title>
</head>
<body>
<center>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "studentdb");

    if($conn === false){
        die("ERROR: Couldn't connect to the database!. " . mysqli_connect_error());
    }

    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];


    $sql = "INSERT INTO students VALUES (id,'$full_name','$email','$gender')";

    if(mysqli_query($conn, $sql)){
        echo "<h2> Data stored into the database successfully. </h2>";

        echo nl2br("\n$full_name\n $email\n  $gender");
    }
    else{
        echo "ERROR: $sql. " . mysqli_error($conn);
    }

    mysqli_close($conn);
    ?>
</center>
</body>
</html>