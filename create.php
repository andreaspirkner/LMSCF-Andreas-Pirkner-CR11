<?php
ob_start();
session_start();
require_once 'dbconnect.php';

// if session is not set this will redirect to login page
if( !isset($_SESSION['admin']) && !isset($_SESSION['user']) ) {
 header("Location: index.php");
 exit;
}
if(isset($_SESSION["user"])){
  header("Location: home.php");
  exit;
}
$res=mysqli_query($conn, "SELECT * FROM users WHERE userId=".$_SESSION['admin']);
$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);
?>
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
    <title>Create</title>
</head>
<body>
    
<div class="container-fluid">
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <!--<a class="navbar-brand" href="#">Andreas Pirkner</a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="admin.php">Admin<span class="sr-only">(current)</span></a>
        </li>
         <li class="nav item">
            <a class="nav-link" href="create.php">Create</a>
         </li>
        </ul>
    </div>
    <span class="text-light">Hi <?php echo $userRow['userName' ]; ?>. Welcome back!&nbsp&nbsp
    <a class="btn btn-danger border border-white" href="logout.php?logout">Logout</a></span>
    </nav><!--END NAV-->
    
   
    
    
    <div class="parallax_section1 parallax_image">
    </div><!--END PARALLAX-->
        

    
<div class="parallax_section2 parallax_image">
  <div class="row">
            <!--CREATE-->
        <div class="card border-dark">

<fieldset >
   <legend>Add Animal</legend>

   <form action="actions/a_create.php" method= "post">
       <table cellspacing= "0" cellpadding="0">
           <tr>
               <th>Image</th>
               <td><input  type="text" name="img"  placeholder="img/filename.jpg" /></td >
           </tr>    
           <tr>
               <th>Name</th>
               <td><input  type="text" name= "name" placeholder="Name" /></td>
           </tr>
           <tr>
               <th>Description</th>
               <td><input type="text"  name="description" placeholder ="Limit 110 Characters!" /></td>
           </tr>
            <tr>
               <th>Availability</th>
               <td><input type="text"  name="availability" placeholder ="Availability" /></td>
           </tr>
             <tr>
               <th>Island</th>
               <td><input type="text"  name="island" placeholder ="Island" /></td>
           </tr>
              <tr>
               <th>Location Imgae</th>
               <td><input type="text"  name="loc_img" placeholder ="img/filename.jpg" /></td>
           </tr>
           <tr>
               <th>Location Name</th>
               <td><input type="text"  name="loc_name" placeholder ="Location" /></td>
           </tr>
           <tr>
               <th>Address</th>
               <td><input type="text"  name="address" placeholder ="Address" /></td>
           </tr>
           <tr>
               <th>Zip Code</th>
               <td><input type="text"  name="zip" placeholder ="Zip Code" /></td>
           </tr>
           <tr>
               <th>Size</th>
               <td><input type="text"  name="size" placeholder ="Insert S or L" /></td>
           </tr>
            <tr>
               <th>Age</th>
               <td><input type="text"  name="age" placeholder ="Age" /></td>
           </tr>
              <tr>
               <th>Hobbies</th>
               <td><input type="text"  name="hobbies" placeholder ="Hobbies" /></td>
           </tr>
           
       </table>
       <hr>
       <button class='btn btn-success border border-dark' type ="submit">Insert</button>
    <a href= "admin.php"><button class='btn btn-dark border border-dark' type="button">Back</button></a>
   </form>

</fieldset >

<!---->
        <!--<div class="card border-dark">-->
      
        </div><!--END CREATE
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
            <a class="nav-link" href="admin.php">Admin</a><span class="sr-only">(current)</span></a>
        </li>
         <li class="nav-item">
            <a class="nav-link" href="create.php">Create</a>
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