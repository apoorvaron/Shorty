<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header("Content-Type: application/json; charset=UTF-8");

    include_once './database.php';
    // include_once './apiFunc.php';
    $method = $_SERVER['REQUEST_METHOD'];

function submitReg(){
    $database = new Database();
    // print_r('dsfghj');
    $db = $database->connect();

    $username = $_POST["username"];
    $password =  $_POST["password"];
    $randNum = bin2hex(random_bytes(3));

    $file = isset($_FILES['poster']) ? $_FILES['poster'] : false;

    if (!$file) {
        echo json_encode(
            array('message' => 'Insert the image')
        );
    }

    $filename = $file['name'];
    $filetemppath= $file['tmp_name'];
    $fileext = explode('.',$filename);
    $filecheck = strtolower(end($fileext));

    $fileextstored = array('png', 'jpg', 'jpeg');

    if (in_array($filecheck, $fileextstored)) {

        $destinationfile = '../assets/images/reg-user-img/' . $filename;
        $uploadLocation = '../../assets/images/reg-user-img/' . $filename;
        move_uploaded_file($filetemppath, $uploadLocation);


        $sql = "INSERT INTO `users` (`uniqueNo`,`username`, `password`,`img`) VALUES ('$randNum','$username', '$password','$destinationfile')";
        // print_r($sql);
        // $result = $db -> query($sql) ;
        $result = mysqli_query($db,$sql);
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

    // $query = "SELECT * from users WHERE username=".$username;
    // $res =  mysqli_query($db,$query);


};
function addLink(){
    $database = new Database();
    $db = $database->connect();

    
    
    $linkIsFor =  $_POST["linkIsFor"];
    $originalLink =  $_POST["originalLink"];
    $shortenLink =  $_POST["shortenLink"];
    $uno = $_GET["uno"];
    // $randNum = bin2hex(random_bytes(3));



    $sql = "INSERT INTO `links` (`uniqueNo`,`linkIsFor`, `originalLink`, `shortenLink`) VALUES ('$uno','$linkIsFor', '$originalLink', '$shortenLink')";
    // print_r($sql);
    $result =$db -> query($sql) ;
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

};
function deleteLink(){
    $database = new Database();
    $db = $database->connect();

    $linkID =$_GET['linkID'];

    $sql = "DELETE FROM links WHERE linkID='".$linkID."'";

    $result = mysqli_query($db,$sql);
    echo $result;
    if($result==1){
        echo json_encode(
            array('message' => 'Link Deleted Successfully')
        );
    }else{
        echo json_encode(
            array('message' => 'Internal Server Error. Try Again')
        );
    }
}

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
        default:
            echo "Invalid Query";
    }
?>