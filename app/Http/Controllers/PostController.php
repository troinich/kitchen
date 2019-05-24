<?php

namespace App\Http\Controllers;

use App\Post;
use App\Like;
use App\Tag;
use Auth;
use Gate;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getIndex()
    {
      $posts = Post::orderBy('created_at', 'desc')->paginate(1);
      return view('blog.index', ['posts' => $posts]);
    }

    public function getCategory($category)
    {
        $posts = Post::where('category', $category)->paginate(7);
        return view('blog.category', ['posts' => $posts]);
    }
    public function getAdminIndex()
    {
        $posts = Post::orderBy('title', 'asc')->get();
        return view('admin.index', ['posts' => $posts]);
    }

    public function getPost($id)
    {
        $post = Post::where('id', $id)->with('likes')->first();
        return view('blog.post', ['post' => $post]);
    }
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
    //    $post->addPost($session, $request->input('title'), $request->input('content'));
        return redirect()->route('admin.index')->with('info', 'Post created, Title is: ' . $request->input('title'));
    }

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
        $post->save();
        $post->tags()->attach($request->input('tags') === null ? [] : $request->input('tags'));
        //    $post->addPost($session, $request->input('title'), $request->input('content'));
        return redirect()->route('admin.index')->with('info', 'Post created, Title is: ' . $request->input('title'));
    }




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
