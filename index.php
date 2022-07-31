<script>
  window.location.replace("./user/login.php");
</script>
<!DOCTYPE html>
<html>
  <head>  
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<link rel="stylesheet" href="./assets/css/main.css">
  </head>  
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <body>
 <!-- Section: Design Block -->
<section class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-image" style="
        height: 150px;
        "></div>
  <!-- Background image -->

  <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
  ">
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">Link Shortener</h2>

          <form>

            <div class="form-outline mb-4">
              <input type="text" id="form3Example1" class="form-control"  placeholder="Link is for"/>
            </div>
            <div class="form-outline mb-4">
              <input type="text" id="form3Example4" class="form-control" placeholder="Original Link"/>
            </div>
            <div class="form-outline mb-4 form-control">
              <span>
              <label> <b>http://micro.epizy.com/ </b> </label>
              <input type="text" id="form3Example4"   placeholder="Custom Short Link" style="border:0px"/>
              </span>
            </div>
      

          

              
            <button type="submit" class="btn btn-primary btn-block mb-4">
                Generate Random Name
            </button>
            &nbsp;&nbsp;

            <button type="submit" class="btn btn-success btn-block mb-4">
                Check & Confirm
            </button>
            <br>
            <br>
            <br>
            <br>
            <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">      Login As Admin</p>
                    <button type="button" class="btn btn-outline-danger">Click Here</button>
            </div>

           
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->
  </body>                
</html>
