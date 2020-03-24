<?php
    require "../../phpHandlers/dbConfig.php";
    require "../checkModerator.php";
    require "vendor/autoload.php";
    if(!(isset($_POST["mailSubject"]) and isset($_POST["mailContent"]) and isset($_POST["gmailUser"]) and isset($_POST["gmailPassword"])))
    {
        $_SESSION["error"] = "De email(s) zijn niet verzonden door een fout!";
        header("Location: " . "index.php");
        exit;
    }

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require realpath(dirname(__FILE__)) . '/mail/Exception.php';
    require realpath(dirname(__FILE__)) . '/mail/PHPMailer.php';
    require realpath(dirname(__FILE__)) . '/mail/SMTP.php';

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'ssl://smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 465;

    $mail->Username = $_POST["gmailUser"];
    $mail->Password = $_POST["gmailPassword"];
    $mail->setFrom('no-reply@thebattle.com', 'TheBattle');
    $mail->Subject = $_POST["mailSubject"];
    $mail->Body = $_POST["mailContent"];

    $sql = "SELECT * FROM user_information";
    $query = $dbConn->prepare($sql);
    $queryCheck = $query->execute();
    $queryOutput = $query->fetchAll(PDO::FETCH_ASSOC);

    if($queryOutput)
    {
        if ($queryOutput[0]["mail"] != NULL && $queryOutput[0]["id"] != NULL) {
            $mail->addAddress($queryOutput[0]["mail"]);
            $id = $queryOutput[0]["id"];
        }
        else
        {
            $_SESSION["error"] = "De email(s) zijn niet verzonden door een fout!";
            header("Location: " . "index.php");
            exit;
        }
    }
    else
    {
        $_SESSION["error"] = "De email(s) zijn niet verzonden door een fout!";
        header("Location: " . "index.php");
        exit;
    }

    if(isset($_POST["addBarcode"]))
    {
        $Bar = new Picqer\Barcode\BarcodeGeneratorJPG();
        $code = $Bar->getBarcode($id, $Bar::TYPE_EAN_8);
        $mail->addStringEmbeddedImage($code, 'image', 'image.jpg');
    }

    if($mail->send()){
        $_SESSION["succes"] = "De email(s) zijn verzonden!";
    }
    else
    {
        $_SESSION["error"] = "De email(s) zijn niet verzonden door een fout!";
    }
    header("Location: " . "index.php");

?>