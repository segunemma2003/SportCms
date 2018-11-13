<?php

namespace App\Http\Controllers;

use App\Season;
use Illuminate\Http\Request;
use Session;
class SeasonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $season=Season::all();
        return view('admin.pages.season.index',compact('season'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.season.create');
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
            'season'=>'required'
        ]);
        $season=new Season;
        $season->season=$request->season;
        if($season->save()){
            Session::flash('success','you have successfully updated the season');
            return redirect()->back();
        }else{
            Session::flash('error','Opps, Something went wrong!!!');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Season  $season
     * @return \Illuminate\Http\Response
     */
    public function show(Season $season)
    {
        $season=Season::whereId($season)->first();
        return view('admin.pages.season.show',compact('season'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Season  $season
     * @return \Illuminate\Http\Response
     */
    public function edit(Season $season)
    {
        $season=Season::whereId($season)->first();
        return view('admin.pages.season.edit',compact('season'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Season  $season
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Season $season)
    {
        $season=Season::whereId($season)->first();
        $season->season=$request->season;
        if($season->save()){
            Session::flash('success','you have successfully updated the season');
            return redirect()->back();
        }else{
            Session::flash('error','Opps, Something went wrong!!!');
            return redirect()->back();
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Season  $season
     * @return \Illuminate\Http\Response
     */
    public function destroy(Season $season)
    {
        //
    }
}
