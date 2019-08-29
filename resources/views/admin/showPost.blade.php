@extends('layouts.app')
@section('content')
    <div class="main">
        <div class="post">
            @foreach($posts as $post)
            <div class="card">
                <h2>{{ $post->name }}</h2><hr>
                <h4>{{ $post->description }}</h4>
                <small>Created At: {{ $post->created_at }}</small>
            </div>
            <br>
            @endforeach
        </div>
        <div class="category">
            <div class="card">
                <h2>Categories</h2>
                @foreach($categories as $category)
                    <a class="category_style" href="#">{{ $category->category }}</a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
<style>
    .main {
        display: flex;
    }
    .post {
        width: 70%;
        margin-left: 50px;
    }
    .category {
        width: 20%;
        margin-left: 40px;
    }
    .category_style {
        color: #D55;
        margin-left: 20px;
        margin-top: 20px;
    }
</style>
