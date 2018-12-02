<div class="col-sm-4 col-xs-5 r-full-width">
<div class="next-matches">
<h4>Next Match</h4> 
<div id="matches-detail-slider" class="matches-detail-slider">

<!-- Item -->
<div class="item matches-detail" style="background: url(cdn/img/nxt-match-bg.jpg) no-repeat; background-size: cover;">
<div class="time-left">
<ul id="countdown-1" class="countdown">
@if($nextmatch)
	<li>{{$nextmatch->competitions->nickname}} {{$nextmatch->matchday}}</li>
@else
	<li>No more matches</li>
@endif

</ul>
</div>
<span class="left-date"> {{ \Carbon\Carbon::parse($nextmatch->date)->format('d,M,Y')}} {{ \Carbon\Carbon::parse($nextmatch->time)->format('H:i:s')}}</span>
<div class="team-btw-match">
<ul>
	<li>
		<img src="/storage/upload/{{$nextmatch->homeTeam->file}}" alt="">
		<span>{{$nextmatch->homeTeam->name}}</span>
	</li>
	<li>
		<img src="/storage/upload/{{$nextmatch->awayTeam->file}}" alt="">
		<span>{{$nextmatch->awayTeam->name}}</span>
	</li>
</ul>
</div>
</div>
<!-- Item -->

</div>
</div>
</div>