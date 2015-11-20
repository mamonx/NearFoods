<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>食事処の詳細情報</title>
  <link href="{{ url('assets/css/custom.css') }}" rel="stylesheet">
  <script src="{{ url('assets/js/custom.js') }}"></script>
</head>
<body>
{{-- 見た目適当だからあとはよろしこ --}}
@if($shop)
  <div class="demo">
    <h2>{{ $shop['ShopName'] }}</h2>
      <img src="{{ $shop['PictureUrl']['PcLargeImg'] }}" alt="a"/>
      <form>
          <p style="text-align:right"><input type="button" value="検索結果へ戻る" onClick="back()"></p>
      </form>
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
          <tr>
              <th>最寄り駅</th>
              <td>{{ $shop["StationName"] }}</td>
          </tr>
          <tr>
              <th>都道府県</th>
              <td>{{ $shop["ServiceAreaName"] }}</td>
          </tr>
          <tr>
              <th>ジャンル</th>
              <td>{{ $shop["GenreName"] }}</td>
          </tr>
          <tr>
              <th>料理</th>
              <td>{{ $shop["FoodName"] }}</td>
          </tr>
          <tr>
              <th>予算</th>
              <td>{{ $shop["BudgetDesc"] }}</td>
          </tr>
          <tr>
              <th>平均予算</th>
              <td>{{ $shop["BudgetAverage"] }}</td>
          </tr>
          <tr>
              <th>アクセス</th>
              <td>{{ $shop["Access"] }}</td>
          </tr>
          <tr>
              <th>営業日&nbsp;営業時間</th>
              <td>{{ $shop["Open"] }}</td>
          </tr>
          <tr>
              <th>休み</th>
              <td>{{ $shop["Close"] }}</td>
          </tr>
          <tr>
              <th>コース料理</th>
              <td>{{ $shop["Course"] }}</td>
          </tr>
          <tr>
              <th>飲み放題</th>
              <td>{{ $shop["FreeDrink"] }}</td>
          </tr>
          <tr>
              <th>食べ放題</th>
              <td>{{ $shop["FreeFood"] }}</td>
          </tr>
          <tr>
              <th>個室</th>
              <td>{{ $shop["PrivateRoom"] }}</td>
          </tr>
          <tr>
              <th>掘りごたつ</th>
              <td>{{ $shop["Horigotatsu"] }}</td>
          </tr>
          <tr>
              <th>畳</th>
              <td>{{ $shop["Tatami"] }}</td>
          </tr>
          <tr>
              <th>カード支払い</th>
              <td>{{ $shop["Card"] }}</td>
          </tr>
          <tr>
              <th>喫煙</th>
              <td>{{ $shop["NonSmoking"] }}</td>
          </tr>
          <tr>
              <th>貸切</th>
              <td>{{ $shop["Charter"] }}</td>
          </tr>
          <tr>
              <th>駐車場</th>
              <td>{{ $shop["Parking"] }}</td>
          </tr>
          <tr>
              <th>バリアフリー</th>
              <td>{{ $shop["BarrierFree"] }}</td>
          </tr>
          <tr>
              <th>カラオケ</th>
              <td>{{ $shop["Karaoke"] }}</td>
          </tr>
          <tr>
              <th>ペット</th>
              <td>{{ $shop["Pet"] }}</td>
          </tr>
          <tr>
              <th>お子様</th>
              <td>{{ $shop["Child"] }}</td>
          </tr>
      </table>
  </div>
@else
  該当する店舗は見つかりませんでした。
@endif
</body>
</html>