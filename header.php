<!DOCTYPE html>
<html lang="en"><!--these 2 lines are a must-->
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-4.0.0-alpha.6-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="bootstrap-4.0.0-alpha.6-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">  
  </head>
    
  <body class = "signin-body">
    <div class = "container signin-container"><!--container = center, container-fluid = "100% width-->
        <div class = "row">
            <div class = "col"></div>
            <div class = "col-sm-12 col-md-8">
                <div class="card signin-card">
                    <div class="card-block signin-card-block">
                        <img src = "img/img2.PNG" class = "img-fluid signin-img"><!--img-fluid is a ready made class for responsive images to force image to fit inside its parent-->
                        <form action = "includes/login.php" method = "post">
                              <div class="form-group">
                                    <input type="email" class="form-control" id="emailInput" placeholder="Email">
                              </div>
                              <div class="form-group">
                                    <input type="password" class="form-control" id="passwordInput" placeholder="Password">
                              </div>
                            <button type="button" class="btn signin-btn btn-lg">Sign In</button>
                            <div class="form-check">
                                  <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox"> Remember Me
                                  </label>
                            </div>
                             <a href = "" class = "help">Need Help?</a>
                        </form>
                    </div>
                </div>
                <a href = "includes/signup.php" class = "newAccount">Sign Up</a>
            </div>
            <div class = "col"></div><!--even spacing, hence just col-->
        </div>
    </div>
      
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src = "bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js"></script>
  </body>
</html>