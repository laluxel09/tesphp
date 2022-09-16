<?php
    if(isset($_POST["submit"])){
        if(!empty($_POST["username"]) && !empty($_POST["password"])){
            //siswa
            if($_POST["username"] == "siswa" &&
            $_POST["password"] == "12345"){
                header("Location: untuksiswa.php");
                exit;
            } 
            //admin
            else if($_POST["username"] == "admin" &&
            $_POST["password"] == "6789"){
                header("Location: untukadmin.php");
            } else {
                $error = true;
            }
        }else{
            $kosong = true;
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login User</title>
    </head>
    <body>
        <h1>Login User</h1>
        <form action="" method="post">
            <label for="username">Username :</label>
            <input type="text" name="username" id="username">
            <br>
            <br>

            <label for="password">Password  : </label>
            <input type="password" name="password"id="password">
            <br>
            <br>
            <?php
                if(isset($error)){
                    echo "<font color='red'>Username atau Password salah!</font>";
                }
                if(isset($kosong)){
                    echo "<font color='red'>Isi Username atau Password terlebih dahulu!</font>";
                }
            ?>
            <br>
            <button type="submit" name="submit">Login</button>
        </form>

    </body>
</html>