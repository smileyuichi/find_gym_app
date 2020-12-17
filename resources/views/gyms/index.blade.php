@extends('layouts.application')
@section('main-content')
パンくずリスト
@include('gyms.searched_heading')
<div class="shop-paginate">    
    {{$items->appends(request()->input())->links()}}
</div>
<div class="shop-list">
    {{-- 検索結果0の場合の処理 --}}
    @if ($search_count==0)
    <div class="no-result">
        <span>検索に該当する店舗は登録されていません。</span>
    </div>
    @endif
    {{-- 検索結果0の場合の処理ここまで --}}
    @foreach($items as $item)
    <div class="shop">
        <a href="/gyms/{{$item->id}}">
            <div class="top-info">
                <div class="top-info__name_and_area">
                    <div class="top-info__name_and_area__name">{{$item->name}}</div>
                    <div class="top-info__name_and_area__area">{{$item->area_name}} / 
                        {{-- ジムの特徴を列挙して表示 --}}
                        @foreach($features as $feature)
                        @if ($feature->id == $item->id)
                            {{$feature->feature_name}}
                        @endif
                        @endforeach 
                    </div>
                </div>
                <div class="top-info__action">
                    <div class="action-icon action-icon-left">
                        <i class="fas fa-user-check fa-lg user-count-0"></i>
                    </div>
                    <div class="action-icon">
                        <div class="fas fa-bookmark fa-lg clip-count-0"></div>
                    </div>
                </div>
            </div>
            <div class="bottom-info">
                <div class="bottom-info-left">
                    <div class="bottom-info-left__top-cover">
                        <img src="" class="top-cover-img shop-img">
                    </div>
                </div>
                <div class="bottom-info-right">
                    <div class="bottom-info-right__overview">
                        {{$item->outline}}
                    </div>
                    <div class="bottom-info-right__rating">
                        <div class="star-rating" id="star-rate-40"></div>
                        <div class="shop-rating">
                            4.0
                        </div>
                        <div class="shop-count"><i class='fas fa-comment-dots'></i>1件</div>
                        <div class='shop-count'><i class='fas fa-bookmark fa-lg'></i>0件</div>
                    </div>
                    <div class="bottom-info-right__top-wom">
                        <div class="wom-info">
                            <div class="wom-info__title">
                                ヴィンテージの質良し
                            </div>
                            <div class="wom-info__user">
                                test user
                            </div>
                        </div>
                        <div class="wom-content">
                            置いてある商品の質はどれもよかったです！欲を言えばもう少しお手頃価格だとありがたい…笑
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    @endforeach
    <div class="shop-paginate">    
        {{$items->appends(request()->input())->links()}}
    </div>
</div>
@endsection