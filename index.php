<?php
ob_start();
session_start();
require_once 'dbconnect.php';

// it will never let you open index(login) page if session is set
if ( isset($_SESSION['user' ])!="" ) {
 header("Location: home.php");
 exit;
}

$error = false;

if( isset($_POST['btn-login']) ) {

  // prevent sql injections/ clear user invalid inputs
 $email = trim($_POST['email']);
 $email = strip_tags($email);
 $email = htmlspecialchars($email);

 $pass = trim($_POST[ 'pass']);
 $pass = strip_tags($pass);
 $pass = htmlspecialchars($pass);
 // prevent sql injections / clear user invalid inputs 

 if(empty($email)){
  $error = true;
  $emailError = "Please enter your email address.";
 } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
  $error = true;
  $emailError = "Please enter valid email address.";
 }

 if (empty($pass)){
  $error = true;
  $passError = "Please enter your password." ;
 }

 // if there's no error, continue to login
 if (!$error) {
  
  $password = hash( 'sha256', $pass); // password hashing

  $res=mysqli_query($conn, "SELECT * FROM users WHERE userEmail='$email'" );
  $row=mysqli_fetch_array($res, MYSQLI_ASSOC);
  $count = mysqli_num_rows($res); // if uname/pass is correct it returns must be 1 row
 
  if( $count == 1 && $row['userPass' ]==$password ) {
    if($row["status"] == 'admin'){
      $_SESSION["admin"] = $row["userId"];
      header("Location: admin.php");
   

    }else {
      $_SESSION['user'] = $row['userId'];
      header( "Location: home.php");
    }
   
  } else {
   $errMSG = "Incorrect Credentials, Try again..." ;
  }
 
 }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/styles1.css"/>
    <link rel="stylesheet" type="text/css" href="styles/style.css"/>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <title>Login & Registration System</title>
</head>
<body>
    
<div class="container-fluid">
 
 <div class="banner"></div>
    <h2 class="bannerh5" style="font-family:'Jurassic Park'">Pet&nbsp&nbsp&nbsp&nbsp Adoption&nbsp&nbsp&nbsp Center</h2>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Sign In<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="register.php">Register</a>
        </li>
        </ul>
    </div>
    </nav><!--END NAV-->
    
   
    
    
    <div class="parallax_section1 parallax_image">
    </div><!--END PARALLAX-->
    
    

    
<div class="parallax_section2 parallax_image">
  <div class="row">
            <!--LOGIN-->
        <div class="card border-dark">
           
           <form method="post"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete= "off">
                <h2>Sign In</h2 >
                <hr/>
            
                        <?php
                        if ( isset($errMSG) ) {
                        echo  $errMSG; ?>   
                        <?php
                        }
                        ?>
           
          
            
                    <input type="email" name="email" class="form-control" placeholder= "Your Email" value="<?php echo $email; ?>"  maxlength="40"/>
        
                        <span class="text-danger"><?php  echo $emailError; ?></span >
  
          
                    <input type="password" name="pass"  class="form-control" placeholder ="Your Password" maxlength="15"/>
        
                        <span class="text-danger"><?php  echo $passError; ?></span>
                        <hr/>
                        <button  class='btn btn-dark' type="submit" name= "btn-login">Sign In</button>
                        <hr/>
  
                        <a href="register.php">Sign Up Here...</a>
            </form>
      
        </div><!--END LOGIN-->
        
        <!---->
        <!--<div class="card border-dark">
      
        </div><!--END-->
    </div><!--END ROW-->
</div><!--END PARALLAX 2-->


  
  
<div class="parallax_section1 parallax_image">
</div><!--END PARALLAX-->


  
    
    
 


  
    

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <!--<a class="navbar-brand" href="#">Andreas Pirkner</a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Sign In</a><span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="register.php">Register</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="mailto:andreas.pirkner@gmx.net" >Andreas Pirkner 2020</a>
        </li> 
        </ul>
    </div>
    </nav><!--END FOOTER-->
    
    
</div><!--END CONTAINER-->

    
   </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
</body>
</html>

<?php ob_end_flush();
?>