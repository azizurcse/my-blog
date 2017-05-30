
@extends('layout.app')

@section('body')

    @include('layout.nav')
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <form class="form-horizontal" action="/blog" method="post" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="form-group">
                <label for="title">Post Title</label>
                <input type="text" name="title" class="form-control" id="title">
            </div>
            <div class="form-group">
                <label for="post">Post:</label>
                <textarea name="post" class="form-control" id="pwd" rows="5"></textarea>
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
@endsection
