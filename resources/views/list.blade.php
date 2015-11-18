<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>検索結果</title>
  <link href="{{ url('assets/css/ratchet.css') }}" rel="stylesheet">
  <link href="{{ url('assets/css/custom.css') }}" rel="stylesheet">
  <script src="{{ url('assets/js/ratchet.js') }}"></script>
</head>
<body>
{{-- あとは見た目とか全般よろおねwww --}}
<div class="nf-nav" align="center">
    <span class="title-result">検索結果</span>
</div>
@if (isset($shops['Shop']))
  @foreach($shops['Shop'] as $shop)
    <div class="demo">
        <ul class="table-view">
            <li class="table-view-cell media">
                <h4>{{ $shop['ShopName'] }}</h4>
                <a class="navigate-right">
                    <a href="{{ url('/shops/' . $shop['ShopIdFront']) }}">
                    <img class="media-object pull-left" src="{{ $shop['PictureUrl']['PcMiddleImg'] }}" alt="a"/>
                    </a>
                    <div class="media-body">
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
                </a>
            </li>
  @endforeach
        </ul>
        </div>
@else
  最寄りの店舗が見つかりませんでした。
@endif
</body>
</html>