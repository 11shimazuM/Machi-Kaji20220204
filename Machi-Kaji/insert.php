<?php
//入力チェック(受信確認処理追加)
// if(
//   !isset($_POST["name"]) || $_POST["name"]=="" ||
//   !isset($_POST["tel"]) || $_POST["tel"]=="" ||
//   !isset($_POST["address"]) || $_POST["address"]=="" ||
//   !isset($_POST["birth"]) || $_POST["birth"]=="" ||
//   !isset($_POST["mail"]) || $_POST["mail"]=="" ||
//   !isset($_POST["line"]) || $_POST["line"]=="" ||
//   !isset($_POST["mokuteki0"]) || $_POST["mokuteki0"]=="" ||
//   !isset($_POST["mokuteki1"]) || $_POST["mokuteki1"]=="" ||
//   !isset($_POST["mokuteki2"]) || $_POST["mokuteki2"]=="" ||
//   !isset($_POST["kazoku0"]) || $_POST["kazoku0"]=="" ||
//   !isset($_POST["kazoku1"]) || $_POST["kazoku1"]=="" ||
//   !isset($_POST["kazoku2"]) || $_POST["kazoku2"]=="" ||
//   !isset($_POST["kazoku3"]) || $_POST["kazoku3"]=="" ||
//   !isset($_POST["kazoku4"]) || $_POST["kazoku4"]=="" ||
//   !isset($_POST["pass"]) || $_POST["pass"]=="" ||
//   !isset($_POST["pass2"]) || $_POST["pass2"]==""
// ){
//   exit('入力内容に誤りか、足りない項目がございます。恐れ入りますが再度ご入力ください。');
// }


//2. DB接続します(エラー処理追加)
session_start();
try {
  $pdo = new PDO('mysql:dbname=maternitysupport_machi-kaji;charset=utf8;host=mysql1025.db.sakura.ne.jp','maternitysupport','matasapo0001');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}

// ユーザーから受け取った値を変数に入れる
$name = $_SESSION['name'];
$tel = $_SESSION['tel'];
$address = $_SESSION['address'];
$birth = $_SESSION['birth'];
$mail = $_SESSION['mail'];
$line = $_SESSION['line'];
$mokuteki0 = $_SESSION['mokuteki0'];
$mokuteki1 = $_SESSION['mokuteki1'];
$mokuteki2 = $_SESSION['mokuteki2'];
$kazoku0 = $_SESSION['kazoku0'];
$kazoku1 = $_SESSION['kazoku1'];
$kazoku2 = $_SESSION['kazoku2'];
$kazoku3 = $_SESSION['kazoku3'];
$kazoku4 = $_SESSION['kazoku4'];
$pass = $_SESSION['pass'];
$pass2 = $_SESSION['pass2'];


//３．データ登録SQL作成
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
  //５．index.phpへリダイレクト
  header("Location: kanryou.php");
  exit;

}
?>
