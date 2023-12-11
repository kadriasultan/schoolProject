
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
$dsn = 'mysql:host=localhost;dbname=test_test';
$username = 'root';
$password = '';
$database = new PDO($dsn, $username, $password);





if(isset($_POST['verzenden'])){
    $naam = $_POST['naam'];
    $tijd = $_POST['tijd'];
    $duurt = $_POST['duurt'];
    $antaal_leden = $_POST['antaal_leden'];
    $muziekgener = $_POST['muziekgener'];
    $herkomst = $_POST['herkomst'];
    $sets = $_POST['sets'];

    $addData = $database->prepare(
        'INSERT INTO `bandshasevent`(`naam`, `tijd`, `duurt`, `antaal_leden`, `muziekgener`, `herkomst`, `sets`)
         VALUES (?, ?, ?, ?, ?, ?, ?)'
    );
    $addData->bindValue(1, $naam);
    $addData->bindValue(2, $tijd);
    $addData->bindValue(3, $duurt);
    $addData->bindValue(4, $antaal_leden);
    $addData->bindValue(5, $muziekgener);
    $addData->bindValue(6, $herkomst);
    $addData->bindValue(7, $sets);
//   var_dump($addData);
    if($addData->execute()){
        echo 'gelukt';
    }else{
        echo 'helaas';
    }}

?>
<form method="POST">

    bandNaam: <label>
        <select class="i1" type="text" name="naam" required>
            <option>bandNaam</option>
            <option>ABBA</option>
            <option>Big Star</option>
        </select>
    </label>
    <br>
    tijd: <label>
        <select class="i2" type="text" name="tijd" required>
        <option>tijd</option>
        <option>10 uur</option>
        <option>11 uur</option>
        </select>
    </label>
    <br>
    duurt: <label>
        <select class="i3" type="text" name="duurt" required>
        <option>Duurt</option>
        <option>2 uur</option>
        <option>1.5 uur</option>
        <option>1 uur</option>
        </select>
    </label>
    <br>

    aantallen: <label>
        <select class="i4" type="text" name="antaal_leden" required>
        <option>aantallen</option>
        <option>7</option>
        <option>12</option>
        </select>
    </label>
    <br>
    muziekGenre: <label>
        <select class="i5" type="text" name="muziekgener" required>
        <option>muziekGenre</option>
        <option>Canon</option>
        <option>Citypop</option>
        </select>
    </label>
    <br>
    sets: <label>
        <select class="i6" type="text" name="sets" required>
        <option>sets</option>
        <option>5</option>
        <option>4</option>
        </select>
    </label>
    herkomstBand: <label>
        <select class="i7" type="text" name="herkomst" required >
        <option>herkomstBand</option>
        <option>BE</option>
        <option>NL</option>
        </select>
    </label>
    <input type="submit" name="verzenden" value="Verzenden"/>
    <br>

</form>
<input type="button" onclick="window.location.href='bandshasevent1.php';" value="kies tijd" />