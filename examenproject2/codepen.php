<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Form wizard without jquery</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<form action="" class="autofox-web-form" style="max-width:600px;">
        <div>
            <div class="autofox-web-form-legend">
          <div class="autofox-web-legend-tab first active" data-autofox-breadcrumb="autofox-personalia-tab">
            <span class="autofox-legend-icon">1</span> Personalia
          </div>
          <div class="autofox-web-legend-tab" data-autofox-breadcrumb="autofox-street-tab">
            <span class="autofox-legend-icon">2</span> Adres
          </div>
          <div class="autofox-web-legend-tab last" data-autofox-breadcrumb="autofox-account-tab">
            <span class="autofox-legend-icon">3</span> Contact
          </div>
        </div>
        <div class="autofox-web-form-fieldset">
          <div class="autofox-web-form-tab show" id="autofox-personalia-tab">
            <div class="autofox-web-form-tab-body">
              <div class="autofox-web-form-group">
                <label for="" class="autofox-web-form-label">Geslacht</label>
                <select id="autofox-gender" class="autofox-web-form-control">
                  <option value="0">Man</option>
                  <option value="1">Vrouw</option>
                  <option value="2">Anders</option>
                </select>
              </div>
              <div class="autofox-web-form-group">
                <label for="" class="autofox-web-form-label">Voornaam</label>
                <input id="autofox-firstname" type="text" class="autofox-web-form-control">
              </div>
              <div class="autofox-web-form-group">
                <label for="" class="autofox-web-form-label">Tussenvoegsel</label>
                <input id="autofox-insertion" type="text" class="autofox-web-form-control">
              </div>
              <div class="autofox-web-form-group">
                <label for="" class="autofox-web-form-label">Achternaam</label>
                <input id="autofox-lastname" type="text" class="autofox-web-form-control">
              </div>
              <div class="autofox-web-form-group">
              <label for="" class="autofox-web-form-label">Geboortedatum</label>
              <input id="autofox-birthdate" type="date" class="autofox-web-form-control">
            </div>
            </div>
            
            <div class="autofox-web-form-tab-footer">
              <button type="button" class="autofox-button-primary" data-autofox-tab="autofox-street-tab" style="margin-left:auto;">Volgende</button>
            </div>
          </div>
          
          <div class="autofox-web-form-tab" id="autofox-street-tab">
            <div class="autofox-web-form-tab-body">
              <div class="autofox-web-form-group">
                <label for="" class="autofox-web-form-label">Straat</label>
                <input id="autofox-street" type="text" class="autofox-web-form-control">
              </div>
              <div class="autofox-web-form-group">
                <label for="" class="autofox-web-form-label">Huisnummer</label>
                <input id="autofox-streetnr" type="text" class="autofox-web-form-control">
              </div>
              <div class="autofox-web-form-group">
                <label for="" class="autofox-web-form-label">Postcode</label>
                <input id="autofox-postalcode" type="text" class="autofox-web-form-control">
              </div>
              <div class="autofox-web-form-group">
              <label for="" class="autofox-web-form-label">Stad</label>
              <input id="autofox-city" type="text" class="autofox-web-form-control">
            </div>
            </div>
            
            <div class="autofox-web-form-tab-footer">
              <button type="button" class="autofox-button-secondary" tabindex="-1" data-autofox-tab="autofox-personalia-tab">Terug</button>
              <button type="button" class="autofox-button-primary" data-autofox-tab="autofox-account-tab">Volgende</button>
            </div>
          </div>
          
          <div class="autofox-web-form-tab" id="autofox-account-tab">
            <div class="autofox-web-form-tab-body">
    
              <div class="autofox-web-form-group">
                <label for="" class="autofox-web-form-label">Email</label>
                <input id="autofox-email" type="email" class="autofox-web-form-control">
              </div>
              <div class="autofox-web-form-group">
                <label for="" class="autofox-web-form-label">Telefoon (mobiel)</label>
                <input id="autofox-phonemobile" type="tel" class="autofox-web-form-control">
              </div>
              <div class="autofox-web-form-group">
                <label for="" class="autofox-web-form-label">Telefoon (thuis)</label>
                <input id="autofox-phonehome" type="tel" class="autofox-web-form-control">
              </div>
            </div>
            <div class="autofox-web-form-tab-footer">
              <button type="button" tabindex="-1" class="autofox-button-secondary" data-autofox-tab="autofox-street-tab" >Terug</button>
           <button type="button" class="autofox-button-success">Inschrijven</button>
            </div>
          </div>
        </div>
        </div>
        <div id="autofox-web-form-result-success" class="autofox-web-form-wizard-result">
            <span class="autofox-web-form-wizard-result-icon autofox-success">
                &#10003;
            </span>
            <h3 class="autofox-web-form-wizard-result-title">
                Bedankt voor het aanmelden
            </h3>
            <p class="autofox-web-form-wizard-result-text">
                Je bent successvol ingeschreven voor de rijschool.
            </p>
        </div>
        <div id="autofox-web-form-result-failed" class="autofox-web-form-wizard-result">
            <span class="autofox-web-form-wizard-result-icon autofox-failed">
                &times;
            </span>
            <h3 class="autofox-web-form-wizard-result-title">
                Er is iets misgegaan
            </h3>
            <p id="autofox-web-form-display-text" class="autofox-web-form-wizard-result-text">
                Er is iets misgegaan tijdens het inschrijven.
            </p>
            <div class="autofox-web-form-wizard-result-action">

              <button id="autofox-web-form-close-result" type="button" class="autofox-button-primary" tabindex="-1" data-autofox-tab="autofox-personalia-tab">Opnieuw invullen</button>
            </div>
        </div>
    </form>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
