<html>
<head>
    <title>Display Students</title>
</head>
<body>
<h2>Registered Students</h2>

<?php
        $conn = mysqli_connect("localhost", "root", "", "studentdb");
        $sql = "SELECT * FROM students;";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
        echo $row['id'] . " - " . $row['full_name'] . " - " . $row['email'] . " - " . $row['gender'] . "<br>";
        }
?>

    </tr>
</table>

</body>
</html>