<html>
    <head>
        <title>Dispaly Post</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            .card {
                width: 70%;
                margin-left: 50px;
                margin-top: 30px;
            }
        </style>
    </head>
    <body>
        <div class="post">
            <div class="card">
                <div class="card-header">
                    {{ $posts->name }}
                </div>
                <div class="card-body">
                    {{ $posts->description }}<hr>
                    <small>Created at: {{ $posts->created_at }}</small>
                </div>
            </div>
        </div>
    </body>
</html>
