
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/styles1.css" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <title>a_create</title>
</head>
<body>
    
<div class="container-fluid">
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="../admin.php">Admin<span class="sr-only">(current)</span></a>
        </li>
         <li class="nav item">
            <a class="nav-link" href="../create.php">Create</a>
         </li>
        </ul>
    </div>
    <span class="text-light">Hi Admin. Welcome back!&nbsp&nbsp
    <a class="btn btn-danger border border-white" href="logout.php?logout">Logout</a></span>
    </nav><!--END NAV-->
    
   
    
    
    <div class="parallax_section1 parallax_image">
    </div><!--END PARALLAX-->
        

    
<div class="parallax_section2 parallax_image">
  <div class="row">
            <!--A_CREATE-->
        <div class="card border-dark">

<?php 
ob_start();
session_start();

// if session is not set this will redirect to login page
if( !isset($_SESSION['admin']) && !isset($_SESSION['user']) ) {
 header("Location: index.php");
 exit;
}
//if(isset($_SESSION["user"])){
  //header("Location: home.php");
  //exit;
//}


require_once '../dbconnect.php';

if ($_POST) {
   $img = $_POST['img'];
   $name = $_POST['name'];
   $description = $_POST['description'];
   $avail = $_POST['availability'];
   $island = $_POST['island'];
   $locimage = $_POST['loc_img'];
   $locname = $_POST['loc_name'];
   $addr = $_POST['address'];
   $zip = $_POST['zip'];
   $size = $_POST['size'];
   $age = $_POST['age'];
   $hob = $_POST['hobbies'];

   $sql = "INSERT INTO animals (img, name, description, availability, island, loc_img, loc_name, address, zip, size, age, hobbies) VALUES ('$img','$name', '$description', '$avail', '$island','$locimage', '$locname', '$addr', '$zip', '$size', '$age', '$hob')";
    if($conn->query($sql) === TRUE) {
       echo "<h4>New Record Successfully Created! You will be redirected in 4 seconds!</h4><hr>" ;
       header ("Refresh: 4; url=../admin.php");
       echo "<a href='../create.php'><button class='btn btn-dark border border-dark' type='button'>Back</button></a><hr>";
        echo "<a href='../admin.php'><button class='btn btn-dark border border-dark' type='button'>Home</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $conn->connect_error;
   }

   $conn->close();
}

?>

        </div><!--END A_CREATE
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
            <a class="nav-link" href="../admin.php">Admin</a><span class="sr-only">(current)</span></a>
        </li>
         <li class="nav-item">
            <a class="nav-link" href="../create.php">Create</a>
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