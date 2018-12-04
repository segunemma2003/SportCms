<?php

namespace App\Http\Controllers;
use App\Fixtures;
use App\Scorer;
use Session;
use Illuminate\Http\Request;

class ScorerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $fixture=Fixtures::whereId($id)->first();
        
        // dd($scorer);

            return view('admin.pages.scorers.create',compact('fixture'));    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        // dd($request->all());
        $fixture=Fixtures::whereId($id)->first();
        $fixture->home_score=$request->home_score;
        $fixture->away_score=$request->away_score;
        if($fixture->save()){
        $scorer=new Scorer;
        $scorer->opponentScorer=$request->scorer_nameop;
        $scorer->opponentAssist=$request->assist_nameop;
        $scorer->player_id=$request->scorer_name;
        if($request->minute){
        $scorer->time=$request->minute;
        }else if($request->minutes){
        $scorer->time=$request->minutes;
        }
        $scorer->assistplayer_id=$request->assist_name;
        $scorer->fixture_id=$fixture->id;
            if($scorer->save()){
                Session::flash('success','Successfully Updated');
                return redirect()->back();
            }else{
                Session::flash('error','Opps error occured!!!');
                return redirect()->back();
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Scorer  $scorer
     * @return \Illuminate\Http\Response
     */
    public function show(Scorer $scorer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Scorer  $scorer
     * @return \Illuminate\Http\Response
     */
    public function edit(Scorer $scorer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Scorer  $scorer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Scorer $scorer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Scorer  $scorer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scorer $scorer)
    {
        //
    }
}
