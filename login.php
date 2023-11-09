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
    
    <div class="Login">
    <form method="post" action="cart.php">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">

        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <input type="submit" class="LogIn" value="Log In" name="submit">
    </form>
    <p><a href="register.php">or Create a user account here!</a></p>
</div>

    <style>
        .Login {
            max-width: 300px;
            margin: 0 auto;
        }
        .Login {
  
  background-color: rgba(177, 106, 55, 0.2);
  backdrop-filter: blur(10px);
  padding:30px;
  margin-top:10px;
  position: absolute;
  top: 30%;
  left: 45%;
  border-radius: 30px; }
      
        
    </style>
    </body>
    </html>