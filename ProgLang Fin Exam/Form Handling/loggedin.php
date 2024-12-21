<?php
session_start();

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    ?>
    <!DOCTYPE html>
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
            .homeBox {
                background-color: #fff;
                padding: 30px;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
                border-bottom:2px solid rgb(90, 0, 75);
            }
            h2 {
                color: rgb(90, 0, 75);
            }
            li {
                margin-top: 20px;
                font-size: 16px;
            }
            a {
                font-weight: bold;
                text-decoration: none;
                color: white;
                padding: 10px;
                border-radius: 5px;
            }
            .logOutBtn{
                margin-top: 60px;
                padding: 10px 10px 10px 10px;
                float:right;
                text-align: center;
                background:rgb(170, 0, 0);
                border-radius: 5px;
            }
        </style>
    </head>
    <body>
        <div class="homeBox">
            <h2>Welcome <?php echo $user['first_name'] . " " . $user['last_name']; ?></h2>
            <li>Birthdate: <?php echo $user['birthdate']; ?></li>
            <li>Email Address: <?php echo $user['email']; ?></li>
            <li>Phone Number: <?php echo $user['phone']; ?></li>
            <a href="index.html"><div class="logOutBtn">Log Out</div></a>
            
        </div>
    </body>
    </html>
    <?php
} else {
    header('Location: index.html');
    exit;
}
?>