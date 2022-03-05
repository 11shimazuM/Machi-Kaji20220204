<?php 
require("../dbconnect.php");
session_start();


if (!empty($_POST)) {
    /* エラーがなければ次のページへ */
    if (!isset($error)) {
        $_SESSION['join'] = $_POST;   // フォームの内容をセッションで保存
        header('Location: LToiawasekakunin.php');   // toiawasekakunin.phpへ移動
        exit();
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>お問い合わせ</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../styles/reset.min.css">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/form.css"> 
    <link rel="stylesheet" href="../styles/header-10.css" >
</head>

<?php include "LSmallHeader.php" ?>

    <body>
<form action="" method="post" >
<div class="bodyLogocss"><img class="bodyLogo" src="../img/otoiawase.png"></div><br><br>
<!-- ご利用目的 -->
<div class="bodyLogocss">
  <label class="bodyLogocss">お問い合わせの種類</label><br>
  <div class="form-check">
       <label for="mokuteki0"></label>
       <input type="radio" name="mokuteki0" value="サービス利用について"><label><span class="mgr-20">サービス利用について</span></label>
       <label for="mokuteki1"></label>
       <input type="radio" name="mokuteki1" value="サポーターについて"><label><span class="mgr-20">サポーターについて</span></label>
       <label for="mokuteki2"></label>
       <input type="radio" name="mokuteki2" value="その他のお問い合わせ"><label><span class="mgr-20">その他のお問い合わせ</span></label>
    </div>
</div>
<br>
<!-- お名前 -->
<div class="bodyLogocss">
  <label class="form-label" for="name">お名前</label>
  <div class="item">
    <input id="name" class="form-control" type="text" name="name" placeholder="お名前" autocomplete="name" required autofocus /><br>
  </div>
</div>
<!-- Mail -->
<div class="bodyLogocss">
    <label class="form-label" for="mail">メールアドレス</label>
  <div class="item">
    <input type="text" class="form-control" name="mail" size="30" value="" placeholder="例) machi@kaji.jp" autocomplete="email" required autofocus /><br>
  </div>
</div>
<!-- LINE ID -->
<div class="bodyLogocss">
    <label class="form-label" for="line">LINE ID</label>
  <div class="item">
    <input type="text" class="form-control" name="line" size="30" value="" placeholder="連絡手段がLINE希望の場合のみ" /><br>
  </div>
</div>
<!-- 電話番号 -->
<div class="bodyLogocss">
  <label class="form-label" for="tel">お電話番号</label>
  <div class="item">
    <input type="tel" class="form-control" name="tel" placeholder="例) 09012345678" autocomplete="tel"><br>
  </div>
</div>
<!-- 住所 -->
<div class="bodyLogocss">
  <label class="form-label" for="address">住所</label>
  <div class="item">
    <input type="text" class="form-control" name="address" size="40" placeholder="例) 北海道札幌市中央区北1条西1丁目1-1-111"><br>
  </div>
</div>
<!-- ご相談内容 -->
<div class="bodyLogocss">
  <label class="form-label" for="soudan">ご相談内容</label>
  <div class="item">
    <textarea class="form-control" name="soudan" rows="5" placeholder="こちらに内容をご記入ください" required autofocus></textarea><br>
  </div>
</div>
<!-- ボタン -->
<div class="bodyLogocss">
  <div class="">
      <input type="submit" value="入力内容の確認へ">
      <input type="reset" value="リセット"><br><br><br><br>
  </div>
</div>
</form>
<footer id="footer">
  <p>Copyright&copy;2022 maternity-support.</p>
</footer> 
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!--自作のJS-->  <!--自作のJS-->
<script src="../js/header-10.js"></script>
<script>
  window.addEventListener("beforeunload", function(e) {
    var confirmationMessage = "入力内容を破棄します。";
    e.returnValue = confirmationMessage;
    return confirmationMessage;
  });
</script>
</body>
</html>