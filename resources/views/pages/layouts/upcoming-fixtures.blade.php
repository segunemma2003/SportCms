<div class="col-md-8 col-xs-5 r-full-width">
	<h3><span><i class="blue-color">SOME </i>FIXTURES</span></h3>
<div class="fresh-table full-color-blue">

<table id="fresh-table" class="table">

<tbody>
@foreach($fixturess as $fixture)
<tr>

	<td></td>
	<td><img src="/storage/upload/{{$fixture->homeTeam->file}}" alt="" width="36" height="36" class="monthly-fixture-logo"> {{$fixture->homeTeam->name}}</td>
	<td class="grey-text" style="text-align: center"> 
	@if($fixture->home_score==null) 
		{{\Carbon\Carbon::parse($fixture->date)->format('M,d')}}
	@elseif($fixture->home_score=="0")
		{{"0"}} {{'-'}}
	@else
		{{$fixture->home_score}} {{'-'}}
	@endif
	
		 @if($fixture->away_score=="0")
			 {{"0"}}
		 @else
			{{$fixture->away_score}}
		@endif
		  </td>
	<td><img src="/storage/upload/{{$fixture->awayTeam->file}}" alt="" width="36" height="36" class="monthly-fixture-logo"> {{$fixture->awayTeam->name}} </td>

	<td></td>
</tr>
@endforeach
<!--  -->


</tbody>
</table>
</div>

</div>