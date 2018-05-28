@include('inc.header')

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
        <legend>Your search result for </legend>
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