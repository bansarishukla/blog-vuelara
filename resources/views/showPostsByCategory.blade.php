<html>
    <head>
        <title>show post</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            .description {
                font-size: 20px;
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
            }
            .card {
                width: 70%;
                margin-left: 50px;
                margin-top: 30px;
            }
        </style>
    </head>
    <body>
        <div class="post">
            @if(count($posts) > 0)
                @foreach($posts as $post)
                    <div class="main">
                        <div class="card">
                            <div class="card-header">
                                <h2>{{ $post->name }}</h2>
                            </div>
                            <div class="header-body">
                                {{ str_limit($post->description, 500) }}<a href="{{action('PostController@readMore', $post->id )}}" class="btn btn-primary">Read More</a>
                            </div>
                            <small>Created At: {{ $post->created_at }}</small>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="main">
                    <div class="card">
                        <h1>No Posts Yet</h1>
                    </div>
                </div>
            @endif
        </div>
    </body>
</html>
