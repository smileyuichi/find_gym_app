<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <title>すぽじむ検索</title>
</head>
<body>
    <div class="home-main">
        <div class="home-wrapper">
            <div class="home-header">
                <div class="home-header-content">
                    <div class="home-header-top">
                        <div class="top-app-icon-box">
                            <image id="top-icon"></image>
                        </div>
                        <div class="menu">
                            <ul class="menu-list">
                                <li class="menu-option">
                                    <a href="">行ったスポーツジム</a>
                                </li>
                                <li class="menu-option">
                                    <a href="">保存済み</a>
                                </li>
                                <li class="menu-option">
                                    <a href="">ログイン</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="top-message-box">
                        <h1>スポーツクラブ探しは「すぽじむ」</h1>
                    </div>
                    <div class="search-form">
                        <div class="form-explanation">
                            <h2>エリア・キーワードから探す</h2>
                        </div>
                        <div class="search-box">
                        </div>
                        <div class="candidate-list">
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-wrapper">
                @include('tops.search_content')
                @include('tops.side_bar')
            </div>
        </div>
    </div>
    @include('shared.footer')
</body>
</html>

