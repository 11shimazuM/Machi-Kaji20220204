<?php
session_start();
$id = $_SESSION['id'];
$kanri_flg = $_SESSION['kanri_flg'];


//１．関数群の読み込み
require_once('../funcs.php');
// 必ずrequire_once('funcs.php');の下に作成したfunctionを記述する
loginCheck();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>MaMa-Kaji TOP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="../styles/reset.min.css" >
    <link rel="stylesheet" href="../styles/style.css" >
    <link rel="stylesheet" href="../styles/suraido.css" > 
    <link rel="stylesheet" href="../styles/header-10.css" >   
  </head>

  <?php include "LSmallHeader.php" ?>
    <body>
    <div class="center">
          <img src="../img/topcenter5.png"><br>
    </div>
      <div>
          <ul class="slider">
            <li class="slider-item slider-item01"></li>
            <li class="slider-item slider-item02"></li>
            <li class="slider-item slider-item03"></li>
            <li class="slider-item slider-item04"></li>
            <li class="slider-item slider-item05"></li>
            <li class="slider-item slider-item06"></li>
          </ul>     
      </div>  
      <div class="center"> <br><br><br><br>
          <img src="../img/mamakajitoha.png"><br><br>
      </div>
          <p class="pComment">
            「ママ」のための家事代行マッチングサービスです！<br>
            その為サポーターもユーザーもママの皆さん♪<br>
            産前産後や育児、家事全ての大変さを分かり合えるママなので<br>
            安心して利用できます。<br>
            お子さんが大きくなってきたママさん。<br>
            隙間時間を活用して子育てまっしぐらのママさんに<br>
            「一休みできる時間」をプレゼントしてみませんか？<br>
          </p>
      <div class="center"> <br><br>
          <img src="../img/onegaidekirukaji.png"><br><br>
      </div>
      <div class="p-housework_list_item">
          <div class="box">
            <div class="Tright">
                <h3 class="p-work_desc_name">-掃除-</h3>
                <p class="p-work_desc_text">おうちの綺麗を保って<br>
                    健やかな毎日を
                </p>
            </div>
              <div class="pict"><img src="../img/souji.jpg" alt=""></div>
          </div>
      </div>
      <div class="p-housework_list_item">
          <div class="box">
              <div class="pict"><img src="../img/ryouri.jpg" alt=""></div>
              <div class="Tleft">
                <h3 class="p-work_desc_name">-料理-</h3>
                <p class="p-work_desc_text">当日分の食事から<br>
                    数日分の<br>
                    作り置きまで<br>
                </p>
              </div>
          </div> 
      </div> 
      <div class="p-housework_list_item">
          <div class="box">
            <div class="Tright">
                <h3 class="p-work_desc_name">-整理収納-</h3>
                <p class="p-work_desc_text">片付けを通して<br>
                    より暮らしやすい<br>
                    お家へ<br>
                </p>
            </div>
              <div class="pict"><img src="../img/seiri.jpg" alt=""></div>
          </div>
      </div> 
        <!-- <select class="pull" name="search_area" id="search_area_pc">
        <option value>エリアから探す</option>
        <option value="札幌市中央区">札幌市中央区</option>
        <option value="札幌市北区">札幌市北区</option>
        <option value="札幌市東区">札幌市東区</option>
        <option value="札幌市白石区">札幌市白石区</option>
        <option value="札幌市厚別区">札幌市厚別区</option>
        <option value="札幌市豊平区">札幌市豊平区</option>
        <option value="札幌市清田区">札幌市清田区</option>
        <option value="札幌市南区">札幌市南区</option>
        <option value="札幌市西区">札幌市西区</option>
      </select> -->
      <footer id="footer">
      <p>Copyright&copy;2022 maternity-support.</p>
    </footer> 
      <!--/slider-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="../js/header-10.js"></script>
    <script src="../js/suraido.js"></script>
  </body>
</html>
