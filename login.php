<?php
  session_start();

    if(isset($_SESSION['username']) && $_SESSION['username'] == "admin"){


    header("Location: admin.php");
    }else if(isset($_SESSION['username']) && $_SESSION['username'] == "user"){
    header("Location: view.php");
    }


    //controllo form login tramite post
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
    //controllo se admin
    if($_POST['username'] == "admin" && $_POST['password'] == "password1234"){
    $_SESSION['username'] = "admin";
 
    header("Location: admin.php");
    //controllo se user
    }elseif($_POST['username'] == "user" && $_POST['password'] == "password"){
    $_SESSION['username'] = "user";   
    header("Location: view.php");
    }


    }


    $error = "User name o password sbagliati";



?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Accedi</h1>
    <?php
    
    echo $error;
    
    ?>
   

    <form method="post" action="login.php">
        <label>
            <h3>Username</h3>:
            <input type="text" name="username" required>
        </label>
        <br>

        <label>
           <h3>Password</h3> :
            <input type="password" name="password" required>
        </label>
        <br>

        <button type="submit">Accedi</button>
    </form>
</body>
</html>