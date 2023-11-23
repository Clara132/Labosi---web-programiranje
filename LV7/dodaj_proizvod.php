<?php 
    include 'spoj.php';
    if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] != 'administrator') {
            header('Location: ispis.php');
            exit();
        }

        else{
            echo "Pozdrav " . $_SESSION['name'] . " " . $_SESSION['lname'] . "<br>";
            echo "<a href=ispis.php>Ispis</a><br>";
            echo "<a href=odjava.php>Odjava</a><br>";

            ?>
            <body>
                <form action="" method="post">
                    <input type="text" name="proizvod" id="proizvod" placeholder="Naziv proizvoda"><br>
                    <input type="text" name="opis" id="opis" placeholder="Opis proizvoda"><br>
                    <input type="text" name="kolicina" id="kolicina" placeholder="Kolicina"><br>
                    <input type="text" name="cijena" id="cijena" placeholder="Cijena"><br>

                    <input type="submit" value="Unesi proizvod">
                </form>
            </body>

            <?php
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                $proizvod = $_POST["proizvod"];
                $opis = $_POST["opis"];
                $kolicina = $_POST["kolicina"];
                $cijena = $_POST["cijena"];

                $query = "INSERT INTO proizvodi (proizvod, opis, kolicina, cijena) VALUES ('$proizvod', '$opis', '$kolicina', '$cijena')";

                $result = mysqli_query($conn, $query);
                if($result) {
                    header("Location: unos.php");
                }
                else{
                    echo"Greska pri unosu!";
                }
            }
        }            
    }
    else{
        header('Location: prijava.php');
        exit();
    }
?>