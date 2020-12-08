<!DOCTYPE html>
<html lang="ja">
    {{-- header読み込み --}}
    @include('layouts.header')
    <body>
        {{-- ページのheader読み込み --}}
        @include('shared.header')
        <div class="main">
            <div class="wrapper">
                
                {{-- コンテンツを適宜当てはめる --}}
                @section('main-content')
                @show
            </div>
        </div>
        {{-- ページのfooter読み込み --}}
        @include('shared.footer')
    </body>
</html>