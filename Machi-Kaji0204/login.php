<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Machi-Kaji</title>
    <link rel="stylesheet" href="styles/login.css" >
    <link rel="stylesheet" href="styles/reset.min.css" >
    <link rel="stylesheet" href="styles/style.css" >
    <link rel="stylesheet" href="styles/header-10.css" >
    <link rel="stylesheet" href="styles/form.css"> 
  </head>

  <?php include "SmallHeader.html" ?>

<body>
  <div class="bodyLogocss" ><img class="bodyLogo" src="img/roguin.png"></div><br>
  <form method="post" action="login_act.php">
    <div class="form-wrapper">
      <div class="form-item"><br><br>
        <label for="email"></label>
        <input type="email" name="mail" required="required" placeholder="メールアドレス"></input>
      </div>
    <div class="form-item">
      <label for="password"></label>
      <input type="password" name="pass" required="required" placeholder="パスワード"></input>
    </div>
    <div class="button-panel">
      <input type="submit" class="button" title="Sign In" value="サインイン"></input>
    </div>
  </form>
  <div class="form-footer">
    <p><a href="#">Create an account</a></p>
    <p><a href="#">Forgot password?</a></p>
  </div>
  </div>
<footer id="footer">
  <p>Copyright&copy;2022 maternity-support.</p>
</footer> 

    <script src="js/header-10.js"></script>

  
  
  
</body>
</html>