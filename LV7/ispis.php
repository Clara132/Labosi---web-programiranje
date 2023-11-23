<?php 
    include 'spoj.php';

    if (isset($_SESSION['role'])) {

        echo'<a href=index.php>Pocetna</a> &nbsp;';
        echo'<a href=odjava.php>Odjava</a>';

        $query = "SELECT * FROM proizvodi";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            echo "<table border='1'>";
            echo "<tr><th>Naziv proizvoda</th><th>Opis proizvoda</th><th>Količina</th><th>Cijena</th></tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['proizvod'] . "</td>";
                echo "<td>" . $row['opis'] . "</td>";
                echo "<td>" . $row['kolicina'] . "</td>";
                echo "<td>" . $row['cijena'] . "</td>";
                echo "</tr>";
            }   

            echo "</table>";
        } else {
            echo "Nema dostupnih proizvoda.";
        }
    }
    else{
        header("Location: prijava.php");
        exit();
    }
?>