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
    <section class = "row new-comment">
        <div class = col-md-6 col-md-offset-3>
            <header>
                <h3>Comment this recipe:</h3>
            </header>
            <form action = 'post'>
                <div class="form-group">
                    <textarea
                            class="form-control"
                            name="new-comment"
                            id="new-post"
                            rows="5"
                            placeholder="Write your comment here">
                    </textarea>
                    <button type="submit" class="btn btn-primary">Send!</button>
                </div>
            </form>
        </div>
    </section>
    <section class="row comments">
        <div class = col-md-6 col-md-offset-3>
            <header>
               <h3>Comments:</h3>
            </header>
            <article class="comment">
                <p>
                @foreach($post->comments as $comment)
                {{ $comment->content }}</p>
                <div class="info">

                    {{ $comment->user->name}}
                </div>
                        <div class="additional">
                            <a href="#">Edit</a>
                            <a href="#">Delete</a>
                        </div>
                @endforeach
            </article>
        </div>
    </section>

@endsection

