<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use Session;
class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams=Team::all();
        return view('admin.pages.teams.index',compact('teams'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.teams.create');
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
            'name'=>'required|string',
            'country'=>'required|string',
            'file'=>'image',
            'coach'=>'required',
        ]);
        $filenameToStore='';
        if($request->hasFile('file')){
            $filename=$request->file('file')->getClientOriginalName();
            $filenameWithoutExt=pathinfo($filename, PATHINFO_FILENAME);
            $extension=$request->file('file')->getClientOriginalExtension();
            $filenameToStore=$filenameWithoutExt.'_'.time().'.'.$extension;
            $request->file('file')->storeAs('public/upload',$filenameToStore);
        }
        $team=new Team;
        $team->name=$request->name;
        $team->country=$request->country;
        $team->file=$filenameToStore;
        $team->coach=$request->coach;
        if($team->save()){
            Session::flash('success','Your have successfully added a team');
            return redirect()->back();
        }else{
            Session::flash('error','Opps something went wrong!!!');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        $team=Team::whereId($team)->first();
        return view('admin.pages.teams.show',compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($team)
    {
        $team=Team::whereId($team)->first();
        return view('admin.pages.teams.edit',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$team)
    {
        $this->validate($request,[
            'name'=>'required|string',
            'country'=>'required|string',
            'file'=>'image',
            'coach'=>'required',
        ]);
        $filenameToStore='';
        if($request->hasFile('file')){
            $filename=$request->file('file')->getClientOriginalName();
            $filenameWithoutExt=pathinfo($filename, PATHINFO_FILENAME);
            $extension=$request->file('file')->getClientOriginalExtension();
            $filenameToStore=$filenameWithoutExt.'_'.time().'.'.$extension;
            $request->file('file')->storeAs('public/upload',$filenameToStore);
        }
        $team=Team::whereId($team)->first();
        $team->name=$request->name;
        $team->country=$request->country;
        $team->file=$filenameToStore;
        $team->coach=$request->coach;
        if($team->save()){
            Session::flash('success','Your have successfully added a team');
            return redirect()->back();
        }else{
            Session::flash('error','Opps something went wrong!!!');
            return redirect()->back();
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($team)
    {
        $team=Team::whereId($team)->first();
        if($team->delete()){
            Session::flash('success','Your have successfully deleted a team');
            return redirect()->back();
        }else{
            Session::flash('error','Opps something went wrong!!!');
            return redirect()->back();
        }

    }
}
