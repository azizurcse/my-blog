@extends('layout.app')
@section('body')
    @include('layout.nav')

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form class="form-horizontal" action="{{'/blog/'.$item->id}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                {{method_field('PUT')}}
                <div class="form-group">
                    <label for="title">Post Title</label>
                    <input type="text" name="title" value="{{$item->title}}" class="form-control" id="title">
                </div>
                <div class="form-group">
                    <label for="post">Post:</label>
                    <textarea name="post" class="form-control" id="pwd" rows="5">{{$item->post}}</textarea>
                </div>
                <div class="form-group">
                    <label for="image">Post Image</label>
                    <input type="file" name="image" class="form-control" id="pimage">
                </div>

                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            @include('layout.messages.errors')
        </div>
        <div class="col-md-2"></div>
    </div>
@endsection
