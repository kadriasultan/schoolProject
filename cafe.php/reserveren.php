<!DOCTYPE html>
<html>
<head>
  <title>Evenement Reservering</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    h1 {
      color: #333;
    }
    form {
      margin-bottom: 20px;
    }
    label {
      display: block;
      margin-bottom: 10px;
    }
    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 8px 16px;
      text-decoration: none;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #45a049;
    }
    .event {
      display: inline-block;
      width: 45%;
      margin-right: 10px;
      padding: 10px;
      border: 1px solid #ddd;
    }
  </style>
</head>
<body>
  <h1>Evenement Reservering</h1>

  <?php
  // Database connection setup
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "cafe2";

  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection errors
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Query to fetch events
  $event_sql = "SELECT * FROM event";
  $event_result = $conn->query($event_sql);

  if ($event_result->num_rows > 0) {
    echo "<form method='POST' action='reservering.php'>";
    echo "<label>Selecteer een evenement:</label><br>";

    while ($event_row = $event_result->fetch_assoc()) {
      echo "<div class='event'>";
      echo "<label>";
      echo "<input type='radio' name='selected_event' value='" . $event_row["id"] . "' required>";
      echo $event_row["naam"] . " - " . $event_row["datum"];
      echo "</label>";
      echo "</div>";
    }

    echo "<br>";
    echo "<label>Naam:</label><br>";
    echo "<input type='text' name='name' required><br>";
    echo "<label>Email:</label><br>";
    echo "<input type='email' name='email' required><br>";
    echo "<input type='submit' value='Reserveer'>";
    echo "</form>";
  } else {
    echo "<p>Geen evenementen gevonden</p>";
  }

  // Close database connection
  $conn->close();
  ?>
</body>
</html>
