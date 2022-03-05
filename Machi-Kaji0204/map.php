<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>MaMa-Kaji TOP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="styles/reset.min.css" >
    <link rel="stylesheet" href="styles/style.css" >
    <link rel="stylesheet" href="styles/header-10.css" >   
  </head>

  <?php include "SmallHeader.html" ?>
    <body>
        <!-- 動作処理 -->
  <script>
    // 現在地取得処理
    function initMap() {
      // Geolocation APIに対応している
      if (navigator.geolocation) {
        // 現在地を取得
        navigator.geolocation.getCurrentPosition(
          // 取得成功した場合
          function(position) {
            // 緯度・経度を変数に格納
            var mapLatLng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
            // マップオプションを変数に格納
            var mapOptions = {
              zoom : 15,          // 拡大倍率
              center : mapLatLng  // 緯度・経度
            };
            // マップオブジェクト作成
            var map = new google.maps.Map(
              document.getElementById("map"), // マップを表示する要素
              mapOptions         // マップオプション
            );
            //　マップにマーカーを表示する
            var marker = new google.maps.Marker({
              map : map,             // 対象の地図オブジェクト
              position : mapLatLng   // 緯度・経度
              var map;
var marker = [];
var infoWindow = [];
var markerData = [ // マーカーを立てる場所名・緯度・経度
  {
       name: 'TAM 東京',
       lat: 35.6954806,
        lng: 139.76325010000005,
        icon: 'tam.png' // TAM 東京のマーカーだけイメージを変更する
 }, {
        name: '小川町駅',
     lat: 35.6951212,
        lng: 139.76610649999998
 }, {
        name: '淡路町駅',
     lat: 35.69496,
      lng: 139.76746000000003
 }, {
        name: '御茶ノ水駅',
        lat: 35.6993529,
        lng: 139.76526949999993
 }, {
        name: '神保町駅',
     lat: 35.695932,
     lng: 139.75762699999996
 }, {
        name: '新御茶ノ水駅',
       lat: 35.696932,
     lng: 139.76543200000003
 }
];
 
function initMap() {
 // 地図の作成
    var mapLatLng = new google.maps.LatLng({lat: markerData[0]['lat'], lng: markerData[0]['lng']}); // 緯度経度のデータ作成
   map = new google.maps.Map(document.getElementById('sample'), { // #sampleに地図を埋め込む
     center: mapLatLng, // 地図の中心を指定
      zoom: 15 // 地図のズームを指定
   });
 
 // マーカー毎の処理
 for (var i = 0; i < markerData.length; i++) {
        markerLatLng = new google.maps.LatLng({lat: markerData[i]['lat'], lng: markerData[i]['lng']}); // 緯度経度のデータ作成
        marker[i] = new google.maps.Marker({ // マーカーの追加
         position: markerLatLng, // マーカーを立てる位置を指定
            map: map // マーカーを立てる地図を指定
       });
 
     infoWindow[i] = new google.maps.InfoWindow({ // 吹き出しの追加
         content: '<div class="sample">' + markerData[i]['name'] + '</div>' // 吹き出しに表示する内容
       });
 
     markerEvent(i); // マーカーにクリックイベントを追加
 }
 
   marker[0].setOptions({// TAM 東京のマーカーのオプション設定
        icon: {
         url: markerData[0]['icon']// マーカーの画像を変更
       }
   });
}
 
// マーカーにクリックイベントを追加
function markerEvent(i) {
    marker[i].addListener('click', function() { // マーカーをクリックしたとき
      infoWindow[i].open(map, marker[i]); // 吹き出しの表示
  });
}
            });


          },
          // 取得失敗した場合
          function(error) {
            // エラーメッセージを表示
            switch(error.code) {
              case 1: // PERMISSION_DENIED
                alert("位置情報の利用が許可されていません");
                break;
              case 2: // POSITION_UNAVAILABLE
                alert("現在位置が取得できませんでした");
                break;
              case 3: // TIMEOUT
                alert("タイムアウトになりました");
                break;
              default:
                alert("その他のエラー(エラーコード:"+error.code+")");
                break;
            }
          }
        );
      // Geolocation APIに対応していない
      } else {
        alert("この端末では位置情報が取得できません");
      }
    }
  </script>
</head>
<body>
  <h1>サポーターを探す</h1>
  <div id="map" style="width:400px; height:300px"></div>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCH0gDyzwSI1n06uB1E_3wDYCnDf5F-I24&callback=initMap"></script>
      <footer id="footer">
      <p>Copyright&copy;2022 maternity-support.</p>
    </footer> 
  <!--/slider-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="js/header-10.js"></script>
  </body>
</html>
