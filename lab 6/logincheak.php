<?php
    session_start();

    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $confirm_password = trim($_POST['confirm_password']);

        
        if ($username == null || empty($password) || empty($confirm_password)) {
            $error = "All fields are required!";
        } elseif ($password !== $confirm_password) {
            $error = "Passwords do not match!";
        } else {
            
            $_SESSION['status'] = true;
            $_SESSION['username'] = $username;
            header('location: welcome.php'); 
            exit();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <form action="logincheak.php" method="POST">
        <fieldset>
            <legend>Login</legend>

            <?php
            
            if (isset($error)) {
                echo "<p style='color: red;'>$error</p>";
            }
            ?>

            <label for="username">Username</label>
            <input type="text" id="username" name="username" required><br><br>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required><br><br>

            <label for="confirm_password">Confirm Password</label>
            <input type="password" id="confirm_password" name="confirm_password" required><br><br>

            <button type="submit">Register</button>
            <button type = "submit ">SING IN</button>
        </fieldset>
    </form>
</body>
</html>
