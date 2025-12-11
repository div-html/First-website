<!DOCTYPE html>
<html>
<head>
    <title>Hotel Management PHP Demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body { font-family: Arial, sans-serif; background: #f0f0f0; padding: 30px; }
        .container { background: #fff; border-radius: 10px; box-shadow: 0 2px 8px #ccc; padding: 30px; max-width: 700px; margin: auto; }
        h1 { color: #326B77; }
        pre { background: #eee; padding: 10px; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hotel Management Demo: Guests & Room Booking</h1>
        <form method="get" style="margin-bottom: 20px;">
            <label for="guest">Select Guest:</label>
            <select name="guest" id="guest">
                <option value="Alice">Alice</option>
                <option value="Bob">Bob</option>
                <option value="Charlie">Charlie</option>
                <option value="Diana">Diana</option>
            </select>
            <button type="submit">View Guest</button>
        </form>
        <div>
            <?php
            
            $hotelName = "Paradise Hotel";
            $totalRooms = 50;
            $guests = array("Alice", "Bob", "Charlie", "Diana");
            $roomsBooked = 4;
            $isFull = ($roomsBooked >= $totalRooms);
            echo "<b>Hotel Info:</b><br>";
            echo "Hotel Name: $hotelName<br>";
            echo "Total Rooms: $totalRooms<br>";
            echo "Rooms Booked: $roomsBooked<br>";
            echo "Is Hotel Full? " . ($isFull ? "Yes" : "No") . "<br><br>";

            
            $roomsLeft = $totalRooms - $roomsBooked;
            echo "<b>Operators:</b><br>";
            echo "Rooms Left: $roomsLeft<br>";
            echo "Guests per Room (average): " . ($roomsBooked > 0 ? round(count($guests)/$roomsBooked,2) : 0) . "<br><br>";

            
            echo "<b>Decision Control:</b><br>";
            if ($roomsLeft == 0) {
                echo "No rooms available!<br>";
            } elseif ($roomsLeft < 5) {
                echo "Hurry! Only $roomsLeft rooms left.<br>";
            } else {
                echo "$roomsLeft rooms available.<br>";
            }

           
            echo "<br><b>Loop Control:</b><br>";
            echo "Guest List:<br>";
            for ($i = 0; $i < count($guests); $i++) {
                echo ($i+1) . ". " . $guests[$i] . "<br>";
            }
            echo "<br>Room Status:<br>";
            for ($i = 1; $i <= $totalRooms; $i++) {
                if ($i <= $roomsBooked) {
                    echo "Room $i: Occupied<br>";
                } else {
                    echo "Room $i: Available<br>";
                }
                if ($i >= 10) break;
            }
            ?>
        </div>
    </div>
    
</body>
</html>
