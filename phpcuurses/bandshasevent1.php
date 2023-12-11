//bands//
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
  $username = "root";
  $password = "";
  $database = new PDO ("mysql:host=localhost; dbname=test_test;",$username,$password);

  
  if (isset($_POST['verzonde'])) {
      $tijd = $_POST["tijd"];
      $event_id = $_POST["event_id"];
      $bands_id = $_POST["bands_id"];
  
      $addData = $database->prepare("INSERT INTO `bandshasevent`(`tijd`, `event_id`, `bands_id`) 
      VALUES (?, ?, ?)");
  
      $addData->bindValue(1, $tijd);
      $addData->bindValue(2, $event_id);
      $addData->bindValue(3, $bands_id);
  
      // Execute the prepared statement
      if ($addData->execute()) {
          echo 'Data inserted successfully.';
      } else {
          echo 'Failed to insert data.';
      }
  }
  ?>
  
  <form method="POST">
      Band Name:
      <select class="i1" name="bands_id" required>
          <option value="">Select tijd</option>
          <option value="1">ABBA 1</option>
          <option value="2">Big Star 2</option>
          <!-- Add more options as needed -->
      </select>
      <br>
  
      Event Name:
      <select class="i1" name="event_id" required>
          <option value="">Select an event</option>
          <option value="1">ABBA 1</option>
          <option value="2">Big Star 2</option>
          <!-- Add more options as needed -->
      </select>
      <br>
  
      Tijd:
      <select class="i1" name="tijd" required>
          <option value="">Select a time</option>
          <option value="10:00">10:00</option>
          <option value="12:00">12:00</option>
          <!-- Add more options as needed -->
      </select>
      <br>
  
      <button type="submit" name="verzonde">Submit</button>
  </form>
  
  <input type="button" onclick="window.location.href='testtest.php';" value="Choose Time" />
  