<?php

session_start();
$kanri_flg = $_SESSION['kanri_flg'];


require_once('funcs.php');
// DB接続ができます
$pdo = db_conn();

/**
 * １．PHP
 * [ここでやりたいこと]
 * まず、クエリパラメータの確認 = GETで取得している内容を確認する
 * イメージは、select.phpで取得しているデータを一つだけ取得できるようにする。
 * →select.phpのPHP<?php ?>の中身をコピー、貼り付け
 * ※SQLとデータ取得の箇所を修正します。
 */
$id = $_GET["id"];

// SQLを準備する記述を書きます
$stmt = $pdo->prepare('SELECT * FROM php01 WHERE id=:id;');

// SQLが安全かチェックする
$stmt->bindValue(':id',$id,PDO::PARAM_INT);

// SQLを実行
$status = $stmt->execute(); //　成功　？　失敗

$view = '';

if ($status === false) {
    sql_error($status); //func.phpに記述しているエラーの共通以下を活用している
} else {
    $result = $stmt->fetch();
}

?>
<!--
２．HTML
以下にindex.phpのHTMLをまるっと貼り付ける！
(入力項目は「登録/更新」はほぼ同じになるから)
※form要素 input type="hidden" name="id" を１項目追加（非表示項目）
※form要素 action="update.php"に変更
※input要素 value="ここに変数埋め込み"
-->
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ詳細</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
            </div>
        </nav>
    </header>

    <!-- method, action, 各inputのnameを確認してください。  -->
    <form method="POST" action="update.php">
        <div class="jumbotron">
            <fieldset>
                <legend>ユーザー情報</legend>
                <label>名前：<input type="text" name="name" value="<?= $result['name'] ?>"></label><br>
                <label>お電話番号<input type="text" name="tel" value="<?= $result['tel']?>"></label><br>
                <label>住所<input type="text" name="address" value="<?= $result['address']?>"></label><br>
                <label>生年月日<input type="text" name="birth" value="<?= $result['birth'] ?>"></label><br>
                <label>mail<input type="text" name="mail" value="<?= $result['mail']?>"></label><br>
                <label>LINE ID<input type="text" name="line" value="<?= $result['line']?>"></label><br>
                <label>ご利用目的<input type="text" name="mokuteki0" value="<?= $result['mokuteki0'] ?>"></label><br>
                <label>ご利用目的<input type="text" name="mokuteki1" value="<?= $result['mokuteki1']?>"></label><br>
                <label>ご利用目的<input type="text" name="mokuteki2" value="<?= $result['mokuteki2']?>"></label><br>
                <label>同居家族の情報<input type="text" name="kazoku0" value="<?= $result['kazoku0'] ?>"></label><br>
                <label>同居家族の情報<input type="text" name="kazoku1" value="<?= $result['kazoku1']?>"></label><br>
                <label>同居家族の情報<input type="text" name="kazoku2" value="<?= $result['kazoku2']?>"></label><br>
                <label>同居家族の情報<input type="text" name="kazoku3" value="<?= $result['kazoku3'] ?>"></label><br>
                <label>同居家族の情報<input type="text" name="kazoku4" value="<?= $result['kazoku4']?>"></label><br>
                <label>パスワード<input type="text" name="pass" value="<?= $result['pass']?>"></label><br>
                <label>パスワード<input type="text" name="pass2" value="<?= $result['pass2']?>"></label><br>
                <label>パスワード<input type="text" name="pass2" value="<?= $result['pass2']?>"></label><br>
                <input type="hidden" name="id" value="<?= $result["id"]?>">
                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>
</body>

</html>
