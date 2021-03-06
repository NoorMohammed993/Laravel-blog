<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Post;
use App\Tag;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts.index')->with('posts',Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    
    {    
        
        $categories=Category::all();
        $tags=Tag::all();
        
        if( $categories->count() == 0)
        {
            
          
        Session::flash('info','you must have some categories before attempting to submit some post');  
            
        }
        
        
        return view('admin.posts.create')->with("categories",Category::all())->with('tags',$tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::find($id);
        
        $tags=Tag::all();
        
        $categories=Category::all();
        
        return view('admin.posts.edit',compact('post','categories','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            
           'title'       => 'required',
           'content'     => 'required',
           'category_id' =>'required'
            
        ]);
        
        $post=Post::find($id);
        
        if($request->hasFile('featured')){
            
        $featured= $request->featured;
        
        $featured_new_name=time() . $featured->getClientOriginalName();
        
        $featured->move('uploads/posts',$featured_new_name);  
            
        $post->featured='uploads/posts/' .$featured_new_name;
            
        }
        
        
        
        $post->title=$request->title;
        
        $post->content=$request->content;
        
        $post->category_id=$request->category_id;
        
        $post->save();
        
        $post->tags()->sync($request->tags);
        
        Session::flash('success','you Successfully updated post');
        
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::find($id);
        $post->delete();
        Session::flash('success','you Successfully deleted post');
        return redirect()->route('post.index');
    }
    
    
    public function trashed()
    {
        $posts=Post::onlyTrashed()->get();
    
        return view('admin/posts.trashed')->with('posts',$posts);
    }
    
    public function deleteTrashed($id){
        
        $post=Post::withTrashed()->where('id',$id)->first();
        
        $post->forceDelete();
        
        Session::flash('success','you Successfully deleted post');
        return redirect()->route('post.trashed');
    }
    
    
    public function restore($id){
        
        $post=Post::withTrashed()->find($id)->restore();
        
      
        
        Session::flash('success','you Successfully restored post');
        return redirect()->route('post.index');
    }
}
