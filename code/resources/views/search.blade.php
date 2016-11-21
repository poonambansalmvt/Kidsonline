@extends('layouts.app')

@section('content')

<div class="motopress-wrapper content-holder clearfix category main-holder">
	<div class="container">
		<div class="row">
			<div class="col-md-12 padding_nill search">
				<section class="title-section">
					<h1 class="title-header">Search</h1>
					<ul class="breadcrumb breadcrumb__t">
						<li><a href="{{ url('/')}}">Home</a>
						</li>
					<li class="divider"></li>
					<li class="active">Search</li>
					</ul>  
				</section>
				<div class="col-md-12" style="background:#fff;">
					<div class="searchbox">
						<!--search form-->
						<form class="form-inline" method="Post" role="search" action="{{ action('HomeController@search') }}">
							<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
							<div class="form-group">
								<input type="text" name="q" class="form-control search_text" placeholder="Search" required="required">
							</div>
							<button type="submit" class="btn btn-default search_btn">Search</button>
						</form>
					</div>
					<div class="search-result">
						<ul class="results">
							<?php
							if(!empty($data)){
								foreach ($data as $key => $value) {
							?>
							<li> 
							<a href="{{ url('/singlemovie')}}/<?php echo $value->omdb_id; ?>"" class="illustration">
								<?php if($value->poster == 'N/A' && $value->poster == 'None'){?>
									<img src="http://kidsonline.devserver.co.in/assets/images/default-slide-img.jpg" alt="img" width="129" height="100">
									<?php }else{?>
									<img src="<?php echo $value->poster; ?>" alt="img" width="129" height="100">
									<?php } ?>
								</a>    
								<div class="txt-box"> 
									<strong class="ttl">
										<a href="{{ url('/singlemovie')}}/<?php echo $value->omdb_id; ?>" ><?php echo $value->title; ?></a> 
									</strong>
									<div id="divDesc" style="height:42px; overflow:hidden; border:#030 0px solid;"><?php echo $value->plot; ?></div>
									
								</div>
							</li>
							<?php		
								}
							}
							?>
						</ul>
						<div class="pagination pagination__posts center">
				<div class="pagination"><?php if(!empty($data)) {?>{{ $data->links() }} <?php }?></div>
			</div>
					</div>
				</div>
			</div>

			<div id="portfolio-grid" class="col-md-12 padding_nill">
				
			</div>
			
		</div>
	</div>					

	@endsection