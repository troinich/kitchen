{{--use layout for client side--}}
@extends('layouts.master')

{{--insert content that applies main page--}}
@section('content')
    <div class="container">
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-4">
                    <div class="card">
                        <a href="{{ route('blog.post', ['id' => $post->id]) }}">
                            <img src="{{ $post->image }}" alt="{{$post->title}}" class="card-img-top img-fluid">
                        </a>
                        <div class="card-body">
                            <div class="card-title font-weight-bold">{{ $post->title }}</div>
                            <div class="card-text font-italic text-lowercase">
                                @foreach($post->tags as $tag)
                                    #{{ $tag->name }}
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="row justify-content-center">
        <h4>{{$posts->links()}}</h4>
    </div>
@endsection