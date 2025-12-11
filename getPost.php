
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET AND POST</title>
    <link rel="stylesheet" href="style1.css">
   
</head>
<body>
    <div class="navigation">
        <nav>
            <p>Get And Post Method</p>
        </nav>
    </div>
 
    <marquee>Registration Form here</marquee>
    <div class="container" id="container">
        <form action="processdata.php" method="Post">
        <label for="text">Name:</label>
        <input type="text" name="fullname" id="text" placeholder="Divyam Pariyar" required> <br><br>
        <label for="password">Password:</label>
        <input type="password" name="pass" id="password" required><br><br>
        <div class="buttons">
             <input id="submit" type="submit">
             <button id="btn">Just click</button>
        </div>
       
        <p>If you're not registered yet, <a href="register.php">Register Here</a></p>
        <p id="number"></p>
    </form>
    
    </div>
    <script src="script.js" defer></script>
</body>
</html>