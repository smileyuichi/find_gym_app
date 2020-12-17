@extends('layouts.application')
@section('main-content')
パンくずリスト
<div class="shop-wrapper">
    <div class="modal-wrapper">

    </div>
    <div class="shop-header">
        <div class="info-wrap">
            <div class="shop-controller">
                <div class="shop-name">{{$gym->name}}</div>
            </div>
            <div class="shop-top-info">
                <div class="shop-top-info__rate">
                    <div class="star-rating" id="star-rate-40" title="4.0">
                        <img src="" alt="">
                        &nbsp;
                        <img src="" alt="">
                        &nbsp;
                        <img src="" alt="">
                        &nbsp;
                        <img src="" alt="">
                        &nbsp;
                        <img src="" alt="">
                        <input type="hidden" name="score" value="4" readonly>
                    </div>
                    <div class="shop-rating">{{$test}}</div>
                </div>
                <div class="shop-top-info__woms">
                    <a href="/gyms/{{$gym->id}}/woms">
                        <i class="fas fa-comment-dots"></i>1件
                    </a>
                </div>
                <div class="shop-top-info__bookmarks">
                    <i class="fas fa-bookmark fa-lg"></i>0件
                </div>
            </div>
            <div class="shop-bottom-info">
                <span>エリア：</span>
                <a href="/gyms/?address={{$area->area_name}}" class="shop-bottom-info-show">{{$area->area_name}}</a>
                <span>ジャンル：</span>
                <div class="shop-genre">
                    <ul class="genre-list">
                        <li>
                            @foreach ($features as $feature)
                            <a href="/gyms/?feature={{$feature->feature_name}}" class="shop-bottom-info-show">{{$feature->feature_name}}</a>
                            @endforeach
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="action-wrap">
            <div class="action-wrap__app">
                <div class="action-btn wom-post-btn" id="woms-count-1">
                    <a href="/gyms/{{$gym->id}}/woms/new" class="action-link">
                        <i class="fas fa-user-check fa-lg"></i>
                        <span>1</span>
                        <span class="action-name">行った</span>
                    </a>
                </div>
                <div class="action-btn bookmark-btn" id="clip-count-0">
                    <a href="" class="action-link" id="clip-post" rel="nofollow">
                        <i class="fas fa-bookmark fa-lg"></i>
                        <span class="action-name">保存</span>
                        <input type="hidden" class="clip-path" name="clip-path" value="2">
                        <input type="hidden" class="shop-id" name="shop-id" value="40">
                    </a>
                </div>
            </div>
            <div class="action-wrap__share">
                <div class="action-wrap__share__btn" id="facebook-share">
                    <a href="" rel="nofollow" target="_blank"><i class="fab fa-facebook-square fa-lg"></i></a>
                </div>
                <div class="action-wrap__share__btn" id="twitter-share">
                    <a href="" rel="nofollow" target="_blank"><i class="fab fa-twitter-square fa-lg"></i></a>
                </div>
                <div class="action-wrap__share__btn" id="line-share">
                    <a href="" rel="nofollow" target="_blank"><i class="fab fa-line fa-lg"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="shop-body">
        <ul class="shop-menu-bar">
            <li class="shop-menu" id="selected-menu">
                <a href="/gyms/{{$gym->id}}" class="shop-menu-link">
                    <span class="shop-menu-name">店舗トップ</span>
                </a>
            </li>
            <li class="shop-menu">
                <a href="/gyms/{{$gym->id}}/woms" class="shop-menu-link">
                    <span class="shop-menu-name">口コミ</span>
                </a>
            </li>
            <li class="shop-menu">
                <a href="/gyms/{{$gym->id}}/map" class="shop-menu-link">
                    <span class="shop-menu-name">地図</span>
                </a>
            </li>
        </ul>
        <div class="shop-content">
            <div class="shop-content__top">
                <img src="top-cover-img shop-img" alt="">
                <div class="shop-outline">{{$gym->outline}}</div>
            </div>
        </div>
    </div>
</div>
@endsection