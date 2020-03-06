<?php
session_start();

$dbHost = "localhost";
$dbName = "db_debattle";
$dbUser = "root";
$dbPass = "";

$db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
$number = $_POST['text'];

$sql = "SELECT * FROM numbers WHERE id = :id";

//prepare the query
$prepare = $db->prepare($sql);
//change the placeholders for the correct value
$prepare->execute([
    ':id' => $number
]);

//fetch
$item = $prepare->fetch(PDO::FETCH_ASSOC);


//if the item is correctly recieved
if ($item) {
    //set the value to true
    $_SESSION["checkAccess"] = true;
    $_SESSION["personName"] = $item['name'];
    //relocate to main page
    header('Location: ' . '../ticket_scanner_main.php');
    ////////delete from database
    //////$sql = "DELETE FROM numbers WHERE id=$number";
    //////$db->exec($sql);
    //dont activate other code
    exit;
}
//set it to false (if it should be true, it wont be activated because of the exit)
$_SESSION["checkAccess"] = false;
header('Location: ' . '../ticket_scanner_main.php');
exit;



?>