@extends('layouts.application')
@section('main-content')
パンくずリスト
@include('gyms.searched_heading')
<div class="shop-paginate">    
    {{$items->links()}}
</div>
<div class="shop-list">
    @foreach($items as $item)
    <div class="shop">
        <a href="/gyms/{{$item->id}}">
            <div class="top-info">
                <div class="top-info__name_and_area">
                    <div class="top-info__name_and_area__name">{{$item->name}}</div>
                    <div class="top-info__name_and_area__area">大阪府 / フィットネスクラブ</div>
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
        {{$items->links()}}
    </div>
</div>
@endsection