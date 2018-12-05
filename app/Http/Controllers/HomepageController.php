<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Post;
use App\Fixtures;
class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts=Post::whereId(3)->first();
        $posts=Post::orderBy('created_at','desc')->take(4)->get();
        $postss=Post::where('created_at','<=',Carbon::today()->subDays(7))->orderBy('created_at','desc')->get();
        // dd($postss);
        // dd($posts);
        $fixturess=Fixtures::where('date','>=',Carbon::now())->take(6)->get();
        $fixtures=Fixtures::where('home_score','!=',null)->orderBy('date','desc')->first();
        // ->where('date','<=',Carbon::now())
        $nextmatch=Fixtures::where('date','>=',Carbon::now())->first();
        // dd($fixtures);
        return view('pages.pages.index',compact('posts','fixtures','nextmatch','fixturess','postss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function details()
    {
        $posts=Post::orderBy('created_at','desc')->take(4)->get();
        $postss=Post::where('created_at','<=',Carbon::today()->subDays(7))->orderBy('created_at','desc')->get();
        // dd($postss);
        // dd($posts);
        $fixturess=Fixtures::where('date','>=',Carbon::now())->take(6)->get();
        $fixtures=Fixtures::where('home_score','!=',null)->orderBy('date','desc')->first();
        // ->where('date','<=',Carbon::now())
        $nextmatch=Fixtures::where('date','>=',Carbon::now())->first();
        // dd($fixtures);
        return view('pages.pages.news-detail',compact('posts','fixtures','nextmatch','fixturess','postss'));
    }

    public function post()
    {
        $posts=Post::orderBy('created_at','desc')->take(4)->get();
        $postss=Post::where('created_at','<=',Carbon::today()->subDays(7))->orderBy('created_at','desc')->get();
        // dd($postss);
        // dd($posts);

        $fixturess=Fixtures::where('date','>=',Carbon::now())->take(6)->get();
        $fixtures=Fixtures::where('home_score','!=',null)->orderBy('date','desc')->first();
        // ->where('date','<=',Carbon::now())
        $nextmatch=Fixtures::where('date','>=',Carbon::now())->first();
        // dd($fixtures);
        return view('pages.pages.news-post',compact('posts','fixtures','nextmatch','fixturess','postss'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $postdetails=Post::whereId($id)->first();
        return view('pages.pages.news-detail', compact('postdetails'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
