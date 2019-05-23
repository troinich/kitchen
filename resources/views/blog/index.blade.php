{{--use layout for client side--}}
@extends('layouts.master')

{{--insert content that applies main page--}}
@section('content')
   {{-- <div class="row">
        <div class="col-md-12">
            <p class="quote">Welcome to the world of tastes!</p>
        </div>
    </div>--}}
    @foreach($posts as $post)
    <div class="row">
        <div class="col-md-12 text-center">
            {{-- <h1 class="post-title">{{ $post['title'] }}</h1>--}}
            <h1 class="post-title">{{ $post->title }}</h1>
            <h6>{{ $post->created_at }}</h6>
            <p style="font-weight: bold">
                @foreach($post->tags as $tag)
                    #{{ $tag->name }}
                @endforeach
            </p>
            <p>{{ $post->content }}</p>
            <p><a href="{{ route('blog.post', ['id' => $post->id]) }}">Read more...</a></p>
        </div>
    </div>
    <hr>
    @endforeach
    <div class="row">
        <div class="col-md-12 text-center">
            {{$posts->links()}}
        </div>
    </div>
@endsection