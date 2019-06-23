{{--use layout for client side--}}
@extends('layouts.master')

{{--insert content that applies main page--}}
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @foreach($posts as $post)
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header text-center">
                            <h1> Today's special:
                                <br><strong>{{$post->title}}</strong>
                                <br>in category <strong>{{$post->category}}</strong></h1>
                        </div>
                        <a href="{{ route('blog.post', ['id' => $post->id]) }}">
                            <img src="{{ $post->image }}" alt="{{$post->title}}" class="card-img-top img-fluid">
                        </a>
                        <div class="card-body text-center">
                            <div class="card-text font-italic text-lowercase">
                                <button class="btn btn-outline-success"><a
                                            href="{{ route('blog.category', ['id' => $post->category]) }}">
                                        Check other receipts in same category</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection