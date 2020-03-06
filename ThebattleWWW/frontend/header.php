<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curio.nl | TheBattle</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/login_style.css">
</head>

<body>
  <header>
    <div class="w-header wrapper">
      <div class="logo">
        <a href="#index.php"><svg width="180" height="50" viewBox="0 0 80 25">
          <path d="M7.935 22.769C3.414 22.769 0 19.407 0 14.905 0 10.402 3.414 7.01 7.935 7.01c2.952 0 5.444 1.48 6.643 3.732l-3.66 2.097c-.554-1.018-1.66-1.666-2.983-1.666-2.153 0-3.69 1.604-3.69 3.732 0 2.097 1.537 3.7 3.69 3.7 1.476 0 2.676-.709 3.26-1.912l3.844 1.727c-1.138 2.621-3.875 4.349-7.104 4.349m22.384-7.375c0 4.303-2.956 7.315-7.206 7.315-4.219 0-7.175-3.012-7.175-7.315V7.31h4.311v8.084c0 1.936 1.109 3.166 2.864 3.166s2.864-1.23 2.864-3.166V7.31h4.342v8.084zm11.504-3.963h-4.968v10.978h-4.32V7.31h9.288zm1.869 10.978h4.322V7.316h-4.322v15.093zm4.782-19.796c0 1.445-1.196 2.643-2.636 2.643-1.441 0-2.637-1.198-2.637-2.643C43.201 1.199 44.397 0 45.838 0c1.44 0 2.636 1.199 2.636 2.613zm5.806 12.292c0 2.097 1.539 3.7 3.601 3.7 2.032 0 3.602-1.603 3.602-3.7 0-2.159-1.57-3.732-3.602-3.732-2.062 0-3.601 1.573-3.601 3.732m11.45 0c0 4.502-3.416 7.864-7.849 7.864-4.463 0-7.85-3.362-7.85-7.864 0-4.503 3.387-7.895 7.85-7.895 4.433 0 7.85 3.392 7.85 7.895" />
          </svg></a>
      </div>
      <nav>
      <div class="topnav">
        <a href="#home" class="active">Logo</a>
          <!-- Navigation links (hidden by default) -->
        <div id="myLinks">
        <a href="#">Mbo </a>
          <a href="#">TheBattle</a>
          <a href="#">Contact </a>
          <!-- if you want to add forms for the login system i would put it in here -->
          <?php
            if (isset($_SESSION["idUsers"])) {
              echo '<a href="AdminPanel/sendMails.php">AdminPanel</a>';
                  echo '<form class="logout" action="../backend/includes/logout.inc.php" method="POST">';
                      echo '<input type="submit" name="logout-submit" value="logout">';
                  echo '</form>';
              } else {
                  // ============Dit krijg je te zien als je niet bent ingelogged=========
                  echo '<a href="login.php">Login</a>';
              }
            ?>
          </div>
          <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<script>
      function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
} 
    </script>

    <!-- =================================================== -->
  </header>