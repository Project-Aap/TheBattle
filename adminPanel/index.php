<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="adminstyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="wrapper">
 <div class="content-width">
    <h2>Admin Login</h2>
    <p>Please use the given barcode to proceed...</p>
    
    <form action="" method="POST" >
        <input type="text" name="id" class="align" placeholder="Scan your barcode.....">
        <input type="submit" style="visibility: hidden;" name="submitLogin" value="Login">
    </form>
    <p>Please note that if you are a visitor and not a moderator you should go back to the homepage</p>
    <a href="http://www.debattle.rf.gd" class="btn btn-primary">Bring me back!</a>
    </div>

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
        </div>
</body>
</html>