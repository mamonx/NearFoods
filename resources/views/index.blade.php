<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>NearFoods | 近くの食事処を簡単に探せる！</title>
  <link href="{{ url('assets/css/ratchet.css') }}" rel="stylesheet">
  <link href="{{ url('assets/css/custom.css') }}" rel="stylesheet">
  <script src="{{ url('assets/js/ratchet.js') }}"></script>
</head>
<body>
<div class="nf-nav">
  <span class="icon icon-bars"></span>
  <span class="title-text">Near&nbsp;Foods</span>
</div>
<div align="center">
  <h2>近場の食事処を</h2>
</div>
<<<<<<< HEAD
<form class="input-group">
    <button class="btn btn-negative btn-block">探す</button>
=======
<form action="{{ url('shops') }}" class="input-group" method="post">
>>>>>>> b242b5b3203a1956d8206bfa0c7db43ce4639549
    <select>
        <option value="on">営業中の食事処のみ表示</option>
        <option value="off">すべての食事処を表示</option>
    </select>
    <select>
        <option value="5">徒歩５分以内</option>
        <option value="10">徒歩１０分以内</option>
    </select>
    <div class="restaurant" align="right">
        食事処の営業状況：
        <span class="open">OPEN</span>
        <span class="close">CLOSE</span>
    </div>
    <div class="frame">
        <input type="text" value="食事処を表示">
        <input type="text" value="営業時間">
        <input type="text" value="所要時間">
    </div>
  <input name="lat" value="35.529274" type="hidden"/>
  <input name="lng" value="139.375055" type="hidden"/>
</form>
</body>
</html>