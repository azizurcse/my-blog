@extends('layout.app')

@section('body')
    @include('layout.nav')
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="thumbnail">

                    <img src="{{$item->image}}" width="100" height="100">
                    <div class="caption">
                        <h3>{{$item->title}}</h3>
                        <p>{{$item->post}}</p>
                    </div>
                <a href="/blog">back</a>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
@endsection