<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 try {
 $db = new PDO("mysql:host=localhost; dbname=fietsenmaker")
 $query = $db->prepare ("SELECT * FROM fietsen") ;
 $query->execute();
 $result = $query->fetchALL (PDO::FETCH_ASSOC);

 3
foreach($result as &$data) {
 echo $data ["merk"] . " ";
 echo $data ["type"] . " ";
 echo $data ["prijs"] . " ";
 }
 }catch (PDOException $e){
  die("Error!:" . $e)

}
</body>
</html>