<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <style>
        
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            background-image: url(https://images.unsplash.com/photo-1485470733090-0aae1788d5af?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8NGslMjB3YWxscGFwZXJzfGVufDB8fDB8fHww);
            background-size: cover;
        }
        nav a {
            text-decoration: none;
            color: white;
            font-family: "Playfair Display", serif;
            font-size: 20px;
            padding: 3px;
        }
        .navi { margin-right: 10px; }
        a:hover { color: cornflowerblue; }
        .navigation {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }
        .nav-items { display: flex; gap: 10px; }
        .head {
            font-family: "Dancing Script", cursive;
            font-size: 27px;
            margin-left: 20%;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid white;
            margin: 70px auto;
            width: 30%;
            height: auto;
            padding: 20px;
            backdrop-filter: blur(10px);
            border-radius: 20px;
        }
        .container h1 {
            font-family: "Dancing Script", cursive;
            font-size: 40px;
            text-align: center;
            margin-bottom: 15px;
            color: white;
        }
        .input1 { width: 100%; margin: 15px 0; }
        .input1 input {
            width: 100%;
            height: 40px;
            background: transparent;
            border: 2px solid #326B77;
            border-radius: 30px;
            padding: 10px 20px;
            color: white;
        }
        .input1 input::placeholder { color: white; }
        .container .btn {
            background: whitesmoke;
            width: 100%;
            border-radius: 20px;
            height: 35px;
            border: none;
            margin: 10px 0;
            font-weight: bold;
            cursor: pointer;
        }
        .container .btn:hover { background-color: darkgray; }
        .remember, .Register p { color: white; font-size: 14px; }
        .Register a { color: white; text-decoration: none; }
        .Register a:hover { color: cornflowerblue; }
        .output {
            margin-top: 20px;
            color: white;
            font-family: Arial, sans-serif;
            font-size: 16px;
        }

    </style>
</head>
<body>
    <div class="navigation">
        <div class="logo">
            <img style="margin-top: 20px;" height="85" width="200" src="https://logodix.com/logo/971485.png" alt="logo">
        </div>
        <div class="head">
            <p style="color: white;">Paradise Hotel <br> To Live in Peace.</p>
        </div>
        <div class="nav-items">
            <nav>
                <a class="navi" href="index.html">Home</a>
                <a class="navi" href="rooms.html">Rooms</a>
                <a class="navi" href="booking.html">Booking</a>
                <a class="navi" href="services.html">Services</a>
                <a href="login.php">Login</a>
            </nav>
        </div>
    </div>

    <div class="container">
        <form method="post" action="">
            <h1>Login</h1>
            <div class="input1">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="input1">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="remember">
                <input type="checkbox"> Remember Me?
            </div>
            <button type="submit" class="btn" name="submitPost">Login with POST</button>
            <button type="submit" class="btn" name="submitGet" formaction="?">Login with GET</button>
            <div class="Register">
                <p>Don't Have an Account? <a href="#">Register Here</a></p>
            </div>
        </form>
    </div>

    <div class="output">
 
    <?php
        if (isset($_POST['submitPost'])) {
        
            include 'db_connect.php';

            
            $username = htmlspecialchars($_POST['username']);
            $password = htmlspecialchars($_POST['password']);

           
            $sql = "INSERT INTO Users (username, password) VALUES ('$username', '$password')";

            if ($conn->query($sql) === TRUE) {
                echo "<script>
                        alert('Welcome, $username!');
                        window.location.href = 'index.html';
                      </script>";
            } else {
                echo "<p style='color: red;'>Error: " . $conn->error . "</p>";
            }
             if (isset($_GET['submitGet'])) {
            $username = htmlspecialchars($_GET['username']);
            $password = htmlspecialchars($_GET['password']);

        }
            $conn->close();
        }
        ?>
    </div>
</body>
</html>
