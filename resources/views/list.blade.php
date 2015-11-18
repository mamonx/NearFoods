<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
{{-- あとは見た目とか全般よろおねwww --}}
@if (isset($shops['Shop']))
  @foreach($shops['Shop'] as $shop)
    <div class="demo">
      <h4>{{ $shop['ShopName'] }}</h4>
      <a href="{{ url('/shops/' . $shop['ShopIdFront']) }}">
        <img src="{{ $shop['PictureUrl']['PcMiddleImg'] }}" alt="a"/>
      </a>
      <table>
        <tr>
          <th>住所</th>
          <td>{{ $shop['ShopAddress'] }}</td>
        </tr>
        <tr>
          <th>予算</th>
          <td>{{ $shop['BudgetDesc'] }}</td>
        </tr>
        <tr>
          <th>駐車場</th>
          <td>{{ $shop['Parking'] }}</td>
        </tr>
      </table>
    </div>
    <hr/>
  @endforeach
@else
  最寄りの店舗が見つかりませんでした。
@endif
</body>
</html>