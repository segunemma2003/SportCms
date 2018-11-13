<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Session;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=Category::all();
        return view('admin.pages.competitions.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.competitions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'competition_name'=>'required|string'
        ]);
        $category=new Category([
            'competition_name'=>$request->competition_name
        ]);
        if($category->save()){
            Session::flash('success','you have successfully added a competition');
            return redirect()->back();
        }else{
            Session::flash('error','Opps Something went wrong');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $category=Category::whereId($category)->first();
        return view('admin.pages.competitions.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($category)
    {
        $category=Category::whereId($category)->first();
        // dd($category);
        return view('admin.pages.competitions.update',compact('category'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $category)
    {
        $category=Category::whereId($category)->first();
        $category->competition_name=$request->competition_name;
        if($category->save()){
            Session::flash('success','you have successfully added a competition');
            return redirect()->back();
        }else{
            Session::flash('error','Opps Something went wrong');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($category)
    {
        $category=Category::whereId($category)->first();
        if($category->delete()){
            Session::flash('success','you have successfully deleted a competition');
            return redirect()->back();
        }else{
            Session::flash('error','Opps Something went wrong');
            return redirect()->back();
        }
    }
}
