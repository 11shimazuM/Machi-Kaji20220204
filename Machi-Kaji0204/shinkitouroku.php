<!DOCTYPE html>
<html lang="en">
<head>
  <title>新規登録</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/reset.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/header-10.css">
    <link rel="stylesheet" href="styles/form.css"> 
  </head>

    <?php include "header.html" ?>
    
<body>
<form action="insert.php" method="post" >
   <br><main class= "label-title">◯　登録はこちら　◯</main><br><br>
<!-- お名前 -->
<div class="mb-3">
  <label class="form-label" for="name">お名前</label>
  <div class="item">
    <input id="name" class="form-control" type="text" name="name" placeholder="お名前" autocomplete="name" required autofocus /><br>
  </div>
</div>
<!-- 電話番号 -->
<div class="mb-3">
  <label class="form-label" for="tel">お電話番号</label>
  <div class="item">
    <input type="tel" class="form-control" name="tel" placeholder="例) 09012345678" required autofocus><br>
  </div>
</div>
<!-- 住所 -->
<div class="mb-3">
  <label class="form-label" for="address">住所</label>
  <div class="item">
    <input type="text" class="form-control" name="address" size="40" placeholder="例) 北海道札幌市中央区北1条西1丁目1-1-111" required autofocus/><br>
  </div>
</div>
<!-- 生年月日 -->
<div class="mb-3">
  <label class="form-label" for="birth">生年月日</label>
  <div class="item">
    <input type="date" class="form-control" name="birth" placeholder="" required autofocus><br>
  </div>
</div>
<!-- mail -->
<div class="mb-3">
  <label class="form-label" for="mail">mail</label>
  <div class="item">
    <input type="email" class="form-control" name="mail" size="30" value="" placeholder="メールアドレス" autocomplete="email" required autofocus/><br>
  </div>
</div>
<!-- LINE ID -->
<div class="mb-3">
    <label class="form-label" for="line">LINE ID</label>
  <div class="item">
    <input type="text" class="form-control" name="line" size="30" value="" placeholder="連絡手段がLINE希望の場合" /><br>
  </div>
</div>
<!-- ご利用目的 -->
<div class="mb-3">
  <label class="form-label">ご利用目的</label><br>
  <div class="form-check">
       <label for="mokuteki0"></label>
       <input type="checkbox" name="mokuteki0" value="料理"><label><span class="mgr-20">料理</span></label>
       <label for="mokuteki1"></label>
       <input type="checkbox" name="mokuteki1" value="掃除"><label><span class="mgr-20">掃除</span></label>
       <label for="mokuteki2"></label>
       <input type="checkbox" name="mokuteki2" value="お片付け"><label><span class="mgr-20">お片付け</span></label>
    </div>
</div>
<br><br>
<!-- 同居家族の情報 -->
<div class="mb-3">
  <label class="form-label">同居家族の情報</label><br>
  <div class="form-check">
       <label for="kazoku0"></label>
       <input type="checkbox" name="kazoku0" value="親子"><label><span class="mgr-20">親子</span></label>
       <label for="kazoku1"></label>
       <input type="checkbox" name="kazoku1" value="夫婦"><label><span class="mgr-20">夫婦</span></label>
       <label for="kazoku2"></label>
       <input type="checkbox" name="kazoku2" value="ひとり暮らし"><label><span class="mgr-20">ひとり暮らし</span></label>
       <label for="kazoku3"></label>
       <input type="checkbox" name="kazoku3" value="祖父母と親と子"><label><span class="mgr-20">祖父母と親と子</span></label>
       <label for="kazoku4"></label>
       <input type="checkbox" name="kazoku4" value="その他"><label><span class="mgr-20">その他</span></label>
    </div>
</div>
<br><br>
<!-- パスワード -->
<div class="mb-3">
  <label class="form-label" for="pass">パスワード</label>
  <div class="item">
    <input type="password" class="form-control" name="pass" placeholder="英数字8桁以上推奨" required autofocus><br> <!--入力された値はpassword型。アスタリスク表示される。値はpassと名づける。-->
  </div>
</div>
<!-- パスワード再確認 -->
<div class="mb-3">
  <label class="form-label" for="pass2">パスワード</label>
  <div class="item">
    <input type="password" class="form-control" name="pass2" placeholder="再入力" required autofocus><br> <!--入力された値はtext型。値はpass2と名づける-->
  </div>
</div>
<!-- ボタン -->
<div class="mb-3">
  <div class="">
      <input type="submit" value="入力内容の確認へ">
      <input type="reset" value="リセット"><br><br><br><br>
  </div>
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