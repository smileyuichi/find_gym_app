<div class="top-main">
    <div class="search-area">
        <h2 class="search-area__title"><span>エリアから探す</span></h2>
        <div class="search-area__area">
            <div class="selected-area">
                <div class="selected-area__name">
                    <span>大阪</span>
                </div>
                <div class="selected-area__store-count">
                    <span>{{$osaka_area}}件</span>
                </div>
            </div>
            <ul class="top-areas">
                <li class="top-area">
                    <a href="/gyms?address=大阪府" class="top-area-link">
                        <div class="top-area-box">
                            <span class="top-area-name">大阪府すべて</span>
                            <span class="top-area-shop-count">{{$osaka_area}}件</span>
                        </div>
                    </a>
                </li>
                <li class="top-area">
                    <a href="/gyms?address=大阪府大阪市" class="top-area-link">
                        <div class="top-area-box">
                            <span class="top-area-name">大阪市内</span>
                            <span class="top-area-shop-count">{{$osaka_city}}件</span>
                        </div>
                    </a>
                </li>
                <li class="top-area">
                    <a href="/gyms?address=大阪府堺市" class="top-area-link">
                        <div class="top-area-box">
                            <span class="top-area-name">堺市内</span>
                            <span class="top-area-shop-count">{{$sakai_city}}件</span>
                        </div>
                    </a>
                </li>

            </ul>
            <ul class="area-list clearfix">
                <li class="all-area">
                    <a href="/gyms?address=大阪府大阪市北区" class="area-link"><span>大阪市北区</span></a>
                </li>
                <li class="all-area">
                    <a href="/gyms?address=大阪府大阪市中央区" class="area-link"><span>大阪市中央区</span></a>
                </li>
                <li class="all-area">
                    <a href="/gyms?address=大阪府吹田市" class="area-link"><span>吹田市</span></a>
                </li>
                <li class="all-area">
                    <a href="/gyms?address=大阪府高槻市" class="area-link"><span>高槻市</span></a>
                </li>
                <li class="all-area">
                    <a href="/gyms?address=大阪府茨木市" class="area-link"><span>茨木市</span></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="search-genre">
        <h2 class="search-genre__title">
            <span>特徴から探す</span>
        </h2>
        <div class="search-genre__area">
            <ul class="top-genres">
                <li class="top-genre">
                    <a href="/gyms?feature=トータルフィットネス" class="top-genre-link">
                        <img src="/images/top-genres/total-fitness.jpg" alt="" class="top-genre__img">
                        <div class="top-genre__name"><span>トータルフィットネス</span></div>
                        <div class="top-genre__store-count"><span>{{$feature_total_fitness}}件</span></div>
                    </a>
                </li>
                <li class="top-genre">
                    <a href="/gyms?feature=24時間営業" class="top-genre-link">
                        <img src="/images/top-genres/24-7.jpg" alt="" class="top-genre__img">
                        <div class="top-genre__name"><span>24時間営業</span></div>
                        <div class="top-genre__store-count"><span>{{$feature_24h}}件</span></div>
                    </a>
                </li>
                <li class="top-genre">
                    <a href="/gyms?feature=スタジオプログラム" class="top-genre-link">
                        <img src="/images/top-genres/studio-program.jpg" alt="" class="top-genre__img">
                        <div class="top-genre__name"><span>スタジオプログラム</span></div>
                        <div class="top-genre__store-count"><span>{{$feature_studio_program}}件</span></div>
                    </a>
                </li>
                <li class="top-genre">
                    <a href="/gyms?feature=プライベートジム" class="top-genre-link">
                        <img src="/images/top-genres/private-gym.jpg" alt="" class="top-genre__img">
                        <div class="top-genre__name"><span>プライベートジム</span></div>
                        <div class="top-genre__store-count"><span>{{$feature_private_gym}}件</span></div>
                    </a>
                </li>
                <li class="top-genre">
                    <a href="/gyms?feature=整骨院併設" class="top-genre-link">
                        <img src="/images/top-genres/clinic.jpg" alt="" class="top-genre__img">
                        <div class="top-genre__name"><span>整骨院併設</span></div>
                        <div class="top-genre__store-count"><span>{{$feature_establish_clinic}}件</span></div>
                    </a>
                </li>
            </ul>
            <ul class="genre-list clearfix">
                <li class="all-genre"><a href="/gyms?feature=トータルフィットネス" class="genre-link"><span>トータルフィットネス</span></a></li>
                <li class="all-genre"><a href="/gyms?feature=24時間営業" class="genre-link"><span>24時間営業</span></a></li>
                <li class="all-genre"><a href="/gyms?feature=スタジオ併設" class="genre-link"><span>スタジオ併設</span></a></li>
                <li class="all-genre"><a href="/gyms?feature=プライベートジム" class="genre-link"><span>プライベートジム</span></a></li>
                <li class="all-genre"><a href="/gyms?feature=整骨院併設" class="genre-link"><span>整骨院併設</span></a></li>
                <li class="all-genre"><a href="/gyms?feature=テニス施設併設" class="genre-link"><span>テニス施設併設</span></a></li>
                <li class="all-genre"><a href="/gyms?feature=ゴルフ施設併設" class="genre-link"><span>ゴルフ施設併設</span></a></li>

            </ul>
        </div>
        <div class="search-genre__all"></div>
    </div>
    <div class="search-brand">
        <h2 class="search-brand__title"><span>企業名から探す</span></h2>
        <div class="search-brand__area">
            <ul class="top-brands">
                <li class="top-brand">
                    <a href="/gyms?name=RIZAP" class="top-brand-link"><img src="/images/brands/rizap.png" alt="" class="top-brand__img"></a>
                </li>
                <li class="top-brand">
                    <a href="/gyms?name=コナミスポーツ" class="top-brand-link"><img src="/images/brands/konami.png" alt="" class="top-brand__img"></a>
                </li>
                <li class="top-brand">
                    <a href="/gyms?name=セントラル" class="top-brand-link"><img src="/images/brands/central.jpg" alt="" class="top-brand__img"></a>
                </li>
                <li class="top-brand">
                    <a href="/gyms?name=ルネサンス" class="top-brand-link"><img src="/images/brands/renaissance.jpg" alt="" class="top-brand__img"></a>
                </li>
                <li class="top-brand">
                    <a href="/gyms?name=ティップネス" class="top-brand-link"><img src="/images/brands/tipness.jpg" alt="" class="top-brand__img"></a>
                </li>
            </ul>
            <ul class="brand-list clearfix">
                <li class="all-brand"><a href="/gyms?name=RIZAP" class="brand-link"><span>RIZAP</span></a></li>
                <li class="all-brand"><a href="/gyms?name=コナミスポーツ" class="brand-link"><span>コナミスポーツ</span></a></li>
                <li class="all-brand"><a href="/gyms?name=セントラル" class="brand-link"><span>セントラルスポーツ</span></a></li>
                <li class="all-brand"><a href="/gyms?name=ルネサンス" class="brand-link"><span>ルネサンス</span></a></li>
                <li class="all-brand"><a href="/gyms?name=ティップネス" class="brand-link"><span>ティップネス</span></a></li>
                <li class="all-brand"><a href="/gyms?name=カーブス" class="brand-link"><span>カーブス</span></a></li>
                <li class="all-brand"><a href="/gyms?name=ホリデイ" class="brand-link"><span>ホリデイ</span></a></li>
                <li class="all-brand"><a href="/gyms?name=東急オアシス" class="brand-link"><span>東急オアシス</span></a></li>
                <li class="all-brand"><a href="/gyms?name=NASスポーツ" class="brand-link"><span>NASスポーツ</span></a></li>
                <li class="all-brand"><a href="/gyms?name=アクトス" class="brand-link"><span>アクトス</span></a></li>
                <li class="all-brand"><a href="/gyms?name=エニタイム" class="brand-link"><span>エニタイムフィットネス</span></a></li>
                <li class="all-brand"><a href="/gyms?name=GOLDGYM" class="brand-link"><span>GOLDGYM</span></a></li>
                <li class="all-brand"><a href="/gyms?name=ジョイフィット" class="brand-link"><span>ジョイフィット</span></a></li>
            </ul>
        </div>
        <div class="search-brand__all"></div>
    </div>
</div>