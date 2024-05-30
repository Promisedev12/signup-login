<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.css" />
  </head>
  <body class="bg-light">
    <div class="container">
      <div class="row mt-5">
        <div class="col-6 m-auto bg-white">
          <h1 class="text-center pt-3">Sign UP Now</h1>
          <p class="text-center text-muted mb-3">
            Its free and takes just a minute
          </p>
          <form action="pages/verify.php" method="post">
            <?php
              if (isset($_GET['error'])) {
                echo "<p class='bg-success text-white p-1 m-3'>".$_GET['error']."</p>";
              }
            ?>
            <div class="input-group mb-3">
              <input
                type="text"
                placeholder="First Name"
                class="form-control"
                name="fname"
              />
            </div>
            <div class="input-group mb-3">
              <input
                type="text"
                placeholder="Last Name"
                class="form-control"
                name="lname"
              />
            </div>
            <div class="input-group mb-3">
              <input
                type="Email"
                placeholder="Email"
                class="form-control"
                name="email"
              />
            </div>
            <div class="input-group mb-3">
              <input
                type="number"
                placeholder="Phone Number"
                class="form-control"
                name="fnum"
              />
            </div>
            <div class="input-group mb-3">
              <input
                type="password"
                placeholder="Password"
                class="form-control"
                name="password"
              />
              
            </div>
            <p class="mt-4">Chose a verification method</p>
            <select name="options" class="form-select mb-3"  id="">
                <option value="fnum">Phone number</option>
                <option value="email">Email </option>
             </select>
            <div class="d-grid">
              <button type="submit" class="btn btn-danger">Sign Up</button>
              <p class="text-muted text-center mt-3">Already Have an account <a href="./pages/login.php">Log In</a> </p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
