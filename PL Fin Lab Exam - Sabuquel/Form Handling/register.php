<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $errors = [];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $birthdate = $_POST['birthdate'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    if (empty($firstName) || empty($lastName) || empty($birthdate) || empty($username) || empty($password) || empty($confirmPassword) || empty($email) || empty($phone)) {
        $errors[] = "All fields are required.";
    }

    if ($password !== $confirmPassword) {
        $errors[] = "Password and Confirm Password do not match.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email address.";
    }

    if (empty($errors)) {
        $_SESSION['user'] = [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'birthdate' => $birthdate,
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'email' => $email,
            'phone' => $phone
        ];

        echo "<div class='container'><h3>Registration Successful! <a href='index.html'>Go back</a></h3></div>";
    } else {
        echo "<div class='container'>";
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
        echo "</div>";
    }
} else {
    echo '
    <html>
    <head>
        <style>
        body {
            font-family: sans-serif;
            background:rgb(255, 255, 255);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        h2 {
            color: rgb(90, 0, 75);
        }
        .homeBox {
            background-color: #fff;
            padding: 30px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-bottom:2px solid rgb(90, 0, 75);
        }
        form button{
            color: white;
            margin-top: 30px;
            padding: 5px 5px 5px 5px;
            float:right;
            text-align: center;
            background:rgb(90, 0, 75);
            border-radius: 5px;
        }
        </style>
    </head>
    <body>
        <div class="homeBox">
            <h2>Register</h2>
            <form method="POST" action="">
                <label for="first_name">First Name</label><br>
                <input type="text" id="first_name" name="first_name" required><br>

                <label for="last_name">Last Name</label><br>
                <input type="text" id="last_name" name="last_name" required><br>

                <label for="birthdate">Birthdate</label><br>
                <input type="date" id="birthdate" name="birthdate" required><br>

                <label for="username">Username</label><br>
                <input type="text" id="username" name="username" required><br>

                <label for="password">Password</label><br>
                <input type="password" id="password" name="password" required><br>

                <label for="confirm_password">Confirm Password</label><br>
                <input type="password" id="confirm_password" name="confirm_password" required><br>

                <label for="email">Email</label><br>
                <input type="email" id="email" name="email" required><br>

                <label for="phone">Phone</label><br>
                <input type="text" id="phone" name="phone" required><br>

                <button type="submit">Register</button>
            </form>
        </div>
    </body>
    </html>
    ';
}
?>