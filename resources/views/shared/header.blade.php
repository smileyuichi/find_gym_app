<div class="header">
    <div class="header__border">
        <div class="header-wrapper">
            <div class="header-wrapper__top">
                <div class="page-name"></div>
                <div class="menu">
                    {{-- ログインユーザー --}}
                    <ul class="menu-list">
                        {{-- 管理者ユーザー --}}
                        <li class="menu-option"><a href="">新規店舗登録</a></li>
                        {{-- 管理者ここまで --}}
                        <li class="menu-option"><a href="">行ったお店</a></li>
                        <li class="menu-option"><a href="">保存済み</a></li>
                        <li class="menu-option"><a href="">マイページ</a></li>
                    </ul>
                    <div class="user-nav js-user-nav">
                        <ul class="user-nav-popup">
                            <li class="user-nav-option"><a href="" class="option-link"><span class="option-link-name">設定</span></a></li>
                            <li class="user-nav-option"><a href="" class="option-link"><span class="option-link-name">ログアウト</span></a></li>
                        </ul>
                    </div>
                    {{-- ログインユーザーここまで --}}
                    {{-- 未登録ユーザー --}}
                    <ul class="menu-list">
                        <li class="menu-option"><a href="">行ったお店</a></li>
                        <li class="menu-option"><a href="">保存済み</a></li>
                        <li class="menu-option"><a href="">ログイン</a></li>
                    </ul>
                    {{-- 未登録ユーザーここまで --}}
                </div>
            </div>
            <div class="header-wrapper__bottom">
                <div class="search-form">
                    <div id="app-icon-box">
                        <a href=""><img src="" alt="" id="header-icon"></a>
                    </div>
                    <div class="search-box">
                        <form action="">
                            <div class="search-container">
                                <input type="text" placeholder='エリア[例：下北沢]' class="search-content search-container__area" id="area-search-field-hd">
                                <input type="text" placeholder='キーワード[例：yohji yamamoto]' class="search-content search-container__keyword" id="keyword-field-hd">
                                <select name="" id="rate-field-hd"　class="search-content hd_search_rate"><option value="">評価</option></select>
                                <button type="submit" class="search-container__submit" id="search-submit-btn-hd">%i.fas.fa-search.fa-2x</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="search-result-hd">
            <div class="candidate-list"></div>
        </div>
    </div>
</div>
.header
  .header__border
    .header-wrapper
      .header-wrapper__top
        .page-name
        .menu
          -if user_signed_in?
            %ul.menu-list
              -if current_user.admin?
                %li.menu-option
                  = link_to '新規店舗登録', new_shop_path
              %li.menu-option
                = link_to '行ったお店', user_histories_path(current_user)
              %li.menu-option
                = link_to '保存済み', user_clips_path(current_user)
              %li.menu-option
                = link_to 'マイページ', user_path(current_user)
            .user-nav.js-user-nav
              = user_icon_present?(current_user)
              %ul.user-nav-popup
                %li.user-nav-option
                  = link_to(edit_user_registration_path, class: 'option-link') do
                    %span.option-link-name 設定
                %li.user-nav-option
                  = link_to(destroy_user_session_path, method: :delete, class: 'option-link') do
                    %span.option-link-name ログアウト
          - else
            %ul.menu-list
              %li.menu-option
                = link_to '行ったお店', new_user_session_path
              %li.menu-option
                = link_to '保存済み', new_user_session_path
              %li.menu-option
                = link_to 'ログイン', new_user_session_path
