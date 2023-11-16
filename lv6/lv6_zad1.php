    <?php
    $student = array("Clara","Hancock", "0165090561", "3.");
    foreach ($student as $value){
	    echo "$value <br/>";
    }

   $auto = array(
    // Prva dimenzija je niz Citroen koji ima podniz s indeksima
    "Citroen" => array(
        "tip_automobila" => "C3",
        "kubikaža" => 1200,
        "boja" => "plava",
        "godina_proizvodnje" => 2018,
        "motor" => "benzin"
    ),
    // Druga dimenzija je niz Mercedes koji ima podniz s istim indeksima
    "Mercedes" => array(
        "tip_automobila" => "E-Class",
        "kubikaža" => 2000,
        "boja" => "crna",
        "godina_proizvodnje" => 2020,
        "motor" => "dizel"
    )
);

echo "<br/>";

// Elemente niza Citroen ispisujemo pomoću foreach petlje
echo "Elementi niza Citroen:<br>";
foreach ($auto["Citroen"] as $key => $value) {
    echo "$key: $value<br>";
}

echo "<br/>";

// Elemente niza Mercedes ispisujemo direktnim navođenjem indeksa
echo "Elementi niza Mercedes:<br>";
echo "tip_automobila: " . $auto["Mercedes"]["tip_automobila"] . "<br>";
echo "kubikaža: " . $auto["Mercedes"]["kubikaža"] . "<br>";
echo "boja: " . $auto["Mercedes"]["boja"] . "<br>";
echo "godina_proizvodnje: " . $auto["Mercedes"]["godina_proizvodnje"] . "<br>";
echo "motor: " . $auto["Mercedes"]["motor"] . "<br>";

    function kvadrat($num) {
       return $num * $num;
    }

    $num = 9;
    $result = kvadrat($num);
    echo "<br/>";
    echo "Kvadrat broja $num je: $result";

    class Kupac {
       private $firstName;
       private $lastName;

       public function __construct($firstName, $lastName) {
           $this->firstName = $firstName;
           $this->lastName = $lastName;
       }

       public function setFirstName($firstName) {
           $this->firstName = $firstName;
       }

       public function setLastName($lastName) {
           $this->lastName = $lastName;
       }

       public function printKupacInfo() {
           echo "Kupac je: $this->firstName $this->lastName";
       }
    }
    echo "<br/>";
    echo "<br/>";

    $kupac = new Kupac("Clara", "Hancock");

    $kupac->setFirstName("Pero");
    $kupac->setLastName("Perić");

    $kupac->printKupacInfo();

    ?>
