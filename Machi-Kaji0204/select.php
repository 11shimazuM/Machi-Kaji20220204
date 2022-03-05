<?php

session_start();
$id = $_SESSION['id'];
$kanri_flg = $_SESSION['kanri_flg'];

require_once('funcs.php');
loginCheck();


// 管理者じゃなければログインページに遷移
if ($kanri_flg == 0 ){
    redirect('login.php');
}

$pdo = db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare('SELECT * FROM php01');
$status = $stmt->execute();

//３．データ表示
$view = '';
if ($status === false) {
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        //GETデータ送信リンク作成
        // <a>で囲う。
        $view .= '<p class="box">';
        $view .= '<a href="detail.php?id='. $result["id"].'">';
        $view .= $result['indate'] . '：' . $result['name']. '：' . $result['tel']. '：' . $result['address']
        . '：' . $result['birth']. '：' . $result['mail']. '：' . $result['line']. '：' . $result['mokuteki0'];
        $view .= '</a>';
        $view .= '<a href="delete.php?id=' . $result['id'] . '">';//追記
        $view .= '  [削除]';//追記
        $view .= '</a>';//追記
        $view .= '</p>';
    }
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ユーザー情報</title>
    <link rel="stylesheet" href="css/range.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body id="main">
    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="shinkitouroku.php">データ登録</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <div>
        <div class="container jumbotron">
            <a href="detail.php"></a>
            <?= $view ?>
        </div>
    </div>
    <!-- Main[End] -->

</body>

</html>
