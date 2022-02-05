<?php
//入力チェック(受信確認処理追加)
if(
  !isset($_POST["name"]) || $_POST["name"]=="" ||
  !isset($_POST["mail"]) || $_POST["mail"]=="" ||
  !isset($_POST["line"]) || $_POST["line"]=="" ||
  !isset($_POST["tel"]) || $_POST["tel"]=="" ||
  !isset($_POST["address"]) || $_POST["address"]=="" ||
  !isset($_POST["soudan"]) || $_POST["soudan"]==""
){
  exit('入力内容に誤りか、足りない項目がございます。恐れ入りますが再度ご入力ください。');
}


//1. POSTデータ取得
$name = $_POST['name'];
$mail = $_POST['mail'];
$line = $_POST['line'];
$tel = $_POST['tel'];
$address = $_POST['address'];
$soudan = $_POST['soudan'];

//2. DB接続します(エラー処理追加)
try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}



//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO php01(id, name, mail, line, tel, address, soudan, indate)
VALUES(NULL, :a1, :a2 ,:a3, :a4, :a5, :a6, sysdate())");
$stmt->bindValue(':a1', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $mail, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $line, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a4', $tel, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a5', $address, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a6', $soudan, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);

}else{
  //５．index.phpへリダイレクト
  header("Location: kanryou.html");
  exit;

}
?>
