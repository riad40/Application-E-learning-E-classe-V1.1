<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="./css/bootstrap.css" rel="stylesheet" />
  <link rel="stylesheet" href="./css/style.css" />
  <title>Payment</title>
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

      <div class="mx-4 py-3 d-flex align-items-center justify-content-between">

        <h3>Payment Details</h3>

        <div>
          <img src="./images/sort.svg" class="px-2" alt="sort" />
        </div>
      </div>
      <div class="tables">
        <hr />

        <?php

          $payment = json_decode(file_get_contents('payment.json'), true);

        ?>

        <table class="table table-responsive table-borderless">
          <thead class="text-secondary fw-lighter">
            <tr>
              <th scope="row"></th>
              <th scope="col">Name</th>
              <th scope="col">Payment Schedule</th>
              <th scope="col">Bill Number</th>
              <th scope="col">Amount Paid</th>
              <th scope="col">Balance amount</th>
              <th scope="col">Date</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($payment as $payments) { ?>
            <tr class="my-table1 mx-4">
              <th scope="row"></th>
              <th class="py-3 fw-normal"><?php echo $payments['name']; ?></th>
              <td class="p-3"><?php echo $payments['payment_schedule']; ?></td>
              <td class="py-3"><?php echo $payments['bill_number']; ?></td>
              <td class="py-3"><?php echo $payments['amount_paid']; ?></td>
              <td class="py-3"><?php echo $payments['balance_amount']; ?></td>
              <td class="py-3"><?php echo $payments['date']; ?></td>
              <td class="py-3"><img src="./images/eye.svg" alt="eye" /></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script src="./js/bootstrap.js"></script>
  <script>
  var el = document.getElementById("page");
  var toggleButton = document.getElementById("menu-toggle");
  toggleButton.onclick = function() {
    el.classList.toggle("toggled");
  };
  </script>
</body>

</html>