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
          <a href="login.php">Login</a>
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