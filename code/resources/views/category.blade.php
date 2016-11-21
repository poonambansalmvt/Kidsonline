@extends('layouts.app')

@section('content')
<div class="motopress-wrapper content-holder clearfix category main-holder">
	<div class="container">
		<div class="row">
			<div class="col-md-12 padding_nill">
				<section class="title-section">
					<h1 class="title-header">Category  </h1>
					<ul class="breadcrumb breadcrumb__t">
						<li><a href="">Home</a>
						</li>
						<!-- <li class="divider">
						</li><li>
						<a href="" title="View all">Uncategorized</a>
					</li> -->
					<li class="divider"></li>
					<li class="active">Category </li></ul>  
				</section>
			</div>

			<div id="portfolio-grid" class="col-md-12 padding_nill">
				<div class="filter-wrapper clearfix">
					<div class="center">
						<strong>Categories: </strong>
						<ul id="filters" class="filter nav nav-pills">
							<li class="active">
								<a href="#">Show All</a>
							</li>
							<li>
								<a href="#">Action</a>
							</li>
							<li>
								<a href="#">Animation</a>
							</li>
							<li>
								<a href="#">Comedy</a>
							</li> 
							<li>
								<a href="#">Family</a>
							</li>
							<li>
								<a href="#">Adventure</a>
							</li>
							<li>
								<a href="#">Drama</a>
							</li>
						</ul>
						<div class="clear"></div>
					</div>
				</div>
				<div class="col-md-4 padding_left">
					<div class="portfolio_item_holder">
						<figure class="thumbnail thumbnail__portfolio">
							<a href="" class="image-wrap" title="Image Format" rel="prettyPhoto">
								<img src="http://kidsonline.devserver.co.in/assets/images/img-14-600x380.jpg" alt="Image Format">
								<span class="zoom-icon"></span>
							</a>
						</figure> 
						<div class="caption caption__portfolio">
						<h3><a href="">Image Format</a></h3>
							<p class="excerpt">This format perfectly fits in case you need only a single image for your post display. Use Featured image option... </p>
							<p><a href="" class="btn btn-primary">Read more</a></p>
						</div> 
					</div>
				</div>
				<div class="col-md-4 padding_left">
					<div class="portfolio_item_holder">
						<figure class="thumbnail thumbnail__portfolio">
							<a href="" class="image-wrap" title="Image Format" rel="prettyPhoto">
								<img src="http://kidsonline.devserver.co.in/assets/images/img-22-600x380.jpg" alt="Image Format">
								<span class="zoom-icon"></span>
							</a>
						</figure> 
						<div class="caption caption__portfolio">
							<h3><a href="">Slideshow Format</a></h3>
							<p class="excerpt">This format perfectly fits in case you need only a single image for your post display. Use Featured image option... </p>
							<p><a href="" class="btn btn-primary">Read more</a></p>
						</div> 
					</div>
				</div>
				<div class="col-md-4 padding_left">
					<div class="portfolio_item_holder">
						<figure class="thumbnail thumbnail__portfolio">
							<a href="" class="image-wrap" title="Image Format" rel="prettyPhoto">
								<img src="http://kidsonline.devserver.co.in/assets/images/img-13-600x380.jpg" alt="Image Format">
								<span class="zoom-icon"></span>
							</a>
						</figure> 
						<div class="caption caption__portfolio">
							<h3><a href="">Gallery Format</a></h3>
							<p class="excerpt">This format perfectly fits in case you need only a single image for your post display. Use Featured image option... </p>
							<p><a href="" class="btn btn-primary">Read more</a></p>
						</div> 
					</div>
				</div>
				<div class="col-md-4 padding_left">
					<div class="portfolio_item_holder">
						<figure class="thumbnail thumbnail__portfolio">
							<a href="" class="image-wrap" title="Image Format" rel="prettyPhoto">
								<img src="http://kidsonline.devserver.co.in/assets/images/img-25-600x380.jpg" alt="Image Format">
								<span class="zoom-icon"></span>
							</a>
						</figure> 
						<div class="caption caption__portfolio">
							<h3><a href="">Video Format</a></h3>
							<p class="excerpt">This format perfectly fits in case you need only a single image for your post display. Use Featured image option... </p>
							<p><a href="" class="btn btn-primary">Read more</a></p>
						</div> 
					</div>
				</div>
				<div class="col-md-4 padding_left">
					<div class="portfolio_item_holder">
						<figure class="thumbnail thumbnail__portfolio">
							<a href="" class="image-wrap" title="Image Format" rel="prettyPhoto">
								<img src="http://kidsonline.devserver.co.in/assets/images/img-10-600x380.jpg" alt="Image Format">
								<span class="zoom-icon"></span>
							</a>
						</figure> 
						<div class="caption caption__portfolio">
							<h3><a href="">Audio Format</a></h3>
							<p class="excerpt">This format perfectly fits in case you need only a single image for your post display. Use Featured image option... </p>
							<p><a href="" class="btn btn-primary">Read more</a></p>
						</div> 
					</div>
				</div>
				<div class="col-md-4 padding_left">
					<div class="portfolio_item_holder">
						<figure class="thumbnail thumbnail__portfolio">
							<a href="" class="image-wrap" title="Image Format" rel="prettyPhoto">
								<img src="http://kidsonline.devserver.co.in/assets/images/img-23-600x380.jpg" alt="Image Format">
								<span class="zoom-icon"></span>
							</a>
						</figure> 
						<div class="caption caption__portfolio">
							<h3><a href="">Sodales orci et</a></h3>
							<p class="excerpt">This format perfectly fits in case you need only a single image for your post display. Use Featured image option... </p>
							<p><a href="" class="btn btn-primary">Read more</a></p>
						</div> 
					</div>
				</div>
			</div>
			<div class="pagination pagination__posts center">
				<ul>
					<li class="active">
						<a href="#">1</a>
					</li>
					<li><a href="#" class="inactive">2</a>
					</li>
				</ul>
			</div>
		</div>
	</div>					

	@endsection