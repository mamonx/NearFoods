<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>食事処の詳細情報</title>
  <link href="{{ url('assets/css/custom.css') }}" rel="stylesheet">
</head>
<body>
{{-- 見た目適当だからあとはよろしこ --}}
@if($shop)
  <div class="demo">
    <h4>{{ $shop['ShopName'] }}</h4>
      <img src="{{ $shop['PictureUrl']['PcLargeImg'] }}" alt="a"/>
    <table class="show-table">
      @foreach($shop as $key => $val)
        @if (is_string($val))
          <tr>
            <th>{{ $key }}</th>
            <td>{{ $val }}</td>
          </tr>
        @endif
      @endforeach
    </table>
      <table class="show-table">
          <tr>
              <th>店舗名</th>
              <td>{{ $shop["ShopName"] }}</td>
          </tr>
          <tr>
              <th>住所</th>
              <td>{{ $shop["ShopAddress"] }}</td>
          </tr>
      </table>
  </div>
@else
  該当する店舗は見つかりませんでした。
@endif
</body>
</html>