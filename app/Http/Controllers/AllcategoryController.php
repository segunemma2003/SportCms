<?php

namespace App\Http\Controllers;

use App\Allcategory;
use Illuminate\Http\Request;
use Session;
class AllcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=Allcategory::all();
        return view('admin.pages.category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.category.create');
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
            'name'=>'required|string'
        ]);
        $category=new Allcategory([
            'name'=>$request->name
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
     * @param  \App\Allcategory  $allcategory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category=Allcategory::whereId($id)->first();
        return view('admin.pages.category.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Allcategory  $allcategory
     * @return \Illuminate\Http\Response
     */
    public function edit($category)
    {
        $category=allcategory::whereId($category)->first();
        // dd($category);
        return view('admin.pages.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Allcategory  $allcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$allcategory)
    {
        $category=Allcategory::whereId($allcategory)->first();
        $category->name=$request->name;
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
     * @param  \App\Allcategory  $allcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($allcategory)
    {
        $category=Allcategory::whereId($allcategory)->first();
        if($category->delete()){
            Session::flash('success','you have successfully deleted a competition');
            return redirect()->back();
        }else{
            Session::flash('error','Opps Something went wrong');
            return redirect()->back();
        }

    }
}
