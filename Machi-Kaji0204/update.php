<?php
//PHP:コード記述/修正の流れ
//1. insert.phpの処理をマルっとコピー。

//   POSTデータ受信 → DB接続 → SQL実行 → 前ページへ戻る

//2. $id = POST["id"]を追加

//3. SQL修正
//   "UPDATE テーブル名 SET 変更したいカラムを並べる WHERE 条件"
//   bindValueにも「id」の項目を追加
//4. header関数"Location"を「select.php」に変更


//1. POSTデータ取得
$name = $_POST['name'];
$tel = $_POST['tel'];
$address = $_POST['address'];
$birth = $_POST['birth'];
$mail = $_POST['mail'];
$line = $_POST['line'];
$mokuteki0 = $_POST['mokuteki0'];
$mokuteki1 = $_POST['mokuteki1'];
$mokuteki2 = $_POST['mokuteki2'];
$kazoku0 = $_POST['kazoku0'];
$kazoku1 = $_POST['kazoku1'];
$kazoku2 = $_POST['kazoku2'];
$kazoku3 = $_POST['kazoku3'];
$kazoku4 = $_POST['kazoku4'];
$pass = $_POST['pass'];
$pass2 = $_POST['pass2'];
$kanri_flg = $_POST['kanri_flg'];
//これはなんですか？detail.phpのhiddenで送られたid
$id = $_POST["id"]; //これを追加しましょう🤗

//2. DB接続します
// function.phpに記述したものを書きますよ🤗↓
// これが一番最初に書く、呼び出したい時！🤗
require_once('funcs.php');
$pdo = db_conn();


//３．データ更新SQL作成
// $stmt = $pdo->prepare("INSERT INTO gs_an_table(name,email,age,content,indate)VALUES(:name,:email,:age,:content,sysdate())");
$stmt = $pdo->prepare( 'UPDATE php01 SET name = :name, tel = :tel, address = :address, birth = :birth, mail = :mail, line = :line, mokuteki0 = :mokuteki0, mokuteki1 = :mokuteki1, 
mokuteki2 = :mokuteki2, kazoku0 = :kazoku0, kazoku1 = :kazoku1, kazoku2 = :kazoku2, kazoku3 = :kazoku3, kazoku4 = :kazoku4, pass = :pass, pass2 = :pass2, kanri_flg = :kanri_flg, indate = sysdate() WHERE id = :id;' );

// 数値の場合 PDO::PARAM_INT
// 文字の場合 PDO::PARAM_STR
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':tel', $email, PDO::PARAM_STR);
$stmt->bindValue(':address', $age, PDO::PARAM_STR);
$stmt->bindValue(':birth', $content, PDO::PARAM_STR);
$stmt->bindValue(':mail', $name, PDO::PARAM_STR);
$stmt->bindValue(':line', $email, PDO::PARAM_STR);
$stmt->bindValue(':mokuteki0', $age, PDO::PARAM_STR);
$stmt->bindValue(':mokuteki1', $content, PDO::PARAM_STR);
$stmt->bindValue(':mokuteki2', $name, PDO::PARAM_STR);
$stmt->bindValue(':kazoku0', $email, PDO::PARAM_STR);
$stmt->bindValue(':kazoku1', $age, PDO::PARAM_STR);
$stmt->bindValue(':kazoku2', $content, PDO::PARAM_STR);
$stmt->bindValue(':kazoku3', $name, PDO::PARAM_STR);
$stmt->bindValue(':kazoku4', $email, PDO::PARAM_STR);
$stmt->bindValue(':pass', $age, PDO::PARAM_STR);
$stmt->bindValue(':pass2', $content, PDO::PARAM_STR);
$stmt->bindValue(':kanri_flg', $kanri_flg, PDO::PARAM_INT);

// hiddenで受け取ったidをbindValueを用いて「安全かチェック」をする＝SQLインジェクション対策
$stmt->bindValue(':id', $id, PDO::PARAM_INT); //数値 なぜ？DBの設定でidを登録するときにINTにしているから🤗
$status = $stmt->execute(); //実行

//４．データ登録処理後
if ($status === false) {
    sql_error($stmt);
} else {
    redirect('select.php');
}