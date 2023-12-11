<!DOCTYPE html>
<html>
<head>
  <title>Reservering Details</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    h1 {
      color: #333;
    }
    .reservation-details {
      margin-top: 20px;
      padding: 10px;
      border: 1px solid #ddd;
    }
    .button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #333;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <h1>Reservering Details</h1>

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

  if (isset($_GET["id"])) {
    $reservation_id = $_GET["id"];

    // Query to fetch reservation details
    $reservation_sql = "SELECT * FROM reservations WHERE id = $reservation_id";
    $reservation_result = $conn->query($reservation_sql);

    if ($reservation_result->num_rows > 0) {
      $reservation_row = $reservation_result->fetch_assoc();

      echo "<div class='reservation-details'>";
      echo "<p><strong>Reserverings-ID:</strong> " . $reservation_row["id"] . "</p>";
      echo "<p><strong>Evenement-ID:</strong> " . $reservation_row["event_id"] . "</p>";
      echo "<p><strong>Naam:</strong> " . $reservation_row["name"] . "</p>";
      echo "<p><strong>Email:</strong> " . $reservation_row["email"] . "</p>";
      echo "</div>";
    } else {
      echo "<p>Ongeldige reserverings-ID.</p>";
    }
  } else {
    echo "<p>Reserverings-ID niet gevonden.</p>";
  }
  

  // Close database connection
  $conn->close();
  ?>
    <a class="button" href="home.php">Go to home</a>

</body>
</html>
