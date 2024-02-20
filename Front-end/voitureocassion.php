<!DOCTYPE html>
<html lang="en">
<!--Page présentant les voitures -->
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
  <header>
    <nav>
      <!-- logo image-->
      <div id="navbar">
        <div class="container">
          <button class="button"><a href="connexion.php">connexion</a></button>
          <button class="button"><a href="inscription.php">inscription</a></button>
        </div>
        <div id="logovoiture">
          <img src="images/OIP.jpg" id="img" />
          <!--connexion button-->

          <!-- search button-->
          <form action="#">
            <input type="text" placeholder=" rechercher" name="search" id="searchbar" />
            <button id="buttons">search</button>
          </form>
        </div>
        <!-- Liste -->
        <div id="menuctn" class="active">
          <ul id="listul">
            <li><a href="doc.php"> Acceuil</a></li>
            <li><a href="voitureocassion.php">Voiture</a></li>
            <li><a href="services_page.php">Service </a></li>
            <li><a href="formcontact.php">Contact </a></li>
          </ul>
          <hr>
        </div>
    </nav>
  </header>

  <div class="">
    <div class="MainImageContainer">
      <img src="images/Vente-Voiture.webp" id="mainImg" />
    </div>
    <!-- Service de vente -->
    <div class="molette">
      <img src="images/sale.jpg" alt="#" />
      <p class="sizepara" style="font-size: 30px">Vente de véhicule d'occasion à petit prix.</p>
    </div>
    <!-- Voiture en vente-->
    <!--  Renault -->
    <div class="ExpoVoiture">
      <img src="images/me.jpg" alt="#" />
      <div id="information">
        <h3>Renault : 3002 </h3>
        <p>Année : 2010 </p>
        <p> Option : Régulateur </p>
        <p>Carburant : Diessel </p>
        <p>kilometrage : 150 000</p>
        <p>prix : 20k</p>
        <a href="formcontact.php">Contactez-nous</a>
      </div>
    </div>

    <div class="ExpoVoiture">
      <img src="images/pexels-mike-bird-16634658.jpg" alt="#" />
      <div id="information">
        <h3>Renault : 308 </h3>
        <p>Année : 2004</p>
        <p>Option : Siège chauffant, Régulateur </p>
        <p>Carburant : Essence</p>
        <p>kilometrage : 100 000</p>
        <p>prix : 20k</p>
        <a href="formcontact.php">Contactez-nous</a>
      </div>
    </div>
    <div class="ExpoVoiture">
      <img src="images/pexels-mike-bird-8886297.jpg" alt="#" />
      <div id="information">
        <h3>Renault : Mégane </h3>
        <p>Année : 2008</p>
        <p>Option : Siège chauffant, Régulateur, mode sport </p>
        <p>Carburant : Diessel</p>
        <p>kilometrage : 100 000</p>
        <p>prix : 20k</p>
        <a href="formcontact.php">Contactez-nous</a>
      </div>
    </div>

    <div class="ExpoVoiture">
      <img src="images/megane.jpg" alt="#" />
      <div id="information">
        <h3>Renault : Berline</h3>
        <p>Année : 2006</p>
        <p>Option : Siège chauffant, Régulateur, mode sport </p>
        <p>Carburant : Diessel</p>
        <p>kilometrage : 100 000</p>
        <p>prix : 15k</p>
        <a href="formcontact.php">Contactez-nous</a>
      </div>
    </div>

    <div class="ExpoVoiture">
      <img src="images/Ren.jpg" alt="#" />
      <div id="information">
        <h3>Renault : Punto </h3>
        <p>Année : 2010</p>
        <p>Option : Régulateur </p>
        <p>Carburant : Diessel</p>
        <p>kilometrage : 200 000</p>
        <p>prix : 10k</p>
        <a href="formcontact.php">Contactez-nous</a>
      </div>
    </div>

    <div class="ExpoVoiture">
      <img src="images/rena.jpg" alt="#" />
      <div id="information">
        <h3>Renault : 206 </h3>
        <p>Année : 2002</p>
        <p>Carburant : Essence</p>
        <p>kilometrage : 100 000</p>
        <p>prix : 20k</p>
        <a href="formcontact.php">Contactez-nous</a>
      </div>
    </div>
    <!-- Bmw-->
    <div class="ExpoVoiture">
      <img src="images/bm.jpg" alt="#" />
      <div id="information">
        <h3>BMW : M5</h3>
        <p>Année : 2020</p>
        <p>Option : Siège chauffant, Régulateur, mode sport, roue motrice </p>
        <p>Carburant : Diessel</p>
        <p>kilometrage : 50 000</p>
        <p>prix : 100k</p>
        <a href="formcontact.php">Contactez-nous</a>
      </div>
    </div>

    <div class="ExpoVoiture">
      <img src="images/bmwm3c.jpg" alt="#" />
      <div id="information">
        <h3>BMW : M4</h3>
        <p>Année : 2016</p>
        <p>Option : Siège chauffant, Régulateur, mode sport, roue motrice </p>
        <p>Carburant : Diessel</p>
        <p>kilometrage : 120 000</p>
        <p>prix : 80k</p>
        <a href="formcontact.php">Contactez-nous</a>
      </div>
    </div>

    <div class="ExpoVoiture">
      <img src="images/bmwm3.jpg" alt="#" />
      <div id="information">
        <h3>BMW : M3</h3>
        <p>Année : 2012</p>
        <p>Option : Siège chauffant, Régulateur, mode sport , 6 vitesse </p>
        <p>Carburant : Diessel</p>
        <p>kilometrage : 140 000</p>
        <p>prix : 30k</p>
        <a href="formcontact.php">Contactez-nous</a>
      </div>
    </div>
    <!-- Peugeot-->
    <div class="ExpoVoiture">
      <img src="images/p.jpg" alt="#" />
      <div id="information">
        <h3>Peugeot : 3008</h3>
        <p>Année : 2017</p>
        <p>Option : Siège chauffant, Régulateur, 7 places </p>
        <p>Carburant : Diessel</p>
        <p>kilometrage : 170 000</p>
        <p>prix : 40k</p>
        <a href="formcontact.php">Contactez-nous</a>
      </div>
    </div>

    <div class="ExpoVoiture">
      <img src="images/p1.jpg" alt="#" />
      <div id="information">
        <h3> Peugeot: 3006</h3>
        <p>Année : 2008</p>
        <p>Option : Siège chauffant, Régulateur</p>
        <p>Carburant : Hybride</p>
        <p>kilometrage : 180 000</p>
        <p>prix : 27k</p>
        <a href="formcontact.php">Contactez-nous</a>
      </div>
    </div>

    <div class="ExpoVoiture">
      <img src="images/p3.jpg" alt="#" />
      <div id="information">
        <h3>Peugeot: 2008</h3>
        <p>Année : 2010</p>
        <p>Option : Siège chauffant, Régulateur, mode sport </p>
        <p>Carburant : Diessel</p>
        <p>kilometrage : 120 000</p>
        <p>prix : 27k</p>
        <a href="formcontact.php" id="linkcontacteznous">Contactez-nous</a>
      </div>
    </div>


    <!-- Footer horaires garage -->
    <footer>
      <h3>Horaires d'ouverture :</h3>
      <p>Lundi - vendredi : 08:45 - 12:00 - 14:00 - 18:00</p>
      <p>samedi : 8:45 - 12:00</p>
    </footer>
</body>

</html>
