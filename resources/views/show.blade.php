<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>show</title>
</head>
<body>
{{-- 見た目適当だからあとはよろしこ --}}
@if($shop)
  <div class="demo">
    <h4>{{ $shop['ShopName'] }}</h4>
      <img src="{{ $shop['PictureUrl']['PcLargeImg'] }}" alt="a"/>
    <table border="1">
      @foreach($shop as $key => $val)
        @if (is_string($val))
          <tr>
            <th>{{ $key }}</th>
            <td>{{ $val }}</td>
          </tr>
        @endif
      @endforeach
    </table>
  </div>
@else
  該当する店舗は見つかりませんでした。
@endif
</body>
</html>