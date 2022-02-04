<?php
//1. POSTデータ取得
$name = $_POST['name'];
$mail = $_POST['mail'];
$line = $_POST['line'];
$tel = $_POST['tel'];
$address = $_POST['address'];
$soudan = $_POST['soudan'];
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
<form action="insertToiawase.php" method="post">

<br><main class= "label-title">◯　入力内容の確認　◯</main><br><br>
<!-- お名前 -->
<div class="mb-3">
  <label class="form-label" for="name">お名前</label>
  <div class="item">
    <input type="hidden" name="name" value=""/>
    <p><?php echo $_POST['name']; ?></p><br>
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
<!-- ご相談内容 -->
<div class="mb-3">
  <label class="form-label" for="soudan">ご相談内容</label>
  <div class="item">
    <input type="hidden" name="soudan" value=""/>
    <p><?php echo $_POST['soudan']; ?></p><br>
  </div>
</div>
<!-- ボタン -->
<div class="mb-3">
  <input type="submit" value="内容を確定する">
  <input type="submit" value="修正する"><br><br><br><br>
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