<?php

namespace App\Http\Controllers;

use App\Post;
use App\Like;
use App\Tag;
use App\Comment;
use App\Reklam;
use Auth;
use Gate;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //see the main page
    public function getIndex()
    {
      $posts = Post::orderBy('created_at', 'desc')->paginate(1);
      return view('blog.index', ['posts' => $posts]);
    }

    //see posts divided by categories
    public function getCategory($category)
    {
        $posts = Post::where('category', $category)->paginate(7);
        return view('blog.category', ['posts' => $posts]);
    }

    //see admin main page
    public function getAdminIndex()
    {
        $posts = Post::orderBy('title', 'asc')->get();
        return view('admin.index', ['posts' => $posts]);
    }

    //see one chosen post
    public function getPost($id)
    {
        $post = Post::where('id', $id)->with('likes')->first();
        return view('blog.post', ['post' => $post]);
    }

    //will be used to like posts
    public function getLikePost($id)
    {
        $post = Post::where('id', $id)->first();
        $like = new Like();
        $post->likes()->save($like);
        return redirect()->back();
    }

    public function getAdminCreate()
    {
        $tags = Tag::all();
        return view('admin.create', ['tags'=>$tags]);
    }

    public function getAdminEdit($id)
    {
        $post = Post::find($id);
        $tags = Tag::all();
        return view('admin.edit', ['post' => $post, 'postId' => $id, 'tags' => $tags]);
    }

    //will be used to create posts by admin
    public function postAdminCreate(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:5',
            'content' => 'required|min:10',
            'category' => 'required|min:5'
        ]);

        // $user = Auth::user();
        $post = new Post([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'category'=> $request->input('category')
        ]);
        //  $user->posts()->save($post);
        $post->save();
        $post->tags()->attach($request->input('tags') === null ? [] : $request->input('tags'));
        return redirect()->route('admin.index')->with('info', 'Post created, Title is: ' . $request->input('title'));
    }

    //will be used to create comments
    public function commentCreate(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|2',
        ]);
        // $user = Auth::user();
        $comment = new Comment([
            'content' => $request->input('content'),
        ]);
        //  $user->posts()->save($post);
        $comment->save();
        return redirect()->route('admin.index')->with('info', 'Post created, Title is: ' . $request->input('title'));
    }

    //will be used to edit posts by admin
    public function postAdminUpdate(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:5',
            'content' => 'required|min:10',
            'category' => 'required|min:5'
        ]);
        $post = Post::find($request->input('id'));
        /*if(Gate::denies('manipulate-post', $post)){
            return redirect()->back();
        }
        */
        $post->title=$request->input('title');
        $post->content=$request->input('content');
        $post->category=$request->input('category');
        $post->save();
        $post->tags()->sync($request->input('tags') === null ? [] : $request->input('tags'));
        return redirect()->route('admin.index')->with('info', 'Post edited, new Title is: ' . $request->input('title'));
    }

    //will be used to delete posts by admin
    public function getAdminDelete($id){
        $post = Post::find($id);
        /*
         if(Gate::denies('manipulate-post', $post)){
            return redirect()->back();
        }
        */
        $post->likes()->delete();
        $post->tags()->detach();
        $post->delete();
        return redirect()->route('admin.index')->with('info', 'Post deleted!');
    }
}