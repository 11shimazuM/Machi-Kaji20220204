<?php
 session_start();
 if(isset($_POST['submit'])){
   $_SESSION['name'] = $_POST['name'];
   $_SESSION['tel'] = $_POST['tel'];
   $_SESSION['address'] = $_POST['address'];
   $_SESSION['birth'] = $_POST['birth'];
   $_SESSION['mail'] = $_POST['mail'];
   $_SESSION['line'] = $_POST['line'];
   $_SESSION['mokuteki0'] = $_POST['mokuteki0'];
   $_SESSION['mokuteki1'] = $_POST['mokuteki1'];
   $_SESSION['mokuteki2'] = $_POST['mokuteki2'];
   $_SESSION['kazoku0'] = $_POST['kazoku0'];
   $_SESSION['kazoku1'] = $_POST['kazoku1'];
   $_SESSION['kazoku2'] = $_POST['kazoku2'];
   $_SESSION['kazoku3'] = $_POST['kazoku3'];
   $_SESSION['kazoku4'] = $_POST['kazoku4'];
   $_SESSION['pass'] = $_POST['pass'];
   $_SESSION['pass2'] = $_POST['pass2'];
   header('Location: insert.php');
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>入力内容の確認</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Machi-Kaji</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/reset.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/header-10.css">
    <link rel="stylesheet" href="styles/form.css"> 
 </head>

    <?php include "header.html" ?>
    
<body>
<script type="text/javascript">
  var css = document.createElement('link');
  css.rel = 'stylesheet';
  css.href = 'styles/form.css';
  css.type = 'text/css';
  var head = document.getElementsByTagName('head')[0];
  head.appendChild(css);
</script>
<form action="insert.php" method="post">

<br><main class= "label-title">◯　入力内容の確認　◯</main><br><br>
<!-- お名前 -->
<div class="mb-3">
  <label class="form-label" for="name">お名前</label>
  <div class="item">
    <input type="hidden" name="name" value=""/>
    <p><?php echo $_POST['name']; ?></p><br>
</div>
<!-- 電話番号 -->
<div class="mb-3">
  <label class="form-label" for="tel">お電話番号</label>
  <div class="item">
    <input type="hidden" name="tel" value=""/>
    <p><?php echo $_POST['tel']; ?></p><br>
  </div>
</div>
<!-- 住所 -->
<div class="mb-3">
  <label class="form-label" for="address">住所</label>
  <div class="item">
    <input type="hidden" name="address" value=""/>
    <p><?php echo $_POST['address']; ?></p><br>
  </div>
</div>
<!-- 生年月日 -->
<div class="mb-3">
  <label class="form-label" for="birth">生年月日</label>
  <div class="item">
    <input type="hidden" name="birth" value=""/>
    <p><?php echo $_POST['birth']; ?></p><br>
  </div>
</div>
<!-- mail -->
<div class="mb-3">
  <label class="form-label" for="mail">mail</label>
  <div class="item">
    <input type="hidden" name="mail" value=""/>
    <p><?php echo $_POST['mail']; ?></p><br>
  </div>
</div>
<!-- LINE ID -->
<div class="mb-3">
  <label class="form-label" for="line">LINE ID</label>
  <div class="item">
    <input type="hidden" name="line" value=""/>
    <p><?php echo $_POST['line']; ?></p><br>
  </div>
</div>
<!-- ご利用目的 -->
<div class="mb-3">
  <label class="form-label">ご利用目的</label><br>
  <div class="item">
       <input type="hidden" name="mokuteki0" value=""/>
       <p><?php echo $_POST['mokuteki0']; ?></p><br>
       <input type="hidden" name="mokuteki1" value=""/>
       <p><?php echo $_POST['mokuteki1']; ?></p><br>
       <input type="hidden" name="mokuteki2" value=""/>
       <p><?php echo $_POST['mokuteki2']; ?></p><br>
  </div>
</div>
<!-- 同居家族の情報 -->
<div class="mb-3">
  <label class="form-label">同居家族の情報</label><br>
  <div class="item">
    <input type="hidden" name="kazoku0" value=""/>
    <p><?php echo $_POST['kazoku0']; ?></p><br>
    <input type="hidden" name="kazoku1" value=""/>
    <p><?php echo $_POST['kazoku1']; ?></p><br>
    <input type="hidden" name="kazoku2" value=""/>
    <p><?php echo $_POST['kazoku2']; ?></p><br>
    <input type="hidden" name="kazoku3" value=""/>
    <p><?php echo $_POST['kazoku3']; ?></p><br>
    <input type="hidden" name="kazoku4" value=""/>
    <p><?php echo $_POST['kazoku4']; ?></p><br>
  </div>
</div>
<!-- パスワード -->
<div class="mb-3">
  <label class="form-label" for="pass">パスワード</label>
  <div class="item">
    <input type="hidden" name="pass" value=""/>
    <p><?php echo $_POST['pass']; ?></p><br>
    <input type="hidden" name="pass2" value=""/>
    <p><?php echo $_POST['pass2']; ?></p><br>
  </div>
</div>
<!-- ボタン -->
<div class="mb-3">
  <input type="submit" value="内容を確定する">
  <a href="javascript:history.back()" type="button">修正する</a><br><br><br><br>
</div>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!--自作のJS-->  <!--自作のJS-->
<script src="js/header-10.js"></script>
<script>
  window.addEventListener("beforeunload", function(e) {
    var confirmationMessage = "入力内容を破棄します。";
    e.returnValue = confirmationMessage;
    return confirmationMessage;
  });
</script>
</body>
</html>