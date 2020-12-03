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
        <div class="wrapper">
            <div class="header">
                <div class="home-header-content">
                    <div class="home-header-top">
                        <div class="top-app-icon-box">
                            <image id="top-icon"></image>
                        </div>
                        <div class="menu">
                            <ul class="menu-list">
                                <li></li>
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

            </div>
        </div>
    </div>
</body>
</html>
            .home-header-top
            .top-message-box
              %h1 古着屋探しは「古コレ」
            .search-form
              .form-explanation
                %h2 エリア・キーワードから探す
              .search-box
                = search_form_for(@q, url: shops_search_path) do |f|
                  = f.text_field :area_name_cont, placeholder: 'エリア[例：下北沢]', autocomplete: :off, class: 'search-box__content left-content', id: 'area-search-field' 
                  = f.text_field :name_or_outline_or_brands_name_or_genres_name_cont, placeholder: 'キーワード[例：yohji yamamoto]', autocomplete: :off, class: 'search-box__content center-content', id: 'keyword-field'
                  = select_tag :rate_range, options_from_collection_for_select(RateRange.all, :id, :name), { prompt: "評価", class: 'search-box__content right-content', id: 'rate-field'}
                  = f.submit '検 索', class: 'search-box__submit', id: 'search-submit-btn'
            #search-result
              .candidate-list
        .top-wrapper
          = render "tops/search_content"
          = render "tops/side_bar"

        = render 'shared/footer'