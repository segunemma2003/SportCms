@extends('pages.layouts.masters')
@section('title', 'Details')
@section('content')
@include('pages.layouts.slider-holder')
	<!-- Main Content -->
	<main class="main-content">

		<!-- Blog Detail -->
		<div class="page-theme-padding white-bg">
		
		
		
		  <div class="container">
			
			
			<div class="row">
				
				
					
			  <!-- Blog Content -->
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					
						<!-- Blog detail -->
						<div class="blog-detail-holder">
							
							<article> </article>
							<div class="blog-detail">
                            
                            
                            
								
                                <div class="fresh-table full-color-azure">
                          
                                  <div class="toolbar">
            <button id="" class="btn btn-default"  data-toggle="modal" data-target="#news-form-modal"><i class="fa fa-user"></i>Add News</button>
        </div>
                                
                                  <table id="fresh-table" class="table">
                                  
                                  <thead>
                <th data-field="id">ID</th>
            	<th data-field="title">Title</th>
            	<th data-field="author">Author</th>
            	<th data-field="image">Image</th>
            	<th data-field="date">Date</th>
            	<th data-field="actions" data-formatter="operateFormatter" data-events="operateEvents">Actions</th>
            </thead>                             
                                      <tbody>
                        @foreach ($posts as $post)
                                        <tr>
                                            <td>{{$loop->index+1}}</td>
                                            <td>{{$post->title}}</td>
                                            <td>{{$post->author}}</td>
                                            <td>{{$post->image}}</td>
                                            <td>{{$post->date}}</td>
                                        </tr>
                                      
                        @endforeach
                                      </tbody>
                                  </table>
                                   
                              </div>
                                

						  </div>
							<div class="modal fade" id="news-form-modal">
						  	<div class="news-form-form position-center-center">
                            <h2>Add News<button class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button></h2>
								
                                <form action="" method="post" name="form1" class="news-form">
              <table width="98%" align="center">
                <tr valign="baseline">
                  <td nowrap align="right">Title:</td>
                  <td><input type="text" name="Title" value="" size="60"></td>
                </tr>
                
                <tr valign="baseline">
                  <td nowrap align="right" valign="top">Detail:</td>
                  <td><textarea name="Detail" id="editor1" cols="56" rows="20"></textarea></td>
                </tr>
                 <tr valign="baseline">
                  <td nowrap align="right">Image:</td><input type="file">
                  <td><input type="file" name="Image" value="" size="32"></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">Date:</td>
                  <td><input type="date" name="Date" value="" size="32"></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">Author:</td>
                  <td><input type="text" name="Author" value="" size="32"></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">Publish Now</td>
                  <td><select name="nSite" id="select">
                    <option selected="selected">--</option>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">&nbsp;</td>
                  <td><input type="submit" class="pure-button" value="Add Article"></td>
                </tr>
              </table>
              
             <input type="hidden" name="nSite" value="1">
              <input type="hidden" name="MM_insert" value="form1">
              
             
                     <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
            </form>
                            </div>
                            </div>
						</div>
						<!-- Blog Detail -->

						
					</div>
					<!-- Blog Content -->

					
				</div>
			</div>
		</div>
		<!-- Blog Detail -->

	</main>
	<!-- Main Content -->





@endsection