<?php

namespace App\Providers;
use App\Post;
use App\Fixtures;
use Carbon\Carbon;
use Illuminate\View\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        // View::composer('*',function($view){
            view()->share('posts', Post::orderBy('created_at','desc')->take(4)->get());
            view()->share('postss',Post::where('created_at','<=',Carbon::today()->subDays(7))->orderBy('created_at','desc')->get());
            view()->share('fixturess',Fixtures::where('date','>=',Carbon::now())->take(6)->get());
            view()->share('fixtures',Fixtures::where('home_score','!=',null)->orderBy('date','desc')->first());
            view()->share('nextmatch',Fixtures::where('date','>=',Carbon::now())->first());
        

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
