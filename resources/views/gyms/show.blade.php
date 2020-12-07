@extends('layouts.application')
@section('main-content')
<div class="ready-wrapper">
    <table>
        @foreach ($items as $item)
            <tr><th>id:</th><td>{{$item->id}}</td></tr>
            <tr><th>name:</th><td>{{$item->name}}</td></tr>
            <tr><th>outline:</th><td>{{$item->outline}}</td></tr>
        @endforeach

    </table>
</div>
@endsection