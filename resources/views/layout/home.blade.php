@extends('layout.app')

@section('body')

    @include('layout.nav')
    @if(session()->has('message'))
        <h1 class="alert alert-success">{{session()->get('message')}}</h1>
    @endif
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <br><br>

            <h1>Insert Your Post</h1>
            <ul class="list-group col-lg-9">
                @foreach($datas as $data)
                    <li class="list-group-item">
                        <a href="{{'/blog/'.$data->id}}"> {{$data->title}}</a>
                        <span class="pull-right">{{$data->created_at->diffForHumans()}}</span>
                    </li>
                @endforeach
            </ul>

            <ul class="list-group col-lg-3">
                @foreach($datas as $data)
                    <li class="list-group-item">
                        <a href="{{'/blog/'.$data->id.'/edit'}}">Edit</a>
                        <form class="form-group pull-right" action="{{'/blog/'.$data->id}}" method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button type="submit" style="border: none;">delete</button>
                        </form>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection
