<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($_SESSION['user'])) {
        $storedUser = $_SESSION['user'];

        if ($storedUser['username'] == $username && password_verify($password, $storedUser['password'])) {
           
            header('Location: loggedin.php');
            exit;
        } else {
            
            echo "<p style='color: red;'>Invalid username or password. <a href='index.html'>Try again</a></p>";
        }
    } else {
        echo "<p style='color: red;'>No registered user found. <a href='index.html'>Register first</a></p>";
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
    form {
        background-color: #fff;
        padding: 30px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        border-bottom:2px solid rgb(90, 0, 75);
    }
    h2 {
        color: rgb(90, 0, 75);
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
        <form method="POST" action="">
            <h2>Log In</h2>
            Username: <br><input type="text" name="username" required><br>
            Password: <br><input type="password" name="password" required><br>
            <button type="submit">Log In</button>
        </form>
    </body>
    </html>
    ';
}
?>