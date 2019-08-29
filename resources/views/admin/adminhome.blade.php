@extends('layouts.app')

@section('content')

<div class="container">
    <li class="categories"><a href="category/create" class="link"> Create categories</a></li>
    <post-list :post-data="{{ json_encode($posts) }}"></post-list>
</div>
@endsection
<style>
    .categories {
        font-size: 30px;
        text-align: center;
        list-style: none;
        text-decoration: underline;
        margin-bottom: 30px;
    }
</style>
