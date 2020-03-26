<?php

$dbHost = 'sql213.epizy.com';
$dbName = 'epiz_25235384_debattleDB';
$dbUser = 'epiz_25235384';
$dbPass = 'EuJCv1EE366U0X';

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$dbConn = new PDO("mysql:host=$dbHost;dbname=$dbName;", $dbUser, $dbPass, $options);

$number = $_POST['text'];

$sql = "SELECT * FROM user_information WHERE id = :id";

//prepare the query
$prepare = $dbConn->prepare($sql);
//change the placeholders for the correct value
$prepare->execute([
    ':id' => $number
]);


session_start();

//fetch
$item = $prepare->fetch(PDO::FETCH_ASSOC);


//if the item is correctly recieved
if ($item && $item["scanned"] == 0) {
    //set the value to true
    $_SESSION["checkAccess"] = 3;
    $_SESSION["personName"] = $item['name'];

    $sqledit = "UPDATE user_information SET scanned=1 WHERE id=:id";

    $query = $dbConn->prepare($sqledit);
    $query->execute([
        ':id'                   => $number
    ]);

    //relocate to main page
    header('Location: ' . '../ticket_scanner_main.php');
    //dont activate other code
    exit;
}
if ($item["scanned"] == 1) {
    $_SESSION["checkAccess"] = 2;
    header('Location: ' . '../ticket_scanner_main.php');
    exit;
}
//set it to false (if it should be true, it wont be activated because of the exit)
$_SESSION["checkAccess"] = 0;
header('Location: ' . '../ticket_scanner_main.php');
exit;



?>