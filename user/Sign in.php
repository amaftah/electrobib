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

        $fname =$_POST['FirstName'];
        $lname =$_POST['LastName'];
        $email =$_POST['Email'];
        $password =$_POST['Password'];
        $cpassword =$_POST['ConfirmPassword'];
        $type =$_POST['Type'];
        $date =$_POST['Date'];
        $cin =$_POST['Cin'];
        $nickname =$_POST['Nickname'];

        $Sql = "INSERT INTO adherant (FirstName, LastName, Email, Password, ConfirmPassword, Type, Date, Cin, Nickname) VALUES ('$fname', '$lname', '$email', '$password', '$cpassword', '$type', '$date', '$cin', '$nickname')";
        $db->exec($Sql);
        header('Location: ../index.php');
        



    ?>











<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Sign In</h2>

              <div class="form-outline form-white mb-4">
                <input type="FirstName" id="FirstName" name="FirstName" class="form-control form-control-lg" />
                <label class="form-label" for="FirstName">FirstName</label>
              </div>

                <div class="form-outline form-white mb-4">
                <input type="LastName" id="LastName"  name="LastName" class="form-control form-control-lg" />
                <label class="form-label" for="LastName">LastName</label>
                </div>

                <div class="form-outline form-white mb-4">
                <input type="Email" id="Email" name="Email" class="form-control form-control-lg" />
                <label class="form-label" for="Email">Email</label>
                </div>

                <div class="form-outline form-white mb-4">
                <input type="Password" id="Password" name="Password" class="form-control form-control-lg" />
                <label class="form-label" for="Password">Password</label>
                </div>

                <div class="form-outline form-white mb-4">
                <input type="ConfirmPassword" id="ConfirmPassword" name="ConfirmPassword" class="form-control form-control-lg" />
                <label class="form-label" for="ConfirmPassword">ConfirmPassword</label>
                </div>

                <div class="form-outline form-white mb-4">
                <input type="Type" id="Type" name="Type" class="form-control form-control-lg" />
                <label class="form-label" for="Type">Type</label>
                </div>

                <div class="form-outline form-white mb-4">
                    <input type="Date" id="Date" name="Date" class="form-control form-control-lg" />
                    <label class="form-label" for="Date">Date of birth</label>
                </div>

                <div class="form-outline form-white mb-4">
                    <input type="Cin" id="Cin" name="Cin" class="form-control form-control-lg" />
                    <label class="form-label" for="Cin">Cin</label>
                </div>

                <div class="form-outline form-white mb-4">
                    <input type="Nickname" id="Nickname" name="Nickname" class="form-control form-control-lg" />
                    <label class="form-label" for="Nickname">Nickname</label>
                </div>
                 

              <button class="btn btn-outline-light btn-lg px-5" name="submit" type="submit">Sign In</button>

        

            </div>

            <div class="text-center">
              <p class="small text-white-50 mb-0">Already have an account? <a href="./login.php" class="text-white-50 fw-bold">Sign Up</a></p>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>


    
</body>
</html>