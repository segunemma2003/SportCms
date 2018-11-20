<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;
use Session;
use App\Team;
class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players=Player::all();
        return view('admin.pages.players.index',compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams=Team::all();
        return view('admin.pages.players.create',compact('teams'));
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
            'dob'=>'required|date',
            'picture'=>'required|image',
            'welcome_video'=>'mimes:mp4,3gp,mpeg',
            'years_of_contract'=>'required',
            'salary'=>'required',
            'year_signed'=>'required',

        ]);
        if($request->hasFile('picture')){
            $filename=$request->file('picture')->getClientOriginalName();
            $filenameWithoutExt=pathinfo($filename, PATHINFO_FILENAME);
            $extension=$request->file('picture')->getClientOriginalExtension();
            $filenameToStore=$filenameWithoutExt.'_'.time().'.'.$extension;
            $request->file('picture')->storeAs('public/upload/players',$filenameToStore);
        }
        $player=new Player([
            'name'=>$request->name,
            'dob'=>$request->dob,
            'weight'=>$request->weight,
            'height'=>$request->height,
            'shirt_number'=>$request->shirt_number,
            'picture'=>$filenameToStore,
            'welcome_video'=>$request->welcome_video,
            'years_of_contract'=>$request->years_of_contract,
            'salary'=>$request->salary,
            'year_signed'=>$request->year_signed,
            'team_id'=>$request->team_id,
            'former_club'=>$request->former_club
            ]);
        if($player->save()){
            Session::flash('success','Your have successfully added a player');
            return redirect()->back();
        }else{
            Session::flash('error','Opps something went wrong!!!');
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {
        $player=Player::whereId($player)->first();
        return view('admin.pages.players.show',compact('player'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit($player)
    {
        $teams=Team::all();
        $player=Player::whereId($player)->first();
        return view('admin.pages.players.update',compact('player','teams'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$player)
    {
        $player=Player::whereId($player)->first();    
        if($request->hasFile('picture')){
            $filename=$request->file('picture')->getClientOriginalName();
            $filenameWithoutExt=pathinfo($filename, PATHINFO_FILENAME);
            $extension=$request->file('picture')->getClientOriginalExtension();
            $filenameToStore=$filenameWithoutExt.'_'.time().'.'.$extension;
            $request->file('picture')->storeAs('public/upload/players',$filenameToStore);
            $player->picture=$filenameToStore;
        }
        // dd($request->team_id);
        $player->name=$request->name;
        $player->dob=$request->dob;
        $player->weight=$request->weight;
        $player->height=$request->height;
        $player->shirt_number=$request->shirt_number;
        // dd($request->team_id);
        $player->team_id=$request->team_id;
        $player->former_club=$request->former_club;
        $player->welcome_video=$request->welcome_video;
        $player->years_of_contract=$request->years_of_contract;
        $player->salary=$request->salary;
        $player->year_signed=$request->year_signed;
        // $teamc=\App\Team::whereId($request->team_id)->first();
        // $teamf=\App\Team::whereId($request->former_club)->first();
        // dd($teamf);
        // $player->updateExistingPivot(['former_club'=>$request->former_club,'team_id'=>$request->team_id]);
        // $teamc->current->update();
       
        // $player->former->update(['team_id'=>$request->team_id,'former_club'=>$request->former_club]);
        if($player->save()){
            Session::flash('success','Your have successfully added a player');
            return redirect()->back();
        }else{
            Session::flash('error','Opps something went wrong!!!');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy($player)
    {
        $player=Player::whereId($player)->first();
        if($player->delete()){
            Session::flash('success','You have successfully deleted a player');
            return redirect()->back();
        }else{
            Session::flash('error','Opps something went wrong!!!');
            return redirect()->back();
        }

    }
}
