      <!-- Page Sidebar -->
      <div id="sidebar">
        <img src="./images/E-class.svg" class="ps-3 py-3" alt="E-class" />
        <img
          src="./images/ycode.png"
          class="w-50 d-block mx-auto mt-5"
          alt=""
        />
        <h2 class="text-center fs-3 pt-3">Admin Name</h2>
        <p class="text-center text-info">Admin</p>

        <div class="text-center px-4 mt-5">
          <a href="./Dashboard.php" class="d-block nav-link text-dark my-3 <?php if(basename($_SERVER['REQUEST_URI']) == 'Dashboard.php') echo 'btn btn-info'; ?>"
            ><i class="bi bi-home-lg alt"
              ><img
                class="pe-2 dashboard"
                src="./images/house-door.svg"
                alt="house-door" /></i
            >Home</a
          >
          <a href="#" class="d-block nav-link text-dark my-3"
            ><i class="bi bi-bookmark"
              ><img
                class="pe-2"
                src="./images/bookmark.svg"
                alt="bookmark" /></i
            >Course</a
          >
          <a href="./Student.php" class="d-block nav-link text-dark my-3 <?php if(basename($_SERVER['REQUEST_URI']) == 'Student.php') echo 'btn btn-info'; ?>"
            ><i class="bi bi-mortarboard"
              ><img
                class="pe-2 students"
                src="./images/mortarboard.svg"
                alt="mortarboard" /></i
            >Students</a
          >
          <a href="./payment.php" class="d-block nav-link text-dark my-3 <?php if(basename($_SERVER['REQUEST_URI']) == 'payment.php') echo 'btn btn-info'; ?>"
            ><i class="bi bi-currency-dollar"
              ><img
                class="pe-2 payment"
                src="./images/currency-dollar.svg"
                alt="currency-dollar" /></i
            >Payment</a
          >
          <a href="#" class="d-block nav-link text-dark my-3"
            ><i class="bi bi-file-earmark-break"
              ><img
                class="pe-2"
                src="./images/file-earmark-break.svg"
                alt="file-earmark-break" /></i
            >Report</a
          >
          <a href="#" class="d-block nav-link text-dark my-3"
            ><i class="bi bi-sliders"
              ><img class="pe-2" src="./images/sliders.svg" alt="sliders" /></i
            >Settings</a
          >
          <a href="./index.php" class="nav-link text-center mt-5 text-dark"
            >Log out
            <i class="bi bi-box-arrow-right"
              ><img
                src="./images/box-arrow-right.svg"
                class="ps-3"
                alt="bi-box-arrow-right" /></i
          ></a>
          </div>
      </div>