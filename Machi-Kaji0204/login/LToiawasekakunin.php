<?php
session_start();
require("../dbconnect.php");

// SESSIONデータ取得
$mokuteki0 =$_SESSION['join']['mokuteki0'];
$mokuteki1 = $_SESSION['join']['mokuteki1'];
$mokuteki2 = $_SESSION['join']['mokuteki2'];
$name =$_SESSION['join']['name'];
$mail = $_SESSION['join']['mail'];
$line = $_SESSION['join']['line'];
$tel = $_SESSION['join']['tel'];
$address = $_SESSION['join']['address'];
$soudan = $_SESSION['join']['soudan'];
//これはなんですか？detail.phpのhiddenで送られたid
$id = $_SESSION['join']["id"]; //これを追加しましょう🤗

/* 会員登録の手続き以外のアクセスを飛ばす */
if (!isset($_SESSION['join'])) {
    header('Location: LToiawase.php');
    exit();
}
if (!empty($_POST['check'])) {
  // パスワードを暗号化
  $hash = password_hash($_SESSION['join']['pass2'], PASSWORD_BCRYPT);

 
//データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO contact(id, mokuteki0, mokuteki1, mokuteki2, name, mail, line, tel, address, soudan, indate )
VALUES(NULL, :a1, :a2 ,:a3, :a4, :a5, :a6,:a7,:a8, :a9, sysdate())");
$stmt->bindValue(':a1', $mokuteki0, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $mokuteki1, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $mokuteki2, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a4', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a5', $mail, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a6', $line, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a7', $tel, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a8', $address, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a9', $soudan, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)

$status = $stmt->execute();

    //４．データ登録処理後
    if($status==false){
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
}else{

  //５．kanryou.phpへリダイレクト
  header("Location: LKanryou.php");
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
  <link rel="stylesheet" href="../styles/reset.min.css">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/form.css"> 
    <link rel="stylesheet" href="../styles/header-10.css" >
  </head>

  <?php include "LSmallHeader.php" ?>
    
<body>
<form action="" method="post">
  <input type="hidden" name="check" value="checked">
  <div class="bodyLogocss"><img class="bodyLogo" src="../img/naiyounokakunin.png"></div><br><br>
  <?php if (!empty($error) && $error === "error"): ?>
  <p class="">＊会員登録に失敗しました。</p>
  <?php endif ?>

<!-- お問い合わせの種類 -->
<div class="bodyLogocss">
  <p>◎お問い合わせの種類◎</p><br>
  <p> <span class="form-label"><?php echo htmlspecialchars($_SESSION['join']['mokuteki0'], ENT_QUOTES); ?></span></p>
</div>
<div class="bodyLogocss">
  <p> <span class="form-label"><?php echo htmlspecialchars($_SESSION['join']['mokuteki1'], ENT_QUOTES); ?></span></p>
</div>
<div class="bodyLogocss">
  <p> <span class="form-label"><?php echo htmlspecialchars($_SESSION['join']['mokuteki2'], ENT_QUOTES); ?></span></p><br><br>
<!-- お名前 -->
<div class="bodyLogocss">
  <p>◎お名前◎</p><br>
  <p> <span class="form-label"><?php echo htmlspecialchars($_SESSION['join']['name'], ENT_QUOTES); ?></span></p><br><br>
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
<!-- ご相談内容 -->
<div class="bodyLogocss">
  <p>◎ご相談内容◎</p><br>
  <p> <span class="form-label"><?php echo htmlspecialchars($_SESSION['join']['soudan'], ENT_QUOTES); ?></span></p><br><br>
</div>
<!-- ボタン -->
<div class="">
  <input type="submit" value="確定する">
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