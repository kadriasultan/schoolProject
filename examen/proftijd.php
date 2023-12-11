<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <style>
    /*proefles css begin*/
#body-proefrijden {
  text-align: center;
}
.proefles {
  padding: 5% 20% 0 20%;
  text-align: center;
  flex: 1;
}

.flex-child:first-child {
  margin-right: 1px;
  text-align: center;
}

.textvak {
  margin-top: 20px;
  color: #f0f0f2;
  background-color: #bdb2ab;
  border-radius: 5px;
  padding: 4px 0px 4px 7px;
  border: 0px;
}
.proefknop {
  margin-top: 20px;
  background-color: #a39588;
  padding: 15px 100px 15px 100px;
  border-radius: 8px;
  font-size: larger;
  border: 0px;
}

.flex-container {
  margin-left: 6%;
  text-align: center;
  display: grid;
  grid-template-columns: 50% 50%;
  align-items: center;
}

.flex-child {
  width: 30%;
  float: left;
  padding-left: 40%;
  text-align: center;
  display: grid;
  grid-template-columns: auto;
}
#textvak-header {
  width: fit-content;
  display: grid;
  grid-template-columns: 45% 45%;
  grid-column-gap: 10%;
}
.resize {
  width: 51%;
}
#line-header {
  color: #f0f0f2;
  width: 5%;
  margin-left: 25%;
  height: 5px;
  background-color: #f0f0f2;
}
#midline-hr {
  margin-top: 3%;
  color: #f0f0f2;
  width: 52%;
  margin-left: 25%;
  height: 5px;
  background-color: #f0f0f2;
}
#fname {
  color: #f0f0f2;
  background-color: #bdb2ab;
  border-radius: 5px;
  padding: 4px 0px 4px 7px;
  border: 0px;
}
#lname {
  color: #f0f0f2;
  background-color: #bdb2ab;
  border-radius: 5px;
  padding: 4px 0px 4px 7px;
  border: 0px;
}
#E-mail {
  color: #f0f0f2;
  background-color: #bdb2ab;
  border-radius: 5px;
  padding: 4px 0px 4px 7px;
  border: 0px;
}

#number {
  color: #f0f0f2;
  background-color: #bdb2ab;
  border-radius: 5px;
  padding: 4px 0px 4px 7px;
  border: 0px;
}

/*proefles css eind */
/*login leerling/instructeur css begin*/
.body-login {
  text-align: center;
  padding-top: 10%;
  margin: 0 32%;
}
.gebruikersnaam {
  margin-top: 10%;
  height: 7vh;
}
.input-gebruikersnaam {
  margin-top: 2%;
  border: transparent;
  width: 100%;
  height: 50%;
  border-radius: 8px;
  color: #1d1d1d;
  font-size: 200%;
  padding: 2%;
}
.password {
  margin-top: 15%;
  height: 7vh;
}
.input-password {
  margin-top: 2%;
  border: transparent;
  width: 100%;
  height: 50%;
  border-radius: 8px;
  color: #1d1d1d;
  font-size: 200%;
  padding: 2%;
}
.forgot-password {
  float: left;
  margin-top: 1%;
}
#login-footer {
  margin-top: 25%;
  display: grid;
  grid-template-columns: 50% 50%;
}
#loginbtn {
  margin-left: 20%;
  width: 80%;
  height: 60px;
  border-radius: 10px;
  border: #a39588;
  background-color: #a39588;
  font-size: 165%;
}
    </style>


<div id="body-proefrijden">
    <div style="text-align: center">
        <h1 style="font-size: 45px; padding: 2% 0 0 0">GRATIS PROEFRIJLES PLANNEN</h1>
    
    
        <h3 style="padding-bottom: 2%; font-size: 25px">Reserveer snel en gemakkelijk een dag en tijd!</h3>
    </div>
    <div class="flex-container">
    
         <div class="flex-child">
            <div>
                <h1 style="float: left;">Waar?</h1>
            </div>
            <div id="textvak-header">
                <input class="textvak" type="text" value="Postcode">
                <input class="textvak" type="text" value="Huisnummer">
            </div>
            <h2 style="padding-top: 5%">Gegevens</h2>

    <h3 style="color: #bdb2ab">Naam</h3>

    <form action="">
        <label for="fname">Voornaam*</label><br>
        <input type="text" id="fname" name="fname"><br><br>

        <label for="lname">Achternaam*</label><br>
        <input type="text" id="lname" name="lname"><br><br>

        <label for="E-mail">E-mail*</label><br>
        <input type="e-mail" id="E-mail" name="e-mail"><br><br>

        <label for="number">Mobiel*</label><br>
        <input type="number" id="number" name="number"><br><br>

    </form>

         <a href="MainWebsite.html" input  class="proefknop" type="submit" name="Verzonden"> Verzonden</a>
            <a >Verzonden</a>   
        </div>
            <img class="resize" src="Pictures/proefles.png">
        
    </div>

    
</div>
  
</body>
</html>