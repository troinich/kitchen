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
                <form method="post" action="{{ route('comment.add') }}">
                    <div class="form-group">
                        <textarea
                                class="form-control"
                                name="comment_body"
                                placeholder="Write your comment here"
                                rows="5">
                        </textarea>
                        <input type="hidden" name="post_id" value="{{ $post->id }}"/>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Add Comment"/>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
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

