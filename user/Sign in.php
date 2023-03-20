<?php include('../connectiondb.php');
session_start();
?>

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
  
   
   if (isset($_POST['submit'])) { 
    $name = $_POST['FirstName'];
    $email = $_POST['Email'];
    $adress = $_POST['Adress'];
    $password = $_POST['Password'];

    $type = $_POST['Type'];
    $date = $_POST['Date'];
    $cin = $_POST['Cin'];
    $nickname = $_POST['Nickname'];

    $creat  = "INSERT INTO `adherant`(`Type` ,`Nom`,`Password`,`Adress`,`Email`,`Cin`,`date_naissance`,`Nickname`) VALUES ('$type', '$name', '$password', '$adress','$email','$cin', '$date', '$nickname')";
    $result = $db->prepare($creat);
    $result->execute();

    header('location: ./login.php');
    // $check = "SELECT adherant.Nickname, adherant.Email FROM adherant ";
    // $send = $db->prepare($check);
    // $send->execute();
    // $check = $send->fetchAll(PDO::FETCH_ASSOC);
    // $user =$send->rowCount();
    
    // for($i=0;$i<$user;$i++){
    //   if(preg_match("/$nickname/i",$check[$i]['Nickname'])){
    //     $nickname_exist = true;
    //   }
    //   if(preg_match("/$email/i",$check[$i]['Email'])){
    //     $email_exist = true;
    //   }

    // }
    //   if(strlen($name) > 15 or strlen($name) == 0){
    //     $error = 'Your name must be between 1 and 15 characters'; 
    //   }
    //   elseif(preg_match_all("/[&<>|`_@}{~]/",$name)){
    //     $error = 'Your name must not contain special characters';
    //   }
    //   elseif($nickname_exist??false){
    //     $error = 'This nickname is already taken';
    //   }
    //   elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    //     $error = 'Your Email is not valid!';
    //   }    
    //   elseif(strlen($email) > 30){
    //     $error = 'Your email must be less than 30 characters';
    //   }
    //   elseif($email_exist??false){
    //     $error = 'This email is already taken';
    //   }
    //   elseif(strlen($password) > 16 || strlen($password) < 8){
    //     $error = 'Your password must be between 8 and 16 characters';
    //   }
    //   elseif(!preg_match_all("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/",$password)){
    //     $error = 'Your password must contain at least one uppercase letter, one lowercase letter and one number';
    //     '<ul>
    //     <li>Your password must contain at least one uppercase letter</li>
    //     <li>Your password must contain Number</li>
    //     <li> Your password must contain Special Character</li>
    //     </ul>';
    //   }
    //   elseif($password != $confirmPassword){
    //     $error = 'Your password and confirmation password do not match';
    //   }
    //   elseif(strlen($date) == 0){
    //     $error = 'Your date of birth is required';
    //   }
    //   elseif(preg_match_all("/[&<>\|`_@}{~]/",$cin)){
    //     $error = 'Your cin must not contain special characters';
       
    //   }
    //   else{
    //     $password = password_hash($_POST['Password'], PASSWORD_DEFAULT);
    //     $creat ="INSERT  INTO  `adherant` (`Type` ,`Nom` ,`Password` ,`Adress` ,`Email` ,`Cin` ,`date_naissance` ,`Nickname`) VALUES ('$type','$name','$email','$password','$date','$cin','$nickname')";
    //     $result = $db->prepare($creat);
    //     $result->execute();
    //     header('location: ./login.php');
    //     session_start();
    //     $_SESSION['email'] = $_POST['Email'];
    //     $_SESSION['password'] = $_POST['Password'];
    //     echo "heelo";
    //   }
    }

  ?>












<form class="vh-100 gradient-custom" method='POST'  action="#">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Sign In</h2>

              <div class="form-outline form-white mb-4">
                <label class="form-label" for="FirstName">Name</label>
                <input type="FirstName" id="FirstName" name="FirstName" class="form-control form-control-lg"  value="">
                
              </div>

                <div class="form-outline form-white mb-4">
                <label class="form-label" for="Email">Email</label>

                <input type="Email" id="Email" name="Email" class="form-control form-control-lg" value=" ">
                
                </div>

                <div class="form-outline form-white mb-4">
                <label class="form-label" for="Password">Password</label>
                <input type="Password" id="Password" name="Password" class="form-control form-control-lg" value="">
                
                </div>

                <div class="form-outline form-white mb-4">
                <label class="form-label" for="ConfirmPassword">Adress</label>
                <input type="text" id="ConfirmPassword" name="Adress" class="form-control form-control-lg" value="">
                
                </div>

                <div class="form-outline form-white mb-4">
                <label class="form-label" for="Type">Type</label>
                <input type="Type" id="Type" name="Type" class="form-control form-control-lg" value="">
                
                </div>

                <div class="form-outline form-white mb-4">
                <label class="form-label" for="Date">Date of birth</label>
                    <input type="Date" id="Date" name="Date" class="form-control form-control-lg" value="">
                    
                </div>

                <div class="form-outline form-white mb-4">
                <label class="form-label" for="Cin">Cin</label>
                    <input type="Cin" id="Cin" name="Cin" class="form-control form-control-lg" value="">
                    
                </div>

                <div class="form-outline form-white mb-4">
                <label class="form-label" for="Nickname">Nickname</label>
                    <input type="Nickname" id="Nickname" name="Nickname" class="form-control form-control-lg" value="">
                  
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
  </form>


    
</body>
</html>