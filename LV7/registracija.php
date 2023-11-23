<?php
    include 'spoj.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST["username"];
    $firstName = $_POST["name"];
    $lastName = $_POST["lname"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    $query = "SELECT * FROM korisnici WHERE k_ime = '$username'";

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "Korisnicko ime se vec koristi!";
    }
    else{
        $query = "INSERT INTO korisnici (ime, prezime, email, k_ime, lozinka, uloga) VALUES ('$firstName', '$lastName', '$email', '$username', '$password', 'kupac')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "GRESKA!";
        }

        $_SESSION['name'] = $firstName;
        $_SESSION['lname'] = $lastName;
        $_SESSION['role'] = "kupac";

        header("Location: ispis.php");
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
        <input type="text" name="name" id="name" placeholder="Name">
        <br>
        <input type="text" name="lname" id="lname" placeholder="Last name">
        <br>
        <input type="text" name="username" id="username" placeholder="Username">
        <br>
        <input type="password" name="password" id="password" placeholder="Password">
        <br>
        <input type="text" name="email" id="email" placeholder="E-mail">
        <br>
        <input type="submit" value="Register">
    </form>
</body>
</html>


