

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
    <title>a_adopt</title>
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
            <a class="nav-link" href="../home.php">Home<span class="sr-only">(current)</span></a>
        </li>
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sizes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../sizes.php">All Sizes</a>
          <a class="dropdown-item" href="../size_s.php">Small</a>
          <a class="dropdown-item" href="../size_l.php">Large</a>
      </li>
         <li class="nav item">
         <li class="nav item">
            <a class="nav-link" href="../old_dinos.php">Old Dinos</a>
         </li>
        </ul>
    </div>
    <a class="btn btn-danger border border-white" href="logout.php?logout">Logout</a>
    </nav><!--END NAV-->
    
  
  

<div class="parallax_section1 parallax_image">
</div><!--END PARALLAX-->

 <div class="parallax_section2 parallax_image">
  <div class="row">
            <!--CARS-->
            
         <div class='card border-dark' >
                
                        <?php 

require_once '../dbconnect.php';

if ($_POST) {
   $id = $_POST['id'];

//update statement with minus 1:

   $sql = "UPDATE animals SET availability = availability-1 WHERE id = '$id'" ;
   if($conn->query($sql) === TRUE) {
       
       echo  "<h3>Congratulations! That great jurassic animal is yours!</h3><hr>";
       echo  "<h3>You will be redirected in 4 seconds!</h3><hr>";
       header ("Refresh: 4; url=../home.php");

       

       echo  "<a href='../home.php'><button class='btn btn-dark' type='button'>Home</button></a>";
   } else {
        echo "Error while updating record : ". $conn->error;
   }

   $conn->close();

}

?>
                                
                    </div><!--END BODY-->
            </div><!--END CARS-->
    </div> 
</div><!--END PARALLAX -->

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
            <a class="nav-link" href="../home.php">Home</a><span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../sizes.php">Sizes</a>
        </li>
         <li class="nav-item">
            <a class="nav-link" href="../old_dinos.php">Old Dinos</a>
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
