
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.css" />
  </head>
  <body class="bg-light">
    <?php
      require_once "../global/global.php";
      require "./connect.php";
      if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $code = cleanData($_POST['code']);
        $query = "SELECT * FROM user WHERE otp = '$code'";
        $results = mysqli_query($conn, $query);
        if (mysqli_num_rows($results)>0) {
          echo "<h1 class='text-center mt-5'>You have verified your account</h1>
          <div class='text-center'>
            <a href='.login.php' class='btn btn-danger btn-lg'>Log In</a>
          </div>";
        }
        else{
          header("Location: ./.php");
        }
      }
    ?>
  </body>
</html>
