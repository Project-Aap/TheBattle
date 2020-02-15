<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curio.nl | TheBattle</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <header>
    <div class="w-header wrapper">
      <div class="logo">
        <a href="#index.php">Curio</a>
      </div>
      <nav>

        <div id="hamburger">
          <a href="#">Mbo </a>
          <a href="#">TheBattle</a>
          <a href="#">Contact </a>
          <!-- if you want to add forms for the login system i would put it in here -->

          <!-- =========================================================== -->
        </div>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </nav>
    </div>
    <!-- =======the hamburger menu javascript================== -->
    <script>
      function myFunction() {
        var x = document.getElementById("hamburger");
        if (x.style.display === "block") {
          x.style.display = "none";
        } else {
          x.style.display = "block";
        }
      }
    </script>
    <!-- =================================================== -->
  </header>
  <main>
    <div class="wrapper">
      <div class="w-body">
        <div class="intro-text">
          <h1><span>Curio <br> praktijkschool</span> <br> Breda</h1>
        </div>
        <ul class="intro-nav">
          <li> <strong>Opleidingen</strong></li>
          <li>ICT</li>
          <li>netwerkbeheer</li>
          <li>defensie en Veiligheid</li>
          <li>Zorg en Welzijn</li>
        </ul>
        <ul class="intro-nav">
          <li><strong>kenmerken</strong> </li>
          <li>Modern gebouw</li>
          <li>Plan van aanpak</li>
        </ul>
      </div>
    </div>
    <div class="wrapper-main">
      <div class="w-main">
        <div class="hero-img">
          <img src="img/prison.png" alt="prisoncurio">
        </div>
        <div class="info-main">
          <div class="heading">
            <h2>Over Curio praktijkschool</h2>
          </div>
          <div class="content-flex">
            <div class="info-content-content">
              <p>Tijdens het debat gaan we debatteren, deze tekst is ter plaatsvulling
                en lorem ipsum is voor rebelse mensen en dus totaal niet van toepassingen voor ons
                want wij zijn normale christelijke mensen die wel manieren hebben.
                Lorem ipsum is simply dummy lorem ipsum dolor bla lorem lorem ipsum dolor sit amet lorem ipsum
                dolor pancake spaghetti lorem ipsum et </p>
            </div>
            <div class="info-content-map">
              <div class="img-googlemaps">
                <img src="img/staticmap.png" alt="curiocollegelocation">
              </div>
              <div class="location">
                <article>
                  <h4>Locatie</h4>
                  <p>Frankenthalerstraat 14 <br> 4816 KA Breda</p>
                </article>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      <!-- start of the curio img section -->

    </div>
          <div class="w-main  grid">
        <div class="curio-img">
          <img src="img/curio.png" alt="curio img">
        </div>
        <div class="curio-content">
            <h3>"Bij Debattle komen echte gesprekken tot leven"</h3>
            <p>Curio. Organisator van DeBattle.</p>  
        </div>
      </div>
      <!-- =================HERE we could place the news messages in sprint2 -->

      <!-- ======================================================================== -->
  </main>
</body>

</html>