<?php



if(isset($_GET['id']))  {

    echo "mijn id =" . $_GET['id'];

    //haal de rij-info op van fiets met bijhorende id
    //SELECT *FROM fietsen WHERE id = 1

    //connect database
    include "connect.php";

    //maak een query
    $sql = "SELECT * FROM fietsen WHERE id =" . $_GET['id'];

    echo"<br>";
    echo"<$sql>";
    exit;
    //prepare query
    $stmt = $conn ->prepare($sql);
    //uitvoeren
    $stmt->execute();
    //ophalen alle data
    $result = $stmt->fetchall(PDO::FETCH_ASSOC);
    print_r($result);

}
?>