<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/bootstrapSign-In.css" />
  <link rel="stylesheet" href="./css/bootstrap.css" />
  <title>Sign In</title>
  <style>
  body {
    background: linear-gradient(69.66deg, #00c1fe 19.39%, #faffc1 96.69%);
    overflow-x: hidden;
  }
  .wrapper {
    height: 100vh;
  }
  ::placeholder {
    font-size: smaller;
  }
  </style>
</head>

<body>
  <div class="wrapper d-flex justify-content-center align-items-center">
    <form action="#" class="bg-light w-100 mx-3 rounded p-5" style="max-width: 475px">
      <img src="./images/E-class.svg" alt="E-class" />

      <h1 class="text-center fs-2 fw-bolder pt-5">SIGN IN</h1>

      <p class="text-center text-secondary modification fw-lighter">
        Enter your credentials to access your account
      </p>
      <div class="mt-5">
        <label class="mb-2 fw-bold text-secondary">Email</label>
        <input type="email" class="form-control py-2" placeholder="Enter your email" />

        <label class="mb-2 fw-bold mt-3 text-secondary">Password</label>
        <input type="password" class="form-control py-2" placeholder="Enter your password" />
      </div>
      <a href="./Dashboard.php" class="btn fw-500 text-light btn-info w-100 my-4">
        SIGN IN
      </a>

      <p class="text-center fw-500">
        Forgot your password?
        <a href="#" class="fw-bold text-info">Reset Password</a>
      </p>
    </form>
  </div>
  <script src="./js/bootstrap.js"></script>
</body>

</html>