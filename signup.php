<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="nirvana1.jpeg">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/navbar-fixed.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.min.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-5 mx-auto mt-5">
          <div class="card">
            <div class="card-header">
              <h3 class="text-dark">Signup User</h3>
            </div>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <input type="text" id="name" class="form-control name" placeholder="Name">
                  <div class="invalid-feedback" style="font-size:16px;">Name is required</div>
                </div>
                <!-- Close form-group -->
                <div class="form-group">
                  <input type="email" id="email" class="form-control email" placeholder="Email">
                  <div class="invalid-feedback emailError" style="font-size:16px;">Email is required</div>
                </div>
                <!-- Close form-group -->
                <div class="form-group">
                  <input type="password" id="password" class="form-control password" placeholder="Password">
                  <div class="invalid-feedback" style="font-size:16px;">Password is required</div>
                </div>
                <!-- Close form-group -->
                <div class="form-group">
                  <button type="button" id="signup" class="btn btn-info">Signup &rarr;</button>
                  <a href="index.php" style="float:right;margin-top:10px;">Already have an account ?</a>
                </div>
                <!-- Close form-group -->
              </form>
            </div>
            <!-- Close card-body -->
          </div>
          <!-- Close card -->
        </div>
        <!-- Close col-md-5 -->
      </div>
      <!-- Close row -->
    </div>
    <!-- Close container -->
    <script src="js/app.js"></script>
    <script src="js/bootstrap.min.js"></script>


    
  </body>
</html>