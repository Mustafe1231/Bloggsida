

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  >
    <title>log in</title>
    <style>
    .custom-margin{
      background-color:lightblue;

        
    }

    body {
        margin:auto;
        margin-top:40px;
         width:50%;
         height: 40%;
         background-color:green;

    }

        h1{
           text-align:center;
           
        }  

        .btn{
         display:flex;
         justify-content: center;
         width:30%;
         
         
        }

        
        
    </style>
</head>
<body>
    <main>

 <?php 

if(isset($_POST["Save"]))
{
  
  session_start();
  
  $namn = $_POST["name"];
  $email = $_POST["email"];
  $lösenord = $_POST["password"];
 
      //store the session data
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
      //print_r($_SESSION);
 
 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "bloggsida";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO users (name, password, email)
VALUES ('$namn', '$lösenord', '$email')";

if (mysqli_query($conn, $sql)) {
    echo "";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }


mysqli_close($conn);


}
    
?>





    <?php if ($_SERVER['REQUEST_METHOD'] === 'GET') : ?>
        <div>
        <div class="row justify-content-center custom-margin ">
  <h1> Log in </h1>
  <div class="col-sm-4" >
    <form action="#" method="post" >
    <label for="Name"> Namn</label>
    <input type="text" class="form-label" id="name" name="name">
    <br>
    <label for="email"> Email</label>
    <input type="email" class="form-label" id="email" name="email" >
    <br>
    <label for="password"> password</label>
    <input type="password" class="form-label" id="password" name="password" >
    <br>
    <input type="Submit"  name="Save"  id="Save" value="Logga in" >
    <br>
    <a Style="position:relative; top:3px;" href='sign up.php'>Ny Skapa ett konto nu</a>
    </form>

    
       
        <?php else : ?>

            <?php
           
            if (isset($_POST['name'], $_POST['email'], $_POST['password'])) {
                $name = htmlspecialchars($_POST['name']);
                $email = htmlspecialchars($_POST['email']);
                $password = htmlspecialchars($_POST['password']);
                

                echo "Tack $name för din subsciption med lösenordet $password.<br>";
                echo " brevet finns i inboxen $email .";
                echo "<a class='btn btn-primary' href='bloggsida.php'>fortsätt</a>";

                
                
                
            } else {
                echo 'Du måste ange emailen och namnet.';

            }
            
            
            ?>

        <?php endif 
        
        
            
            ?>

           

    </main>
</body>

</html>



