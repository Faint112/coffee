
<!DOCTYPE html>
<html lang="en">
  
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content= "IE-edge" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Coffeeman</title>
  <link rel="stylesheet" href="style.css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Young+Serif&display=swap" rel="stylesheet">
</head>
<body>
  <section class="header">
    <nav>
      <a href="index.html">
        <div class="logo">
          <img src="images/3logo.png" alt="logo">
        </div>
      </a>
      <div class="nav-links">
        <ul>
          <li><a href="#">HOME</a></li>
          <li><a href="cart.php" target="_blank">PRODUCTS</a></li>
          <li><a href="#">ABOUT</a></li>
          <li><a href="#">CONTACT</a></li>
        </ul>
      </div>
    </nav>
    <div class="text-box">
    <h4>Register</h4>
    <form action="register.php" method="post" onsubmit="return register()">
        <div class="form-group">
            <input type="text" class="form-control" name="fullname" id="full_name" placeholder="Full Name">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password">
        </div>
        <div class="form-btn">
          <input type="submit" class="btn btn-primary" value="Register" name="registered?"> <a href="login.php">Login Here</a></h5></p>
      </div>
</div>

        </form>
    
</div>
</section>

  
  <script src ="app.js"> </script>
</body>
</html>
