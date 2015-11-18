<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>検索結果</title>
  <link href="{{ url('assets/css/ratchet.css') }}" rel="stylesheet">
  <link href="{{ url('assets/css/custom.css') }}" rel="stylesheet">
</head>
<body>
{{-- あとは見た目とか全般よろおねwww --}}
<header id="ControllerListHeader" class="bar bar-nav">
  <a class="icon icon-refresh pull-right"></a>
  <h1 class="title">検索結果</h1>
</header>
<div class="content">
@if (isset($shops['Shop']))
    <ul class="table-view">
      {{--　わざとかさまし --}}
      @foreach(range(0, 10) as $i)
      @foreach($shops['Shop'] as $shop)
        <li class="table-view-cell media">
          <a class="navigate-right" href="{{ url('/shops/' . $shop['ShopIdFront']) }}">
            <img class="media-object pull-left"
                 src="{{ $shop['PictureUrl']['MbSmallImg'] }}">
            <div class="media-body">
              {{ $shop['ShopName'] }}
              <p>住所:&nbsp;{{ $shop['ShopAddress'] }}</p>
              <p>予算:&nbsp;{{ $shop['BudgetDesc'] }}</p>
              <p>駐車場:&nbsp;{{ $shop['Parking'] }}</p>
            </div>
          </a>
        </li>
      @endforeach
      @endforeach
    </ul>
@else
  最寄りの店舗が見つかりませんでした。
@endif
</div>
</body>
</html>