@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
               {{--<img src="{{ asset ('storage/soup.jpg') }}" class="card-img-to img-fluid">--}}
                <img src="{{ $post->image }}" alt="{{$post->title}}" class="card-img-top img-fluid">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ $post->title }}</h3>
                        <p class="card-text">{{ $post->content }}</p>
                        <p class="card-text">{{ count($post->likes) }} Likes |
                            <a href="{{route('blog.post.like', ['id'=>$post->id]) }}"> Like </a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-3">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <h3 class="text-primary">Comment this recipe:
                </h3>
                <form action='post'>
                    <div class="form-group">
                        <textarea
                                class="form-control"
                                name="new-comment"
                                placeholder="Write your comment here"
                                id="new-post"
                                rows="5">
                        </textarea>
                        <button type="submit" class="btn btn-info my-2">Send!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <h3 class="text-primary">Comments:
                </h3>
                @foreach($post->comments as $comment)
                    <article class="border-left border-info pl-2">
                        {{ $comment->content }}
                        <br>
                        <small class="font-italic my-2 small">{{ $comment->user->name}} on {{ $comment->created_at}}
                        </small>
                    </article>
                    <br>
                @endforeach
            </div>
        </div>
    </div>
    {{--<img src="{{ asset ('storage/vegan.jpg') }}"/>--}}
@endsection

