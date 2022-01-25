<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Dashboard</title>
    <style>
      body{
        overflow-x: hidden;
      }
    </style>
  </head>

  <body>

  <div class="d-flex" id="page">  

    <?php
      include './php/sidebar.php'
    ?>

      <!-- Page Content -->
      <div id="content" class="container-fluid">
        
        <?php include './php/navbar.php'?>
        
        <div class="row mt-4 px-3">
          <div class="col my-3">
            <ul class="card1 rounded navbar-nav p-3" style="min-width: 255px">
              <li><img src="./images/graduation.svg" alt="graduation" /></li>
              <li class="py-2">Students</li>
              <li class="text-end fw-bold fs-2 pt-3">243</li>
            </ul>
          </div>
          <div class="col my-3">
            <ul class="card2 rounded navbar-nav p-3" style="min-width: 255px">
              <li><img src="./images/save.svg" alt="save" /></li>
              <li class="py-2">Course</li>
              <li class="text-end fw-bold fs-2 pt-3">13</li>
            </ul>
          </div>
          <div class="col my-3">
            <ul class="card3 rounded navbar-nav p-3" style="min-width: 255px">
              <li><img src="./images/dollar.svg" alt="dollar" /></li>
              <li class="py-2">Payments</li>
              <li class="text-end fw-bold fs-2 pt-3">
                <span class="fs-4 px-2">DHS</span>556,000
              </li>
            </ul>
          </div>
          <div class="col my-3">
            <ul class="card4 rounded navbar-nav p-3" style="min-width: 255px">
              <li><img src="./images/users.svg" alt="users" /></li>
              <li class="py-2">Users</li>
              <li class="text-end fw-bold fs-2 pt-3">3</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <script src="./js/bootstrap.js"></script>
    <script>
      var el = document.getElementById("page");
      var toggleButton = document.getElementById("menu-toggle");

      toggleButton.onclick = function () {
        el.classList.toggle("toggled");
      };
    </script>
  </body>
</html>
