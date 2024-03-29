<?php include('../connectiondb.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://bootswatch.com/5/sketchy/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body >

    <?php
        $error = '';
        if (isset($_POST['submit'])){
          $email = $_POST['Email'];
          $password = $_POST['Password'];

          $connect = "SELECT * FROM `adherant` WHERE Email = '$email' AND Password = '$password'";
          $result_co = $db->prepare($connect);
          $result_co->execute();
          
          $connect_result = $result_co->fetch(PDO::FETCH_ASSOC);
          $count = $result_co->rowCount();
          
          if ($count == 0){
             echo $error = 'Email or Password is incorrect';

          }else {
        
            session_start();
            $_SESSION['Email'] = $connect_result['Email'];
            $_SESSION['Password'] = $connect_result['Password'];
            $_SESSION['iD_adherant'] = $connect_result['ID_adherant'];
            $_SESSION['nom'] = $connect_result['Nom'];
            
            header('Location: index.php');
             
          }
        }
    ?>











<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Please enter your login and password!</p>
            <form method = "POST" action= "#">
              <div class="form-outline form-white mb-4">
                <input type="email" name="Email" id="typeEmailX" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Email</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" name="Password" id="typePasswordX" class="form-control form-control-lg" <?= $error?> />
                <label class="form-label" for="typePasswordX">Password</label>
              </div>

              <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

              <button class="btn btn-outline-light btn-lg px-5" href="" name="submit" type="submit">Login</button>
      </form>
              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>

            </div>

            <div>
              <p class="mb-0">Don't have an account? <a href="./Sign in.php" class="text-white-50 fw-bold">Sign Up</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>


    
</body>
</html>