<div class="col-lg-12 col-md-12 col-sm-5 col-xs-6 r-full-width">
<div class="last-matches theme-margin-bottom">
<h4>Last Match</h4>
<div class="matches-detail style-2" style="background: url(cdn/img/last-match-bg.jpg) no-repeat; background-size: cover;">
<p>{{$fixtures->venue}}<br>
{{$fixtures->competitions->nickname}}  {{$fixtures->matchday}} {{ \Carbon\Carbon::parse($fixtures->date)->format('d,M,Y')}}</p>
<div class="team-btw-match">
<ul>
	<li>
	  <img src="/storage/upload/{{ $fixtures->homeTeam->file}}" alt="" class="last-match-logo">
		<span>{{$fixtures->homeTeam->name}}<span>{{$fixtures->home_score}}</span></span>
	</li>
	<li>
		<img src="/storage/upload/{{ $fixtures->awayTeam->file}}" alt="" class="last-match-logo">
		<span>{{$fixtures->awayTeam->name}}<span>{{$fixtures->away_score}}</span></span>
	</li>
</ul>
</div>
<div class="goals-detail">



<ul>
	<li>
		<span>Martins Usule</span>
		<span>29'</span>
	</li>

	<!-- // <li>
	// 	<span>Usman Bara'u</span>
	// 	<span>68'</span>
	// </li> -->



</ul>
</div>
</div>
</div>
</div>