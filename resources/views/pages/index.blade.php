
@extends('layouts.app')
@section('content')

        {!! $title !!}
        
        <p>index page </p>
        @if( count($list) > 0)
            <ul class='list-group'>
            @foreach($list as $ele)
            <li class="list-group-item">{{$ele}}</li>
            @endforeach
            </ul>
        @endif
@endsection