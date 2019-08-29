@extends('layouts.app')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@section('content')
<div class="container">
    <li class="back"><a href="/adminhome" class="link">Go Back</a></li>
    <categories-list :categories-data="{{ json_encode($categories) }}"></categories-list>
    {{-- <categories-list></categories-list> --}}
</div>
@endsection
<style>
    .back {
        font-size: 30px;
        text-align: center;
        list-style: none;
        text-decoration: underline;
        margin-bottom: 30px;
    }
</style>
