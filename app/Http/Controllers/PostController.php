<?php

namespace App\Http\Controllers;
use Auth;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Session;
use App\Fixtures;
use App\Gallery;
use Image;
use App\Allcategory;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();
        return view('admin.pages.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    $fixtures=Fixtures::all();
    $allcategory=Allcategory::all();
     return view('admin.pages.posts.create',compact('allcategory','fixtures'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
       
        
        // $this->validate($request,[
        //     'title'=>'required|string',
        //     'title_image'=>'image|mimes:jpeg,bmp,png|size:2000',
        //     'body'=>'required',
        //     'category'=>'required',
        //     'summary'=>'required',
        //     'all_image'=>'image|mimes:jpeg,bmp,png|size:2000'
        // ]);
        // dd($request->all()); 
        $filenameToStore='';
        if($request->hasFile('title_image')){
            $filename=$request->file('title_image')->getClientOriginalName();
            $filenameWithoutExt=pathinfo($filename, PATHINFO_FILENAME);
            $extension=$request->file('title_image')->getClientOriginalExtension();
            $filenameToStore=$filenameWithoutExt.'_'.time().'.'.$extension;
            Image::make($request->file('title_image'))->resize(1920,900)->save(storage_path().'/app/public/upload/'.$filenameToStore);
            // storeAs('public/upload',$filenameToStore);
        }
        $posts=new Post;
        $user=\App\User::whereId(Auth::user()->id)->first(); 
        $category=\App\Allcategory::whereId($request->category)->first();
        $posts->title=$request->title;
        $posts->user_id=Auth::user()->id;
        $posts->title_image=$filenameToStore;
        $posts->body=\Purifier::clean($request->body);
        $posts->summary=\Purifier::clean($request->summary);
        $posts->fixture_id=$request->fixture;

        if($posts->save()){
            // dd($posts->category()->attach($category));
            $posts->category()->attach($category);
                //uploading gallery
                if($request->hasFile('all_image')){
                    foreach($request->file('all_image') as $images){
                    $filename=$images->getClientOriginalName();
                    $filenameWithoutExt=pathinfo($filename, PATHINFO_FILENAME);
                    $extension=$images->getClientOriginalExtension();
                    $filenameToStore=$filenameWithoutExt.'_'.time().'.'.$extension;
                    $images->storeAs('public/upload',$filenameToStore);
                    $gallery=new Gallery;
                    $gallery->file=$filenameToStore;
                    $gallery->text=$filenameWithoutExt;
                    // dd($posts->id);
                    $gallery->post()->associate($posts);
                    $gallery->save();
                    
                    
                }
                
                
            
            Session::flash('success','You have to be successfully added to database');
            return redirect()->back();
            }
            else{
                Session::flash('error','Opps, something went wrong');
                return redirect()->back();
            }
        }else{
            Session::flash('error','Opps, something went wrong');
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($post)
    {
        $post=Post::whereId($post)->first();
        return view('admin.pages.posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($post)
    {
        $post=Post::whereId($post)->first();
        return view('admin.pages.posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$post)
    {
        if($request->hasFile('title_image')){
            $filename=$request->file('title_image')->getClientOriginalName();
            $filenameWithoutExt=pathinfo($filename, PATHINFO_FILENAME);
            $extension=$request->file('title_image')->getClientOriginalExtension();
            $filenameToStore=$filenameWithoutExt.'_'.time().'.'.$extension;
            $request->file('title_image')->storeAs('public/upload',$filenameToStore);
        }
        $post=Post::whereId($post)->first();
        $post->title=$request->title;
        $post->title_image=$filenameToStore;
        $post->user_id=Auth::user()->id;
        $post->body=\Purifier::clean($request->body);
        if($post->save()){
            Session::flash('success','You have to be successfully added to database');
            return redirect()->back();
        }else{
            Session::flash('error','Opps, something went wrong');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($post)
    {
        $post=Post::whereId($post)->first();
        if($post->delete()){
            Session::flash('success','You have to be successfully deleted');
            return redirect()->back();
        }else{
            Session::flash('error','Opps, something went wrong');
            return redirect()->back();
        }
    }
}
