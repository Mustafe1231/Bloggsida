<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  >
    <title>Sign up</title>
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
  
 $namn = $_POST["name"];
 $email = $_POST["email"];
 $lösenord = $_POST["password"];

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

<script>
function check_pass() {
    if (document.getElementById('password').value ==
            document.getElementById('confirmpass').value) {
            alert("Matching")
            document.getElementById('Save').disabled = false;



    } else {
        alert(" Not matching")
        document.getElementById('Save').disabled = true;

    }
}


</script>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'GET') : ?>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        
        <div>
        <div class="row justify-content-center custom-margin ">
  <h1> Sign up </h1>
  <div class="col-sm-4" >
    <form action="" method="post" >
    <label for="Name"> Namn</label>
    <input type="text" class="form-label" id="name" name="name">
    <br>
    <label for="email"> Email</label>
    <input type="email" class="form-label" id="email" name="email" >
    <br>
    <label for="password"> password</label>
    <input type="password" class="form-label" id="password"  name="password" >
    <br>
    <label for="confirmpass">confirm password</label>
    <input type="password" class="form-label" id="confirmpass" onchange='check_pass();' name="password" >
    <br>
    <input type="Submit"  name="Save"  id="Save" value="registera" >
    <br>
    <a Style="position:relative; top:3px;" href='loginn.php'>Har du redan ett konto?</a>
    </form>

    
       
        <?php else : ?>

            <?php
           
            if (isset($_POST['name'], $_POST['email'])) {
                $name = htmlspecialchars($_POST['name']);
                $email = htmlspecialchars($_POST['email']);

                echo "Tack $name för du registera dig.<br>";
                echo " Nu kan du logga in.";
                echo "<a class='btn btn-primary' href='loginn.php'>logga in</a>";
                
                
            } else {
                echo 'Du måste ange emailen och namnet.';

            }
            
            ?>

        <?php endif 
        
            
            ?>

           
    </main>
</body>

</html>
