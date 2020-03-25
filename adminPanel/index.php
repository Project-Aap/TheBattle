<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="adminstyle.css">
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="id" placeholder="Scan your barcode..">
        <input type="submit" style="visibility: hidden;" name="submitLogin" value="Login">
    </form>
    <?php
    session_start();
    require "../phpHandlers/dbConfig.php";
    if(isset($_POST['submitLogin'])) {
        if (isset($_POST["id"])) {
            $id = $_POST["id"];

            $sql = "SELECT * FROM user_information WHERE id = :id";
            $query = $dbConn->prepare($sql);
            $execute = $query->execute([
                ':id' => $id,
            ]);
            $info = $query->fetch();

            if (isset($info["moderator"])) {
                if ($info["moderator"] == 1) {
                    $_SESSION["ModeratorLogin"] = true;
                    header("Location: panelLinks.php");
                }
            } else {
                echo "<p>You're not a Moderator!</p>";
            }
        }
    }
    ?>
</body>
</html>