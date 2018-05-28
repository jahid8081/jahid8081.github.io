@include('inc.header')

<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif
</div>

<div class="container">
    <div class="row">
        <form class="navbar-form" role="search" method="GET" action='{{url("/search")}}'>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="search" name="searchtitle">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></buton>
            </div>
        </form>
    </div>
</div>


<div class="container">
    <div class="row">
        <legend>Laravel CRUD Application</legend>
        <div class="row">
            <div class="col-md-6 col-lg-6">
                @if(session('info'))
                    <div class="col-mg-6 alert alert-success">
                        {{session('info')}}
                    </div>
                @endif

                @if(session('info2'))
                    <div class="col-mg-6 alert alert-danger">
                        {{session('info2')}}
                    </div>
                @endif
            </div>
        </div>

        <table class="table table-striped table-hover ">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if(count($articles) > 0)
                    @foreach($articles->all() as $article)
                        <tr>
                            <td>{{ $article->id }}</td>
                            <td>{{ $article->title }}</td>
                            <td>{{ $article->description }}</td>
                            <td>
                                <a href='{{ url("/read/{$article->id}") }}' class="label label-primary">Read</a> |
                                <a href='{{ url("/update/{$article->id}") }}' class="label label-success">Update</a> |
                                <a href='{{ url("/delete/{$article->id}") }}' class="label label-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        {{ $articles->links() }}
    </div>
</div>

@include('inc.footer')