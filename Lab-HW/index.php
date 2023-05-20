<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
</head>
<body>
    <center>
        <h3>Register</h3>

        <form action="insert.php" method="post">
            <table>
                <tr>
                    <td><label for="full_name">Full Name:</label></td>
                    <td>
                        <input type="text" name="full_name" id="full_name" placeholder="Enter your full name" required>
                    </td>
                </tr>

                <tr>
                    <td><label for="email">Email:</label></td>
                    <td>
                        <input type="email" name="email" id="email" placeholder="Enter your email" required>
                    </td>
                </tr>

                <tr>
                    <td><label for="gender">Gender:</label></td>
                    <td>
                        <input type="radio" id="male" name="gender" value="male" required>
                        <label for="male">Male</label>
                        <input type="radio" id="female" name="gender" value="female" required>
                        <label for="female">Female</label>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" value="submit">
                    </td>
                </tr>
            </table>
        </form>
        <br>
        <a href="display.php">Click here to see registered students list.</a>
    </center>
</body>
</html>