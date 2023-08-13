<?php

session_start();
error_reporting(0);

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header("Content-Type: application/json; charset=UTF-8");

include_once './database.php';
include_once './apiFunc.php';
$method = $_SERVER['REQUEST_METHOD'];

function submitReg()
{
    $database = new Database();
    // print_r('dsfghj');
    $db = $database->connect();

    $password = $_POST["password"];
    $randNum = bin2hex(random_bytes(3));

    $file = isset($_FILES['poster']) ? $_FILES['poster'] : false;

    if (!$file) {
        echo json_encode(
            array('message' => 'Insert the image')
        );
    }

    $filename = $file['name'];
    $filetemppath = $file['tmp_name'];
    $fileext = explode('.', $filename);
    $filecheck = strtolower(end($fileext));

    $fileextstored = array('png', 'jpg', 'jpeg');

    if (in_array($filecheck, $fileextstored)) {

        $destinationfile = '../assets/images/reg-user-img/' . $filename;
        $uploadLocation = '../../assets/images/reg-user-img/' . $filename;
        move_uploaded_file($filetemppath, $uploadLocation);


        $sql = "INSERT INTO `users` (`uniqueNo`, `password`,`img`) VALUES ('$randNum', '$password','$destinationfile')";
        // print_r($sql);
        // $result = $db -> query($sql) ;
        $result = mysqli_query($db, $sql);
        // echo("Error description: " . $mysqli -> error);
        // echo("Error description: " . mysqli_error($db));
        // var_dump($result);
        if ($result) {
            echo json_encode(
                array('message' => 'Form has been submitted')
            );
        } else {
            echo json_encode(
                array('message' => 'Internal Server Error. Try Again')
            );
        }

    } else {
        echo json_encode(
            array('message' => 'Insert the image')
        );
    }



}
;
function addLink()
{
    $database = new Database();
    $db = $database->connect();



    $linkIsFor = $_POST["linkIsFor"];
    $originalLink = $_POST["originalLink"];
    $shortenLink = $_POST["shortenLink"];
    $uno = $_SESSION["uno"];

    // $randNum = bin2hex(random_bytes(3));



    $sql = "INSERT INTO `links` (`uniqueNo`,`linkIsFor`, `originalLink`, `shortenLink`) VALUES ('$uno','$linkIsFor', '$originalLink', '$shortenLink')";
    // print_r($sql);
    $result = $db->query($sql);
    // var_dump($result);
    if ($result) {
        echo json_encode(
            array('message' => 'Form has been submitted')
        );
    } else {
        echo json_encode(
            array('message' => 'Internal Server Error. Try Again')
        );
    }

}
;
function deleteLink()
{
    $database = new Database();
    $db = $database->connect();

    $linkID = $_GET['linkID'];
    $uno = $_SESSION["uno"];
    // Check if the uniqueNo and linkID combination is valid
    $checkValidity = "SELECT * FROM links WHERE uniqueNo = '$uno' AND linkID = $linkID";
    $CheckResult = mysqli_query($db, $checkValidity);
    if (mysqli_num_rows($CheckResult) > 0) {
        $sql = "DELETE FROM links WHERE linkID='" . $linkID . "'";
        $result = mysqli_query($db, $sql);

        if ($result == 1) {
            echo json_encode(
                array('message' => 'Link Deleted Successfully')
            );
        } else {
            echo json_encode(
                array('message' => 'Internal Server Error. Try Again')
            );

        }
    } else {
        echo json_encode(
            array('message' => 'Unauthorized Access')
        );
    }
}



function shorty()
{
    $database = new Database();
    $db = $database->connect();


    $uniqueNo = $_POST["uniqueNo"];
    $originalLink = $_POST["originalLink"];
    $shortenLink = $_GET["shortenLink"];

    $sql = "INSERT INTO `links` (`uniqueNo`,`originalLink`, `shortenLink`) VALUES ('shorty','$originalLink', '$shortenLink')";

    $result = $db->query($sql);
    if ($result) {
        echo json_encode(
            array('message' => 'Form has been submitted')
        );
    } else {
        echo json_encode(
            array('message' => 'Internal Server Error. Try Again')
        );
    }

}
;

function getLinks()
{
    $database = new Database();
    $db = $database->connect();
    $obj = new Link($db);
    $result = $obj->allLink();

    // var_dump($result);  
    if ($result) {
        $announcements_arr = array();
        while ($row = $result->fetch_assoc()) {
            $announcement_item = array(
                'linkID' => $row["linkID"],
                'linkIsFor' => $row["linkIsFor"],
                'originalLink' => $row["originalLink"],
                'shortenLink' => $row["shortenLink"],
            );
            array_push($announcements_arr, $announcement_item);
        }
        echo json_encode($announcements_arr);
    }
}
;
function getAlreadyShortened()
{
    $database = new Database();
    $db = $database->connect();

    $originalLink = $_GET['originalLink'];
    $sql = "SELECT * from links where uniqueNo='shorty' AND originalLink='" . $originalLink . "'";
    $result = $db->query($sql);

    // var_dump($result);  
    // var_dump($sql);  
    if ($result) {
        $announcements_arr = array();
        while ($row = $result->fetch_assoc()) {
            $announcement_item = array(
                'linkID' => $row["linkID"],
                'linkIsFor' => $row["linkIsFor"],
                'originalLink' => $row["originalLink"],
                'shortenLink' => $row["shortenLink"],
            );
            array_push($announcements_arr, $announcement_item);
        }
        echo json_encode($announcements_arr);
    }
}
;

function alreadyShortenCustom()
{
    $database = new Database();
    $db = $database->connect();

    $shortenLink = $_GET['shortenLink'];
    $sql = "SELECT * FROM links WHERE shortenLink='" . $shortenLink . "'";
    $result = $db->query($sql);

    if ($result && $result->num_rows > 0) {
        echo json_encode(true);
    } else {
        echo json_encode(false);
    }
}
;

$q = $_GET['q'];
// echo $q;
switch ($q) {
    case 'submitReg':
        // echo "<script>console.log('called')</script>";
        // echo $q;

        submitReg();
        break;
    case 'addLink':
        addLink();
        break;
    case 'deleteLink':
        deleteLink();
        break;
    case 'shorty':
        shorty();
        break;
    case 'getLinks':
        getLinks();
        break;
    case 'getAlreadyShortened':
        getAlreadyShortened();
        break;
    case 'alreadyShortenCustom';
        alreadyShortenCustom();
        break;
    default:
        echo "Invalid Query";
}
?>