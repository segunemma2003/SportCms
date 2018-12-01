<?php

namespace App\Http\Controllers;
use App\Team;
use App\Season;
use App\Category;
use App\Fixtures;
use Illuminate\Http\Request;
use Session;
class FixturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fixtures=Fixtures::orderBy('date','desc')->get();
        return view('admin.pages.fixtures.index',compact('fixtures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams=Team::all();
        $seasons=Season::all();
        $category=Category::all();
        return view('admin.pages.fixtures.create',compact('teams','seasons','category'));
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
            'home'=>'required|integer',
            'away'=>'required|integer',
            'date'=>'required|date',
            'time'=>'required',
            'venue'=>'required',
            'season'=>'required|integer',
            'competition'=>'required|integer',

        ]);
        $fixture=new Fixtures;
        $fixture->home=$request->home;
        $fixture->away=$request->away;
        $fixture->time=$request->time;
        $fixture->venue=$request->venue;
        $fixture->date=$request->date;
        $fixture->season_id=$request->season;
        $fixture->matchday=$request->matchday;
        $fixture->competition=$request->competition;
        if($fixture->save()){
            Session::flash('success','You have successfully added a fixture');
            return redirect()->back();
        }else{
            Session::flash('error','Opps something went wrong!!!!');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fixtures  $fixtures
     * @return \Illuminate\Http\Response
     */
    public function show(Fixtures $fixtures)
    {
        $fixture=Fixtures::whereId($fixtures)->first();
        return view('admin.pages.fixtures.show',compact('fixture'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fixtures  $fixtures
     * @return \Illuminate\Http\Response
     */
    public function edit($fixtures)
    {
        $fixture=Fixtures::whereId($fixtures)->first();
        $teams=Team::all();
        $seasons=Season::all();
        $category=Category::all();
        return view('admin.pages.fixtures.edit',compact('fixture','teams','seasons','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fixtures  $fixtures
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$fixtures)
    {
        
        $fixture=Fixtures::whereId($fixtures)->first();
        $fixture->home=$request->home;
        $fixture->away=$request->away;
        $fixture->date=$request->date;
        $fixture->time=$request->time;
        $fixture->venue=$request->venue;
        $fixture->season_id=$request->season;
        $fixture->competition=$request->competition;
        if($fixture->save()){
            Session::flash('success','You have successfully added a fixture');
            return redirect()->back();
        }else{
            Session::flash('error','Opps something went wrong!!!!');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fixtures  $fixtures
     * @return \Illuminate\Http\Response
     */
    public function destroy($fixtures)
    {
        $fixture=Fixtures::whereId($fixtures)->first();
        if($fixture->delete()){
            Session::flash('success','You have successfully deleted a fixture');
            return redirect()->back();
        }else{
            Session::flash('error','Opps something went wrong!!!!');
            return redirect()->back     ();
        }
    }
}
