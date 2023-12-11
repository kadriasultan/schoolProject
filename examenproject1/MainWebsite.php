<!DOCTYPE html>
<html lang="en">
  <head>
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.google.com/specimen/Poppins" rel="stylesheet" />
    <link rel="stylesheet" href="Style.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vierkante Wielen</title>
  </head>
  <body>
    <div class="header">
      <div class="navbar">
        <img src="Pictures\Logo.jpeg" class="logo" />
        <ul>
          <li><a href="#Tarieven">Over Ons</a></li>
          <li><a href="register-php\index.php">Register</a></li>
          <div class="dropdown">
            <li><a href="#">Inloggen</a></li>
            <div class="dropdown-content">
              
              <a href="register-php/index.php">Instructuur</a>
            </div>
          </div>
        </ul>
      </div>
     
    </div>



    <div class="content" id="Tarieven" id="Over ons">
      <div class="over-ons">
        <h2>
          Wat bieden wij?<iconify-icon
            class="id-icon"
            icon="fa6-solid:id-card"
            style="color: white"
          ></iconify-icon>
        </h2>

        <h3>-Sneller slagen met minder lessen</h3>
        <p>
          Hoe langer je rijopleiding duurt, hoe meer lessen je nodig hebt. Dat
          blijkt uit jarenlange ervaring. Bij Vierkante Wielen kan je meerdere
          lessen per week afspreken. Daardoor leer je sneller autorijden.
        </p>
        <br />
        <h3>-Start direct</h3>
        <p>
          Geen wachttijden, maar direct starten. Bij Vierkante Wielen kan je in
          de meeste plaatsen nog gelijk beginnen.
        </p>
        <br />
        <h3>-Betaalgemak</h3>
        <p>
          lullo Betaal gespreid per maand of per les; bij onze rijschool kies je
          wat jou het beste uitkomt. Vraag nu je proefles aan bij de grootste
          rijschool van Nederland.
        </p> 
        
      </div>


      <div class="reclame">
        <h1>AUTORIJBEWIJS B HALEN? VOLG AUTORIJLES BIJ VIERKANTE WIELEN!</h1>
        <a href="Proefrijden.html">
          <button
            class="reclamebtn"
            onclick="window.location.href = 'dist\index.php' a="Proefrijden.html"
          >
            Schrijf je nu in!
          </button></a
        >
      </div>   


      <div id="sign-in-card">
        <h1>MELD JE NU AAN!</h1>
        <div class="price-sign-in">
          <h3 class="strikethrough">46,75</h3>
          <h2 style="color: #000">39.75</h2>
          <h3>per les</h3>
        </div>


       




        <div class="bonus-sign-in">
          <p style="font-size: 15px">
            <iconify-icon
              inline
              icon="material-symbols:check"
              style="color: #a39588"
            ></iconify-icon>
            €7 korting per les
          </p>
          <p style="font-size: 15px">
            <iconify-icon
              inline
              icon="material-symbols:check"
              style="color: #a39588"
            ></iconify-icon>
            incl. gratis herexamens
          </p>
          <p style="font-size: 15px">
            <iconify-icon
              inline
              icon="material-symbols:check"
              style="color: #a39588"
            ></iconify-icon>
            betaal per maand
          </p>
          <p style="font-size: 15px">
            <iconify-icon
              inline
              icon="material-symbols:check"
              style="color: #a39588"
            ></iconify-icon>
            100% flexibel, geen pakketkosten
          </p>
        </div>
        <div class="input-sign-in">
          <input
            id="input-a"
            type="text"
            name="Postcode"
            placeholder="Postcode"
          />
          <div id="input-sign-in-2">
            <input
              id="input-b"
              type="text"
              name="huisnr"
              placeholder="huisnr"
            />
            <input
              id="input-b"
              type="text"
              name="toevoeging"
              placeholder="toevoeging"
            />
          </div>
        </div>
        <a href="Loginleerling.html">
          <button id="sign-in-btn">Toon beschikbaarheid</button></a
        >
      </div>
      <img src="Pictures/stuur.png" style="width: 70%; margin-top: 10%" />
      <div id="content-lorem">
        <h2 style="margin-top: 10%">Lorem ipsum dolor, sit amet consectetur</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab iusto
          aperiam architecto quas saepe voluptates. Consectetur doloremque
          voluptates saepe quae, quas ex nesciunt fuga perferendis reiciendis
          deserunt nulla ipsa. Voluptate!
        </p>
      </div>
    </div>
    <div id="service">
      <h1 style="color: #a39588">UITSTEKENDE SERVICE</h1>
    </div>
    <div id="content-service">
      <div id="geslaagd">
        <iconify-icon
          id="icon-party-popper"
          icon="fluent-emoji-high-contrast:party-popper"
        ></iconify-icon>
        <h1>87.435</h1>
        <h2>tevreden geslaagd</h2>
      </div>
      <div id="beoordeling">
        <iconify-icon
          id="icon-award"
          icon="dashicons:awards"
          style="color: black"
        ></iconify-icon>
        <h1>8.4</h1>
        <h2>klant beoordeling</h2>
      </div>
      <div id="beveling">
        <iconify-icon
          id="icon-conversation"
          icon="bx:conversation"
          style="color: black"
        ></iconify-icon>
        <h1>87.435</h1>
        <h2>tevreden geslaagd</h2>
      </div>
    </div>
    <div id="reviews">
      <div>
        <div>
          <div class="review-card">
            <div class="review-icons">
              <div class="review-five-stars">
                <iconify-icon
                  icon="material-symbols:star"
                  style="color: #3b3b40"
                ></iconify-icon>
                <iconify-icon
                  icon="material-symbols:star"
                  style="color: #3b3b40"
                ></iconify-icon>
                <iconify-icon
                  icon="material-symbols:star"
                  style="color: #3b3b40"
                ></iconify-icon>
                <iconify-icon
                  icon="material-symbols:star"
                  style="color: #3b3b40"
                ></iconify-icon>
                <iconify-icon
                  icon="material-symbols:star"
                  style="color: #3b3b40"
                ></iconify-icon>
              </div>
              <iconify-icon
                class="google-icon"
                icon="mdi:google"
                style="color: #3b3b40"
              ></iconify-icon>
            </div>

            <div class="review-crd-txt">
              Hele goede rijschool. alles in één keer gehaald in een hele korte
              tijd.
            </div>
          </div>
          <div class="triangle"></div>
          <div>
            <div class="account-logo">
              <p class="account-letter">M</p>
            </div>
            <div class="account-name">
              <h3 style="font-weight: 100">Manon van Dijk</h3>
              <p style="font-weight: lighter">12-06-2022</p>
            </div>
          </div>
        </div>
      </div>

      <div>
        <div>
          <div class="review-card">
            <div class="review-icons">
              <div class="review-five-stars">
                <iconify-icon
                  icon="material-symbols:star"
                  style="color: #3b3b40"
                ></iconify-icon>
                <iconify-icon
                  icon="material-symbols:star"
                  style="color: #3b3b40"
                ></iconify-icon>
                <iconify-icon
                  icon="material-symbols:star"
                  style="color: #3b3b40"
                ></iconify-icon>
                <iconify-icon
                  icon="material-symbols:star"
                  style="color: #3b3b40"
                ></iconify-icon>
                <iconify-icon
                  icon="material-symbols:star"
                  style="color: #3b3b40"
                ></iconify-icon>
              </div>
              <iconify-icon
                class="google-icon"
                icon="mdi:google"
                style="color: #3b3b40"
              ></iconify-icon>
            </div>

            <div class="review-crd-txt">
              Hele goede rijschool. alles in één keer gehaald in een hele korte
              tijd.
            </div>
          </div>
          <div class="triangle"></div>
          <div>
            <div class="account-logo">
              <p class="account-letter">M</p>
            </div>
            <div class="account-name">
              <h3 style="font-weight: 100">Manon van Dijk</h3>
              <p style="font-weight: lighter">12-06-2022</p>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div>
          <div class="review-card">
            <div class="review-icons">
              <div class="review-five-stars">
                <iconify-icon
                  icon="material-symbols:star"
                  style="color: #3b3b40"
                ></iconify-icon>
                <iconify-icon
                  icon="material-symbols:star"
                  style="color: #3b3b40"
                ></iconify-icon>
                <iconify-icon
                  icon="material-symbols:star"
                  style="color: #3b3b40"
                ></iconify-icon>
                <iconify-icon
                  icon="material-symbols:star"
                  style="color: #3b3b40"
                ></iconify-icon>
                <iconify-icon
                  icon="material-symbols:star"
                  style="color: #3b3b40"
                ></iconify-icon>
              </div>
              <iconify-icon
                class="google-icon"
                icon="mdi:google"
                style="color: #3b3b40"
              ></iconify-icon>
            </div>

            <div class="review-crd-txt">
              Hele goede rijschool. alles in één keer gehaald in een hele korte
              tijd.
            </div>
          </div>
          <div class="triangle"></div>
          <div>
            <div class="account-logo">
              <p class="account-letter">M</p>
            </div>
            <div class="account-name">
              <h3 style="font-weight: 100">Manon van Dijk</h3>
              <p style="font-weight: lighter">12-06-2022</p>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div>
          <div class="review-card">
            <div class="review-icons">
              <div class="review-five-stars">
                <iconify-icon
                  icon="material-symbols:star"
                  style="color: #3b3b40"
                ></iconify-icon>
                <iconify-icon
                  icon="material-symbols:star"
                  style="color: #3b3b40"
                ></iconify-icon>
                <iconify-icon
                  icon="material-symbols:star"
                  style="color: #3b3b40"
                ></iconify-icon>
                <iconify-icon
                  icon="material-symbols:star"
                  style="color: #3b3b40"
                ></iconify-icon>
                <iconify-icon
                  icon="material-symbols:star"
                  style="color: #3b3b40"
                ></iconify-icon>
              </div>
              <iconify-icon
                class="google-icon"
                icon="mdi:google"
                style="color: #3b3b40"
              ></iconify-icon>
            </div>

            <div class="review-crd-txt">
              Hele goede rijschool. alles in één keer gehaald in een hele korte
              tijd.
            </div>
          </div>
          <div class="triangle"></div>
          <div>
            <div class="account-logo">
              <p class="account-letter">M</p>
            </div>
            <div class="account-name">
              <h3 style="font-weight: 100">Manon van Dijk</h3>
              <p style="font-weight: lighter">12-06-2022</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="footer-homepage">
      <div>
        <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
          tenetur molestiae itaque consequatur maxime illo, beatae voluptatem
          earum ad, cumque tempora quae quod aliquam facilis iusto ipsa illum.
          Ipsam, aliquid? Lorem ipsum dolor sit amet consectetur adipisicing
          elit. Nostrum quo neque consequatur obcaecati voluptate voluptatem
          quas ab, nesciunt ad alias quos doloremque accusantium, sint optio
          quae repudiandae nisi repellendus dignissimos.
        </p>
      </div>
      <div>
        <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
          tenetur molestiae itaque consequatur maxime illo, beatae voluptatem
          earum ad, cumque tempora quae quod aliquam facilis iusto ipsa illum.
          Ipsam, aliquid? Lorem ipsum dolor sit amet consectetur adipisicing
          elit. Nostrum quo neque consequatur obcaecati voluptate voluptatem
          quas ab, nesciunt ad alias quos doloremque accusantium, sint optio
          quae repudiandae nisi repellendus dignissimos.
        </p>
      </div>
      <div>
        <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
          tenetur molestiae itaque consequatur maxime illo, beatae voluptatem
          earum ad, cumque tempora quae quod aliquam facilis iusto ipsa illum.
          Ipsam, aliquid? Lorem ipsum dolor sit amet consectetur adipisicing
          elit. Nostrum quo neque consequatur obcaecati voluptate voluptatem
          quas ab, nesciunt ad alias quos doloremque accusantium, sint optio
          quae repudiandae nisi repellendus dignissimos.
        </p>
      </div>
      <div style="font-size: 400%">
        <iconify-icon
          icon="mdi:instagram"
          style="color: #fca4f7"
        ></iconify-icon>
        <iconify-icon
          icon="carbon:logo-facebook"
          style="color: #373ea6"
        ></iconify-icon>
        <iconify-icon icon="mdi:twitter" style="color: #5ec2f7"></iconify-icon>
      </div>
    </div>
  </body>
</html>
