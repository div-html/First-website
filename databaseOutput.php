
<!-- filepath: c:\xampp\htdocs\Php\Domain\databaseOutput.php -->
<html>
<title>Database Output</title>

<head>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: "Playfair Display", serif;
            background-color: #f9f9f9; /* Matches the color of other webpages */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            width: 90%;
            max-width: 800px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px auto;
        }

        .container h1 {
            text-align: center;
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 16px;
            text-align: left;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 12px;
        }

        table th {
            background-color: #326B77; /* Matches the theme color */
            color: white;
            text-align: center;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        table td {
            text-align: center;
        }

        .no-results {
            text-align: center;
            font-size: 18px;
            color: #326B77;
            margin-top: 20px;
        }
        .btn button {
            width: 100%;
            background-color: #326B77;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .btn button:hover {
            background-color: #274d5e;
            transform: scale(1.05);
        }

        .btn button:active {
            transform: scale(0.95);
        }
    </style>
</head>

`<body>
    <div class="container">
        <h1>Student Database</h1>
        <?php
        
        include 'db_connect.php';

       
        $sql = "SELECT studentid, student_name, course_id, course_name, student_phone FROM student";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table><tr><th>ID</th><th>Name</th><th>Course ID</th><th>Course Name</th><th>Phone</th></tr>";
           
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["studentid"] . "</td><td>" . $row["student_name"] . "</td><td>" . $row["course_id"] . "</td><td>" . $row["course_name"] . "</td><td>" . $row["student_phone"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<p class='no-results'>No results found.</p>";
        }
        $conn->close();
        ?>
    <a class="btn" href="booking.html"><button>Go Back</button></a>
    </div>
</body>`

</html>