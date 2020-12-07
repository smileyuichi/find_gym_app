@extends('layouts.application')
@section('main-content')
<div class="ready-wrapper">
    <table>


        @foreach($items as $item)
        <tr>
            <td>{{$item->name}}</td>

        </tr>
        @endforeach


    </table>
</div>
@endsection