<?php
session_start();
//１．関数群の読み込み
require_once('../funcs.php');
// 必ずrequire_once('funcs.php');の下に作成したfunctionを記述する
loginCheck();

?>

<!DOCTYPE html>
<html lang="en">
<header>
<!-- ↓ハンバーガーメニューここから↓ -->
<div class="hamburger-demo-menubox">
    <input id="hamburger-demo1" type="checkbox" class="input-hidden">
    <label for="hamburger-demo1" class="hamburger-demo-switch hamburger-demo-switch1">
        <span class="hamburger-switch-line1-before"></span>
        <span class="hamburger-switch-line1"></span>
        <span class="hamburger-switch-line1-after"></span>
    </label>
    <p class="LoginP">♫<?= $_SESSION['name'];?>さん♫</p>
    <div style="display: flex;">
            <a href="LIndex.php"><img class="headerSmallLogo" src="../img/machikajismall.png"></a> 
		<div class="hamburger-demo-menuwrap">
			<ul class="hamburger-demo-menulist">
                <li><a href="LSupporter.php">サポーター/一覧</a></li>
                <li><a href="LQandA.php">よくあるご質問</a></li>
                <li><a href="LInformation.php">お知らせ</a></li>
                <li><a href="LToiawase.php">お問い合わせ</a></li>
                <li><a href="logout.php">ログアウト</a></li>
                <li><a href="select.php">管理者画面</a></li>
			</ul>
		</div>
    </div>
		<div class="hamburger-demo-cover"></div>
</div>
<!-- ↑ハンバーガーメニューここまで↑ -->