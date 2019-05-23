@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <p class="quote">{{ $post->title }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p>{{ count($post->likes) }} Likes |
            <a href="{{route('blog.post.like', ['id'=>$post->id]) }}"> Like </a></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <img src="{{ $post->image }}" width="400px" height="300px" />
        </div>
        <div class="col-md-6">
            <p>{{ $post->content }}</p>
        </div>
    </div>
@endsection

