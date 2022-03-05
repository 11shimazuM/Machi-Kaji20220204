<?php
session_start();
$kanri_flg = $_SESSION['kanri_flg'];

//１．関数群の読み込み
require_once('../funcs.php');
// 必ずrequire_once('funcs.php');の下に作成したfunctionを記述する
loginCheck();

?>

<!DOCTYPE html>
<html lang="en">
<header>
    <div class="site-header__bottom">
        <div class="wrapper site-header__wrapper">

        <nav class="nav">
            <button class="nav__toggle" aria-expanded="false" type="button">
                menu
            </button>
            <p class="LoginP">♫<?= $_SESSION['name'];?>さん♫</p>
            <div style="display: flex;">
                <a href="LIndex.php"><img class="headerSmallLogo" src="../img/machikajismall.png"></a> 
                <div>
                    <ul class="nav__wrapper">
                        <li class="nav__item"><a href="LSupporter.php">サポーター/一覧</a></li>
                        <li class="nav__item"><a href="LQandA.php">よくあるご質問</a></li>
                        <li class="nav__item"><a href="LInformation.php">お知らせ</a></li>
                        <li class="nav__item"><a href="LToiawase.php">お問い合わせ</a></li>
                        <li class="nav__item"><a href="logout.php">ログアウト</a></li>
                        <li class="nav__item"><a href="../select.php">管理画面</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        </div>
    </div>
</header>