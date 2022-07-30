<?php
  if(isset($_POST['submit'])){
    require('./admin/dBconn/database.php');
    $database = new Database();
    $db = $database->connect();

    $username=$_POST['username'];
    $password=$_POST['password'];

    $query = "SELECT * from users where username='$username' and password ='$password'";
    $result = mysqli_query($db,$query);

    if(mysqli_num_rows($result)==1){
      // session_start();
      // $_SESSION['auth']='true';
      // $_SESSION['start'] = time();
      // $_SESSION['expire'] = $_SESSION['start'] + (60 * 60);
      // var_dump($_SESSION['start']);
      // var_dump($_SESSION['expire']);
      $row = mysqli_fetch_array($result);
      // header('location: ./index.php?id='.$row['id'].'&uno='.$row['uniqueNo']);
      header('location: ./user/index.php?username='.$row['username'].'&uno='.$row['uniqueNo']);
      // echo "<script>alert('TRUE AUTH')</script>";

      // echo "Right";
    }
    else{
        echo "<script>alert('Wrong username or password')</script>";
    }

  }
?>
<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="./assets/css/login.css">
  </head>
  <body>
    <div class="limiter">
      <div class="container-login100">
        <div class="wrap-login100">
          <div class="login100-pic js-tilt">
            <img
              src="https://2.bp.blogspot.com/-l9nGy2e3PnA/XLzG5A6u_cI/AAAAAAAAAgI/31bl8XZOrTwN0kTN8c18YOG3OhNiTUrsQCLcBGAs/s1600/rocket.png"
              alt="IMG"
            />
          </div>

          <form class="login100-form validate-form" method="POST">
            <span class="login100-form-title"> Login </span>

            <div
              class="wrap-input100 validate-input"
              data-validate="Valid email is required: ex@abc.xyz"
            >
              <input
                class="input100"
                type="text"
                name="username"
                id="username"
                placeholder="Username"
              />
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-envelope" aria-hidden="true"></i>
              </span>
            </div>

            <div
              class="wrap-input100 validate-input"
              data-validate="Password is required"
            >
              <input
                class="input100"
                type="password"
                name="password"
                id="password"
                placeholder="Password"
              />
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-lock" aria-hidden="true"></i>
              </span>
            </div>

            <div class="container-login100-form-btn">
              <button type="submit" name="submit" class="login100-form-btn">Login</button>
            </div>

            <div class="text-center p-t-12">
            <a class="txt2" href="#">
                Create your Account
                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
              </a>
            </div>

        
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
