<?php
// Process delete operation after confirmation
if(isset($_POST["Sno"]) && !empty($_POST["Sno"])){
    // Include config file
    require_once "config.php";
    
    // Prepare a delete statement
    $sql = "DELETE FROM blog WHERE Sno = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_POST["Sno"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records deleted successfully. Redirect to landing page
            header("location: index.php");
            exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // // Close connection
    // mysqli_close($link);
    // class Database
    // {
    //   private $server;
    //   private $username;
    //   private $password;
    //   private $database;
    //   private $port;
    
    //   public function connect()
    //   {
    //     // include(__DIR__.'/../../enviornment.php');
    //     $env_server = "localhost";
    //     $env_username = "root";
    //     $env_password = "root";
    //     $env_database = "acmbackend";
    //     $env_port = "8889";
        
    //     $this->server = $env_server;
    //     $this->username = $env_username;
    //     $this->password = $env_password;
    //     $this->database = $env_database;
    //     $this->port = $env_port;
    //     // echo "ewrty".$env_password;

        
    //     $conn = new mysqli($this->server, $this->username, $this->password, $this->database, $this->port);
    //     return $conn;
    //   }
    // }
// echo "dfghj";
    

    // require('admin/blogAdmin/database.php');
    // $database = new Database();
    // $link = $database->connect();
    // $connection = $link;
    
    // if(!$connection){
    //     // die(mysqli_connect_error());
    //     echo "error h bhaiya ";
    //     // die();
    // }
    // echo "srdtfg";

    // $sql = "DELETE FROM forms WHERE formID =".$Sno;

    // if($conn->query($sql)==true){
    //     echo "Sucessfully Deleted";
    // }else {
    //     echo "ERROR: $sql <br> $conn->error";
    // }
    // mysqli_close($link);


    

} else{
    // Check existence of Sno parameter
    if(empty(trim($_GET["Sno"]))){
        // URL doesn't contain Sno parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" answer="width=device-width, initial-scale=1.0">
    <title>Delete Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">

        <style>
                    .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    .hh_button {
    display: inline-block;
    text-decoration: none;
    background: linear-gradient(to right,#ff8a00,#da1b60);
    border: none;
    color: white;
    padding: 10px 25px;
    font-size: 1rem;
    border-radius: 3px;
    cursor: pointer;
    font-family: 'Roboto', sans-serif;
    position: relative;
    margin-top: 30px;
    margin: 0px;
    position: absolute;
    right: 20px;
    top: 1.5%;
    }
    header {
    color: white;
    padding: 20px;
    margin-bottom: 20px;
    }
    header a,  header a:hover {
        text-decoration: none;
        color: white;
    }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Delete Record</h1>
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="alert alert-danger fade in">
                            <input type="hidden" name="Sno" value="<?php echo trim($_GET["Sno"]); ?>"/>
                            <p>Are you sure you want to delete this record?</p><br>
                            <p>
                                <input type="submit" value="Yes" class="btn btn-danger">
                                <a href="index.php" class="btn btn-default">No</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>