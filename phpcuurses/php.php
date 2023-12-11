<!DOCTYPE html>
<html>
<head>
  <title>Agenda</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    h1 {
      color: #333;
    }
    table {
      border-collapse: collapse;
      width: 100%;
    }
    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
  </style>
</head>
<body>
  <h1>Agenda</h1>

  <table>
    <tr>
      <th>Naam evenement</th>
      <th>Datum</th>
      <th>Tijd</th>
      <th>Bandsnaam</th>
      <th>Genre</th>
    </tr>
    <?php
    // Database connection setup
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "event";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection errors
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // Query to fetch events with bands and genres
    $query = "SELECT e.name AS eventName, e.date, e.time, b.name AS bandName, b.genre
              FROM events e
              JOIN bands_has_event be ON e.id = be.event_id
              JOIN bands b ON b.id = be.band_id";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["eventName"] . "</td>";
        echo "<td>" . $row["date"] . "</td>";
        echo "<td>" . $row["time"] . "</td>";
        echo "<td>" . $row["bandName"] . "</td>";
        echo "<td>" . $row["genre"] . "</td>";
        echo "</tr>";
      }
    } else {
      echo "<tr><td colspan='5'>Geen evenementen gevonden</td></tr>";
    }

    // Close database connection
    $conn->close();
    ?>
  </table>
</body>
</html>
