
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<?php 
    $linkID = $_GET["linkID"];
    $username = $_GET["username"];
    $uno = $_GET["uno"];

?>

<script>

    function yesDelete(){
        // console.log("HI");
        $.ajax({
            url: '../admin/dBconn/api.php/?q=deleteLink&linkID=<?php echo $_GET["linkID"]; ?>',
            type: 'POST',
            dataType: 'json',
            success: function (data, textStatus, xhr) {
               // console.log(data);
               // console.log("mii");
                window.location.replace("./successDelete.php?username=<?php echo $username ?>&uno=<?php echo $uno ?>");
            },
            error: function (xhr, textStatus, errorThrown) {
                window.location.replace("./successDelete.php?username=<?php echo $username ?>&uno=<?php echo $uno ?>");
            }
        });
    }
</script>
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
                            <!-- <input type="hidden" name="linkID" id="linkID" value="<?php echo trim($_GET["linkID"]); ?>"/> -->
                            <p>Are you sure you want to delete this record?</p><br>
                            <p>
                                <input type="submit" onclick="yesDelete()" class="btn btn-danger" aria-label="Delete" aria-describedby="deleteConfirmation" >
                                <a href="./index.php?username=<?php echo $username ?>&uno=<?php echo $uno ?>" class="btn btn-default">No</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
