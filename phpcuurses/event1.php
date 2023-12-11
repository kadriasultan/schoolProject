//event//
<style>
body{
  background-color: pink;
}
form{
  border: 1px solid ;

  width: 300px;
  height: 300px;
  background: rosybrown;

  margin-top: 50px;
  margin-left: 50px;
  
}
select{
  width: 300px;
  text-align: center;
  height: 30px;
}
.i1,.i2,.i3{
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

$username = "root";
$password = "";
$database = new PDO ("mysql:host=localhost; dbname=test_test;",$username,$password);

if (isset($_POST['verzonde'])) {
  $evn_datum = $_POST["date"];
  $evn_naam = $_POST["naam"];
  $evn_tel = $_POST["tel"];
  $evn_email = $_POST["email"];
  $evn_prijs = $_POST["prijs"];

  $addData = $database->prepare("INSERT INTO `event`(`evn_datum`, `evn_naam`, `evn_tel`, `evn_email`, `evn_prijs`, `has_id`)
     VALUES (?, ?, ?, ?, ?, ?)");

  // Set the value for has_id (replace 1 with the appropriate ID)
  $has_id = 1;

  $addData->bindValue(1, $evn_datum);
  $addData->bindValue(2, $evn_naam);
  $addData->bindValue(3, $evn_tel);
  $addData->bindValue(4, $evn_email);
  $addData->bindValue(5, $evn_prijs);
  $addData->bindValue(6, $has_id);

  if ($addData->execute()) {
    echo 'Data inserted successfully.';
  } else {
    echo 'Failed to insert data.';
  }
}
?>

<form method="POST">
  Datum: <input class="i1" type="date" name="date" required/><br>
  EventNaam: <select type="text" name="naam" required>
      <option value="event">event</option>
      <option value="ABBA">ABBA</option>
      <option value="Big Star">Big Star</option>
  </select><br>
  Tel: <input class="i3" type="text" name="tel" required/><br>
  Email: <input class="i2" type="text" name="email" required/><br>
  Prijs: <select type="text" name="prijs" required>
      <option value="prijsevent">prijsevent</option>
      <option value="$30 ABBA">$30 ABBA</option>
      <option value="$50 Big Star">$50 Big Star</option>
  </select><br>
  <button type="submit" name="verzonde">Submit</button>
</form>
<input type="button" onclick="window.location.href='bandshasevent1.php';" value="kies tijd" />