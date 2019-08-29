@extends('layouts.app')
@section('content')
<div class="container">
   <a href="/adminhome">Posts</a>
   <edit-post  :post="{{$post}}"></edit-post>
</div>
@endsection

