<style>
    body{
        background-color: pink;
    }
    form{
        border: 1px solid ;

        width: 300px;
        height: 400px;
        background: rosybrown;

        margin-top: 50px;
        margin-left: 50px;

    }
    select{
        width: 300px;
        text-align: center;
        height: 30px;
    }
    .i1,.i2,.i3,.i4,.i5,.i6,.i7{
        width: 300px;
        height: 30px;
        text-align: center;

    }
    .t{
        width: 300px;
        height: 100px;
    }
    .t1{
        width: 300px;
        height: 30px;
        text-align: center;

    }
    button{
        margin-left: 110px;
        margin-top: 10px;
    }
</style>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_test";

// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['verzenden'])) {
    $naam = $_POST['naam'];
    $tijd = $_POST['tijd'];
    $duurt = $_POST['duurt'];
    $antaal_leden = $_POST['antaal_leden'];
    $muziekgener = $_POST['muziekgener'];
    $herkomst = $_POST['herkomst'];
    $sets = $_POST['sets'];

    $sql = "INSERT INTO bandshasevent (naam, tijd, duurt, antaal_leden, muziekgener, herkomst, sets)
            VALUES ('$naam', '$tijd', '$duurt', '$antaal_leden', '$muziekgener', '$herkomst', '$sets')";

    if ($conn->query($sql) === TRUE) {
        echo 'Reservation successful';
    } else {
        echo 'Error: ' . $sql . '<br>' . $conn->error;
    }
}

$conn->close();
?>

<form method="POST">
    bandNaam:
    <label>
        <select class="i1" type="text" name="naam" required>
            <option>bandNaam</option>
            <option>ABBA</option>
            <option>Big Star</option>
        </select>
    </label>
    <br>
    tijd:
    <label>
        <select class="i2" type="text" name="tijd" required>
            <option>tijd</option>
            <option>9 uur</option>
            <option>10 uur</option>
            <option>12 uur</option>
            <option>1 uur</option>
            <option>2 uur</option>
        </select>
    </label>
    <br>
    duurt:
    <label>
        <select class="i3" type="text" name="duurt" required>
            <option>Duurt</option>
            <option>2 uur</option>
            <option>1 uur</option>
        </select>
    </label>
    <br>
    aantallen:
    <label>
        <select class="i4" type="text" name="antaal_leden" required>
            <option>antaal leden</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
        </select>
    </label>
    <br>
    muziekGenre:
    <label>
        <select class="i5" type="text" name="muziekgener" required>
            <option>muziekGenre</option>
            <option>Canon</option>
            <option>Citypop</option>
        </select>
    </label>
    <br>
    sets:
    <label>
        <select class="i6" type="text" name="sets" required>
            <option>sets</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>4</option>
        </select>
    </label>
    herkomstBand:
    <label>
        <select class="i7" type="text" name="herkomst" required>
            <option>herkomstBand</option>
            <option>BE</option>
            <option>NL</option>
        </select>
    </label>
    <input type="submit" name="verzenden" value="Verzenden"/>
    <br>
</form>
<input type="button" onclick="window.location.href='index.php';" value="klik hier" />
