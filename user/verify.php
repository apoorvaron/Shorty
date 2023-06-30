<?php

if(!isset($_GET['token']) || empty($_GET['token']) || !isset($_GET['user']) || empty($_GET['user'])) {
    http_response_code(404);
    include __DIR__."/../404.php";
    die();
}

require_once __DIR__."/../admin/dBconn/database.php";
$database = new Database();
$db = $database->connect();

$token = mysqli_real_escape_string($db, $_GET['token']);
$username = mysqli_real_escape_string($db, $_GET['user']);
$date = date("Y-m-d H:i:s", time());

$query = mysqli_query($db, "SELECT * FROM verify_token WHERE token='$token' AND username='$username' AND expires_time > '$date'") or die(mysqli_error($db));

if(mysqli_num_rows($query) == 0)  {
    http_response_code(401);
    die(json_encode([
        "status" => "Unauthorized",
        "message" => "Invalid Link"
    ]));
}

// link is valid allow access to the site
// removing record from verify_Token and also updating verify column in users table to '1'
$query = mysqli_query($db, "DELETE FROM verify_token WHERE token='$token' AND username='$username'") or die("Error: ". mysqli_error($db));
$query = mysqli_query($db, "UPDATE users SET isVerify = '1' WHERE username='$username'") or die("Error: ". mysqli_error($db));

header("Location: ../");
?>