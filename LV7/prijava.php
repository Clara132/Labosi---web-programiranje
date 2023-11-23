
<?php
    include 'spoj.php';

    if (isset($_SESSION['role'])) {
        if($_SESSION['role'] == 'admin'){
            header("Location: dodaj_proizvod.php");
            exit();
        }
        else{
            header("Location: ispis.php");
        exit();
        }
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT id, ime, prezime, uloga FROM korisnici WHERE '$username' = k_ime AND lozinka = '$password'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        $_SESSION['user'] = $row['id'];
        $_SESSION['name'] = $row['ime'];
        $_SESSION['lname'] = $row['prezime'];
        $_SESSION['role'] = $row['uloga'];

        header('Location: dodaj_proizvod.php');
    }
    else{
        echo 'Wrong username or password';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="username" id="username" placeholder="Username">
        <br>
        <input type="password" name="password" id="password" placeholder="Password">
        <input type="submit" value="Log in">
    </form>
</body>
</html>
