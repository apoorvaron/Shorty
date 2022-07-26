<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration Page</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link href="./assets/css/register.css" crossorigin="anonymous" rel="stylesheet">
<link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="./assets/images/reg-page-img.png"
/>
  </head>

  <?php

      if(isset($_POST['submit'])){
          // echo "dsfdgf";
        // include('../faqadmin/config.php');
        require('./admin/dBconnection/database.php');
        $database = new Database();
        $link = $database->connect();
        // $link = mysqli_connect("localhost", "root", "root", "task", "8889");
        // if(!$link){
        //   die("Connection to DB failed!!".mysqli_connect_error());
        // }
        // print_r( $database);
        // print_r( $link);

        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * from user where username='$username' and password ='$password'";
        $result = mysqli_query($link,$query);
        // echo $query;
        if(mysqli_num_rows($result)==1){
            session_start();
            $_SESSION['auth']='true';
            $_SESSION['start'] = time();
            $_SESSION['expire'] = $_SESSION['start'] + (60 * 60);
            // var_dump($_SESSION['start']);
            // var_dump($_SESSION['expire']);

            header('location: ./files/allStudent.php');
            // echo "Right";
        }
        else{
            echo "<script>alert('Wrong username or password')</script>";
        }
    }
  ?>

  <body style="background-color:#4e73df">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="" crossorigin="anonymous"></script>
    <script>
      function gotologin(){
        window.location.replace('./login.php');
      }
    </script>
    <section class="vh-100">
      <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
          <div class="col-md-8 col-lg-7 col-xl-6">
            <img src="./assets/images/reg-page-img.png"
              class="img-fluid" alt="Phone image">
          </div>
          <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
            <form method="POST">
              <div class="form-outline mb-4">
                <h3 style="color:white">Registration Form</h3>
              </div>
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="text" id="form1Example13" class="form-control form-control-lg" placeholder="Username" name="username"/>
              </div>
              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" id="form1Example23" class="form-control form-control-lg" placeholder="Password" name="password">
              </div>
              <!-- Submit button -->
              <button type="submit"name="submit" style="float:right;background-color:white" class="btn btn-outline-primary btn-lg btn-block">Sign in</button>
            </form>


          </div>
          <div class="d-grid gap-2 col-6 mx-auto">

<button type="submit" class="btn  btn-lg btn-block" style="background-color:#B0B8EB"onclick="gotologin()">Login</button>
</div>
        </div>
      </div>
    </section>

  

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
