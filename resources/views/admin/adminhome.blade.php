@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container">
    <li class="categories"><a href="category/create" class="link"> Create categories</a></li>
    <post-list :post-data="{{ json_encode($posts) }}"></post-list>
</div>
@endsection
<style>
    .container {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        margin: 0;
    }
    .categories {
        text-align: center;
        list-style: none;
        text-decoration: underline;
        margin-bottom: 30px;
        font-family: 'Nunito', sans-serif;
    }
</style>
