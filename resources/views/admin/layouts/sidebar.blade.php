<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="{{ asset('assets/img/find_user.png') }}" class="user-image img-responsive"/>
					</li>
				<li>
                        <a class="active-menu"  href="{{route('home')}}"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li> 
                    <!--<li>
                        <a  href="ui.html"><i class="fa fa-desktop fa-3x"></i> UI Elements</a>
                    </li>
                    <li>
                        <a  href="tab-panel.html"><i class="fa fa-qrcode fa-3x"></i> Tabs & Panels</a>
                    </li>
						   <li  >
                        <a   href="chart.html"><i class="fa fa-bar-chart-o fa-3x"></i> Morris Charts</a>
                    </li>	
                      <li  >
                        <a  href="table.html"><i class="fa fa-table fa-3x"></i> Table Examples</a>
                    </li>
                    <li  >
                        <a  href="form.html"><i class="fa fa-edit fa-3x"></i> Forms </a>
                    </li>				 -->
					
					                   
                    <li>
                        <a href="#"><i class="fa fa-list-alt fa-3x"></i>POSTS<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('post.index')}}">All Posts</a>
                            </li>
                            <li>
                                <a href="{{route('post.create')}}">Add Post</a>
                            </li>
                            <!-- <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>
                               
                            </li> -->
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i>Seasons<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('season.index')}}">All Seasons</a>
                            </li>
                            <li>
                                <a href="{{route('season.create')}}">Add Season</a>
                            </li>
                        </ul>
                    </li>                        					                   
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i>Fixtures<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('fixture.index')}}">All Fixtures</a>
                            </li>
                            <li>
                                <a href="{{route('fixture.create')}}">Add Fixtures</a>
                            </li>
                        </ul>
                    </li>
                    					                   
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i>Teams<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{URL('admin/team')}}">All Teams</a>
                            </li>
                            <li>
                                <a href="{{URL('admin/team/create')}}">Add Teams</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-sitemap fa-3x"></i>Competitions<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                            <a href="{{route('category.index')}}">View Competitions</a>
                            </li>
                            <li>
                                <a href="{{route('category.create')}}">Add Competition</a>
                            </li>
                        </ul>
                    </li>

                      <li>
                        <a href=""><i class="fa fa-sitemap fa-3x"></i>Category<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                            <a href="{{route('allcat')}}">View Category</a>
                            </li>
                            <li>
                                <a href="{{route('allcat.create')}}">Add Category</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-group fa-3x"></i>Players<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('player.index')}}">All Players</a>
                            </li>
                            <li>
                                <a href="{{route('player.create')}}">Add Players</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-user fa-3x"></i>Profile<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="">View your Profile</a>
                            </li>
                            <li>
                                <a href="#">Edit Profile</a>
                            </li>
                        </ul>
                    </li>  
                  <!-- <li  >
                        <a  href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                    </li>	 -->
                </ul>
               
            </div>
            
        </nav>  