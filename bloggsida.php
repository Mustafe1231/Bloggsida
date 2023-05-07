<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Bloggsida</title>
    <style>

ul {
  list-style-type: none;
  
  
  

 
}

.row{
  position:relative;
  top:130px;
}


a {
text-decoration: none;
color:grey;

 

  
}


.home{
  position:relative;
right: 30px;
 
}

.contact{
  position:relative;
right: 10px;
 
}

li {
    display:inline;
    
}
</style>
</head>

<body>
 <header>
 
<nav class="navbar navbar-light bg-light">
<div class="container-fluid">
  <a class="navbar-brand" href="#">

    <img src="imgs/tech.jpg" width="70" height="50" class="d-inline-block align-top" alt="">
    Techblogg
   <div class="container-fluid pt-2 position-absolute top-50 start-100 bottom-25 translate-middle">
   <?php
    
    if($_SESSION["name"]) {
    ?>
     welcome  <?php echo $_SESSION["name"];?>
    
    
      
    <?php
    }else echo "<h1>Please login first .</h1>";
    ?>
    </div>
    <ul>
  
  <li class="home"><a href="">Home</a></li>
  <li class="contact"><a href="">Contact</a></li>
  <li class="about"><a href="">About</a></li>
</ul>
    
  </a>
</nav>
  
</nav>
<div class="container-fluid pt-2 position-absolute top-200 start-50 bottom-25 translate-middle" >
<div class="row">
  <div class="col-md-3" style="border:solid white;"><img class="img-fluid w-100 " src="imgs/55666972.jpg" width="70"   > </div>
  <div class="col-md-6" style="border:solid white;"> <p> Artificiell Intelligens är en samlingsterm för datasystem som kan känna av sin omgivning, tänka, lära sig och vidta åtgärder. Idag används AI inom de flesta branscher, i exempelvis digitala assistenter, chatbots och fordon</p></div>
  <div class="col-md-3" style="border:solid white;"><div class="card" style="width: 15rem">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body" >
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
</div>

<div class="container-fluid pt-2 position-absolute top-200 start-50 bottom-25 translate-middle" >
<div class="row">
  <div class="col-md-3" style="border:solid white;"> <button type="button"  style="position:relative; top:300px;">Learn more </button> <img class="img-fluid w-100 " src="imgs/Mouse.jpg" width="70" style="position:relative; top:85px;"></div>
   <div class="col-md-6" style="border:solid white;"> <button type="button" style="position:relative; right:-300px; top:220px;">Learn more </button> <img src="imgs/Deskto.jpg" width="400" height="200" style="position:relative; top:85px;">  </div>
   <div  class="col-md-3" style="border:solid white;" >  <button type="button" style="position:relative; right:-70px; top:320px;">Learn more </button> <img src="imgs/Mobile.jpg" width="300" height="200" style="position:relative; top:85px;"> </div>
   <a  class="col-md-3"   href="logout.php"  style="position:relative; right:-65%; top:-445px;">Logout</a>
</div>
</div>
</div>


  
</header>


   

