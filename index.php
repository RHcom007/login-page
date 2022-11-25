<!DOCTYPE html>
<!-- 
  Login Page by Zerky Yulyandri
  Github : https://github.com/zerkijulian92
 -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Login Page</title>

    <!-- CSS FILES -->
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>

  <body>
    <!-- container -->
    <div class="container">
      <!-- Login Left -->
      <div class="login-left">
        <div class="login-header">
          <?php if(isset($_GET['success'])):if ($_GET['success'] == 'false'):?>
            <div class="alert-err">Email atau password yang anda masukkan salah</div>
          <?php endif;endif; ?>
          <h1>Welcome to Our Application</h1>
          <p>Please login to use the platform</p>
        </div>
        <!-- Login Form -->
        <form action="process.php" method="post">
          <div class="login-form-content">
            <div class="form-item">
              <label for="email">Enter Email</label>
              <input type="text" id="email" name="email" />
            </div>
            <div class="form-item">
              <label for="password">Enter Password</label>
              <input type="password" id="password" name="password" />
            </div>
            <div class="form-item">
              <div class="checkbox">
                <input type="checkbox" id="rememberMeCheckbox" name="remember" checked />
                <label for="rememberMeCheckbox" class="checkboxLabel"
                  >Remember me</label
                >
              </div>
            </div>
            <button type="submit" name="submit">Sign In</button>
          </div>
          <!-- Login Form Footer -->
          <div class="login-form-footer">
            <a href="">
              <img
                width="30"
                src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg"
                alt=""
              />
              Facebook Login
            </a>
            <a href="#">
              <img
                width="30"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/2048px-Google_%22G%22_Logo.svg.png"
                alt=""
              />
              Google Login
            </a>
          </div>
        </form>
      </div>
      <!-- Login Right -->
      <div class="login-right">
        <img src="images/img-programmer.png" alt="" />
      </div>
    </div>
  </body>
</html>
