<?php
// Verbinding maken met de database
$conn = mysqli_connect("localhost", "root", "", "reserveringen");

// Controleren op connectiefouten
if (!$conn) {
    die("Kan geen verbinding maken met de database: " . mysqli_connect_error());
}

// Controleer of het formulier is ingediend
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ontvang en ontsmet de ingediende gegevens
    $naam = mysqli_real_escape_string($conn, $_POST["naam"]);
    $datum = mysqli_real_escape_string($conn, $_POST["datum"]);
    $tijd = mysqli_real_escape_string($conn, $_POST["tijd"]);

    // Voeg de reservering toe aan de database
    $query = "INSERT INTO reservering (naam, datum, tijd) VALUES ('$naam', '$datum', '$tijd')";
    if (mysqli_query($conn, $query)) {
        echo "Reservering succesvol toegevoegd.";
    } else {
        echo "Er is een fout opgetreden bij het toevoegen van de reservering: " . mysqli_error($conn);
    }
}

// Sluit de databaseverbinding
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reserveren</title>
</head>
<body>
    <h1>Reserveren</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="naam">Naam:</label>
        <input type="text" id="naam" name="naam" required><br><br>
        <label for="datum">Datum:</label>
        <input type="date" id="datum" name="datum" required><br><br>
        <label for="tijd">Tijd:</label>
        <input type="time" id="tijd" name="tijd" required><br><br>
        <input type="submit" value="Reserveren">
    </form>
</body>
</html>
