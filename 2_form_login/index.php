<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the entered username and password
    $enteredUsername = $_POST["username"];
    $enteredPassword = $_POST["password"];

    // Replace the following with your actual username and password validation logic
    $validUsername = "wiener";
    $validPassword = "peter";

    // Check if the entered credentials are valid
    if ($enteredUsername == $validUsername && $enteredPassword == $validPassword) {
        // Redirect to the login success page
        header("Location: login-success.php");
        exit();
    } else {
        // Invalid credentials, you might want to display an error message
        $errorMessage = "Invalid username or password";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        main {
            padding: 20px;
            margin-bottom: 80px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            cursor: pointer;
            padding: 12px;
            border: none;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        footer, nav {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
    </style>
</head>
<body>

    <header>
        <h1>네이버</h1>
    </header>

    <main>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <h2>Login</h2>

            <?php
            // Display error message if any
            if (isset($errorMessage)) {
                echo '<p style="color: red;">' . $errorMessage . '</p>';
            }
            ?>

            <label for="username">Username:</label>
            <input type="text" name="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <input type="submit" value="Login">
        </form>

        <h2>Welcome to Your Website hello</h2>
        <p>This is a sample content for your website.</p>
        <img src="https://placekitten.com/200/200" alt="고양이 사진">
    </main>

    <footer>
        <p>&copy; 2023 Your Website. All rights reserved.</p>
    </footer>

</body>
</html>
