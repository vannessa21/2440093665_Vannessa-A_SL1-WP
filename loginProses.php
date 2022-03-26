
<?php
    session_start();

    if((!empty($_POST['username'])&&  !empty ($_POST['password'])) && (isset( $_SESSION['username']) &&  isset( $_SESSION['password1'])) &&($_POST['username'] == $_SESSION['username'])&& ($_POST['password'] == $_SESSION['password1'])){
        
        header("location:home.php");
    }
    else {
        echo "Maaf, Anda gagal login <br>";
        echo "<a href = 'login.php'> Login </a> <br/>";
        echo "<a href = 'register.php'> Register</a>";
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color : #ace6fd;
    }
</style>
<body>
    
</body>
</html>