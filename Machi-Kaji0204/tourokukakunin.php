<?php
session_start();
require("dbconnect.php");

// SESSIONデータ取得
$name =$_SESSION['join']['name'];
$tel = $_SESSION['join']['tel'];
$address = $_SESSION['join']['address'];
$birth =$_SESSION['join']['birth'];
$mail = $_SESSION['join']['mail'];
$line = $_SESSION['join']['line'];
$mokuteki0 = $_SESSION['join']['mokuteki0'];
$mokuteki1 = $_SESSION['join']['mokuteki1'];
$mokuteki2 = $_SESSION['join']['mokuteki2'];
$kazoku0 = $_SESSION['join']['kazoku0'];
$kazoku1 = $_SESSION['join']['kazoku1'];
$kazoku2 = $_SESSION['join']['kazoku2'];
$kazoku3 = $_SESSION['join']['kazoku3'];
$kazoku4 = $_SESSION['join']['kazoku4'];
$pass = $_SESSION['join']['pass'];
$pass2 = $_SESSION['join']['pass2'];
//これはなんですか？detail.phpのhiddenで送られたid
$id = $_SESSION['join']["id"]; //これを追加しましょう🤗

/* 会員登録の手続き以外のアクセスを飛ばす */
if (!isset($_SESSION['join'])) {
    header('Location: shinkitouroku.php');
    exit();
}
 
if (!empty($_POST['check'])) {
    // パスワードを暗号化
    $hash = password_hash($_SESSION['join']['pass2'], PASSWORD_BCRYPT);
 
//データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO php01(id, name, tel, address, birth, mail, line, mokuteki0, mokuteki1, mokuteki2, kazoku0,
kazoku1, kazoku2, kazoku3, kazoku4, pass, pass2, indate )
VALUES(NULL, :a1, :a2 ,:a3, :a4, :a5, :a6,:a7,:a8, :a9 ,:a10, :a11,  :a12, :a13, :a14, :a15, :a16, sysdate())");
$stmt->bindValue(':a1', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $tel, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $address, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a4', $birth, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a5', $mail, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a6', $line, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a7', $mokuteki0, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a8', $mokuteki1, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a9', $mokuteki2, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a10', $kazoku0, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a11', $kazoku1, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a12', $kazoku2, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a13', $kazoku3, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a14', $kazoku4, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a15', $pass, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a16', $pass2, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)

$status = $stmt->execute();

    //４．データ登録処理後
    if($status==false){
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
}else{

  //５．kanryou.phpへリダイレクト
  header("Location: kanryou.php");
  exit;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>入力内容の確認</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/reset.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/header-10.css">
    <link rel="stylesheet" href="styles/form.css"> 
  </head>

    <?php include "smallHeader.html" ?>
    
<body>
<form action="" method="post">
  <input type="hidden" name="check" value="checked">
  <div class="bodyLogocss"><img class="bodyLogo" src="img/naiyounokakunin.png"></div><br><br>
  <?php if (!empty($error) && $error === "error"): ?>
  <p class="">＊会員登録に失敗しました。</p>
  <?php endif ?>

<!-- お名前 -->
<div class="bodyLogocss">
  <p>◎お名前◎</p><br>
  <p> <span class="form-label"><?php echo htmlspecialchars($_SESSION['join']['name'], ENT_QUOTES); ?></span></p><br><br>
</div>
<!-- 電話番号 -->
<div class="bodyLogocss">
  <p>◎お電話番号◎</p><br>
  <p> <span class="form-label"><?php echo htmlspecialchars($_SESSION['join']['tel'], ENT_QUOTES); ?></span></p><br><br>
</div>
<!-- 住所 -->
<div class="bodyLogocss">
  <p>◎住所◎</p><br>
  <p> <span class="form-label"><?php echo htmlspecialchars($_SESSION['join']['address'], ENT_QUOTES); ?></span></p><br><br>
</div>
<!-- 生年月日 -->
<div class="bodyLogocss">
  <p>◎生年月日◎</p><br>
  <p> <span class="form-label"><?php echo htmlspecialchars($_SESSION['join']['birth'], ENT_QUOTES); ?></span></p><br><br>
</div>
<!-- mail -->
<div class="bodyLogocss">
  <p>◎メールアドレス◎</p><br>
  <p> <span class="form-label"><?php echo htmlspecialchars($_SESSION['join']['mail'], ENT_QUOTES); ?></span></p><br><br>
</div>
<!-- LINE ID -->
<div class="bodyLogocss">
  <p>◎LINE ID◎</p><br>
  <p> <span class="form-label"><?php echo htmlspecialchars($_SESSION['join']['line'], ENT_QUOTES); ?></span></p><br><br>
</div>
<!-- ご利用目的 -->
<div class="bodyLogocss">
  <p>◎ご利用目的◎</p><br>
  <p> <span class="form-label"><?php echo htmlspecialchars($_SESSION['join']['mokuteki0'], ENT_QUOTES); ?></span></p>
</div>
<div class="bodyLogocss">
  <p> <span class="form-label"><?php echo htmlspecialchars($_SESSION['join']['mokuteki1'], ENT_QUOTES); ?></span></p>
</div>
<div class="bodyLogocss">
  <p> <span class="form-label"><?php echo htmlspecialchars($_SESSION['join']['mokuteki2'], ENT_QUOTES); ?></span></p><br><br>
</div>
<!-- 同居家族の情報 -->
<div class="bodyLogocss">
  <p>◎同居家族の情報◎</p><br>
  <p> <span class="form-label"><?php echo htmlspecialchars($_SESSION['join']['kazoku0'], ENT_QUOTES); ?></span></p>
</div>
<div class="bodyLogocss">
  <p> <span class="form-label"><?php echo htmlspecialchars($_SESSION['join']['kazoku1'], ENT_QUOTES); ?></span></p>
</div>
<div class="bodyLogocss">
  <p> <span class="form-label"><?php echo htmlspecialchars($_SESSION['join']['kazoku2'], ENT_QUOTES); ?></span></p>
</div>
<div class="bodyLogocss">
  <p> <span class="form-label"><?php echo htmlspecialchars($_SESSION['join']['kazoku3'], ENT_QUOTES); ?></span></p>
</div>
<div class="bodyLogocss">
  <p> <span class="form-label"><?php echo htmlspecialchars($_SESSION['join']['kazoku4'], ENT_QUOTES); ?></span></p><br><br>
</div>
<!-- パスワード -->
<div class="bodyLogocss">
  <p>◎パスワード◎</p><br>
  <p> <span class="form-label"><?php echo htmlspecialchars($_SESSION['join']['pass'], ENT_QUOTES); ?></span></p><br><br>
</div>
<div class="bodyLogocss">
  <p>◎パスワード◎</p><br>
  <p> <span class="form-label"><?php echo htmlspecialchars($_SESSION['join']['pass2'], ENT_QUOTES); ?></span></p><br><br>
</div>
<!-- ボタン -->
<div class="bodyLogocss">
  <input type="submit" value="内容を確定する">
  <input type="button" onclick="history.back()" value="修正する"><br><br><br><br>
</div>
</form>
</div>
<footer id="footer">
  <p>Copyright&copy;2022 maternity-support.</p>
</footer> 

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