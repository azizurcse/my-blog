
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
                <input type="text" name="post" class="form-control" id="pwd">
            </div>
            <div class="form-group">
                <label for="image">Post Image</label>
                <input type="file" name="image" class="form-control" id="pimage">
            </div>

            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
    <div class="col-md-2"></div>
@endsection
