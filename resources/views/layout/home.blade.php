@extends('layout.app')

@section('body')

    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">

                        <a class="navbar-brand" href="#">Blog</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="blog/create">Add Post</a></li>
                            <li><a href="/blog">View Post</a></li>

                        </ul>

                        <ul class="nav navbar-nav navbar-right">

                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            @foreach($datas as $data)
                <li class="list-group-item">
                    <a href="{{'/insertview/'.$data->id}}"> {{$data->title}}</a>
                    <span class="pull-right">{{$data->created_at->diffForHumans()}}</span>
                </li>
            @endforeach
        </div>
        <div class="col-md-4"></div>
    </div>

@endsection
