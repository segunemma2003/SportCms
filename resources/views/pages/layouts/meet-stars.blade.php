<div class="container">
				<div class="team-holder">

					<!-- Main Heading -->
					
					<!-- Main Heading -->

					<!-- Team Row -->
					<div id="team-slider" class="team-slider">

						<!-- Team Column -->
						@foreach($allplayers as $player)
						<div class="item">
							<div class="team-column">
								<img src="/storage/upload/players/{{ $player->picture }}" alt="">
								<span class="player-number">{{$player->shirt_number}}</span>
								<div class="team-detail">
									<h5><a href="#">{{$player->name}}</a></h5>
									<span class="desination">{{$player->position}}</span>
									<div class="detail-inner">
										<ul>
											<li>Born</li>
											<li>Position</li>
											<li>Squad number</li>
											<li>Previous Club</li>
											<li>Social Media</li>
										</ul>
										<ul>
											<li>{{ \Carbon\Carbon::parse($player->dob)->format('d,M,Y')}}</li>
											<li>{{$player->position}}</li>
											<li>{{$player->shirt_number}}</li>
											<li>{{$player->former->name}}</li>
											<li>
												<ul class="social-icons">
													<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
													<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
													
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						@endforeach
						<!-- Team Column -->

						<!-- Team Column -->
						
						<!-- Team Column -->

					</div>
					<!-- Team Row -->

				</div>
			</div>