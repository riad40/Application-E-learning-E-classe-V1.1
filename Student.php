<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="./css/bootstrap.css" rel="stylesheet" />
  <link rel="stylesheet" href="./css/style.css" />
  <title>Student</title>
  <style>
  body {
    background: #f8f8f8;
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

      <?php
      include './php/navbar.php'
    ?>

      <div class="mx-4 py-3 d-flex align-items-center justify-content-between my-nav">
        <h3>Students List</h3>

        <div>
          <img src="./images/sort.svg" class="px-2" alt="sort" />
          <a href="#" class="btn btn-info text-light">ADD NEW STUDENT</a>
        </div>
      </div>
      <hr />

      <?php

      $students = json_decode(file_get_contents('students.json'), true);
      
      ?>

      <div class="tables">
        <table class="table table-responsive table-borderless">
          <thead class="text-secondary fw-lighter">
            <tr>
              <th></th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th style="white-space: nowrap !important;">Enroll Number</th>
              <th style="white-space: nowrap !important;">Date Of Admission</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($students as $student) { ?>
            <tr class="my-table">
              <th>
                <img src="./images/pexels-photo-2379004 1.png" class="ps-3" alt="pexels-photo-2379004" />
              </th>
              <td class="pt-4"><?php echo $student ['name']; ?></td>
              <td class="pt-4"><?php echo $student ['email']; ?></td>
              <td class="pt-4"><?php echo $student ['phone']; ?></td>
              <td class="pt-4"><?php echo $student ['enroll_number']; ?></td>
              <td class="pt-4" style="white-space: nowrap !important;"><?php echo $student ['date_of_admession']; ?></td>
              <td class="pt-4"><img src="./images/pen.svg" alt="pen" /></td>
              <td class="pt-4">
                <img src="./images/trash.svg" alt="trash" />
              </td>
            </tr>
            <?php } ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script src="./js/bootstrap.js"></script>
  <script>
  var element = document.getElementById("page");
  var toggleButton = document.getElementById("menu-toggle");

  toggleButton.onclick = function() {
    element.classList.toggle("toggled");
  };
  </script>
</body>

</html>