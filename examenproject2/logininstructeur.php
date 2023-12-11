<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.google.com/specimen/Poppins" rel="stylesheet">
    <link rel="stylesheet" href="Style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vierkante Wielen</title>
</head>
<body>
    
    

<form action="agenda/index.php" method="post">
    <div  class="body-login">
        <h1>Inloggen als Instructeur</h1>
        <div class="gebruikersnaam">
            <h1 style="float: left;">Gebruikersnaam</h1>
            <input type="text" name="gebruikersnaam" class="input-gebruikersnaam">
        </div>
        <div class="password">
            <h1 style="float: left;">Wachtwoord</h1>
            <input type="password" name="password" class="input-password">    
        </div>
        <div id="login-intructeur">

    


            <a href="set-new-pass.html" id="forgot-password-instructeur"> Wachtwoord vergeten?</a>
           <a href="agenda/index.php" ><button id="loginbtn" onclick="window.location.href='#'">Log in</button></a>
        </div>
    </div>

</form>
</body>
</html>