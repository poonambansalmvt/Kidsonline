@extends('layouts.app')

@section('content')

<div class="motopress-wrapper content-holder clearfix category main-holder">
	<div class="container">
		<div class="row">
			<div class="col-md-12 padding_nill">
				<section class="title-section">
					<h1 class="title-header">Movies</h1>
					<ul class="breadcrumb breadcrumb__t">
						<li><a href="{{url('/')}}">Home</a>
						</li>
						
					<li class="divider"></li>
					<li class="active">Imdb</li></ul>  
				</section>
			</div>

			<div id="portfolio-grid" class="col-md-12 padding_nill">
				
				<?php foreach ($data as $key => $value) {
					
				?>

				<div class="col-md-4 padding_left">
					<div class="portfolio_item_holder">
						<figure class="thumbnail thumbnail__portfolio">
							<a href="{{ url('/singlemovie')}}/<?php echo $value->omdb_id; ?>" class="image-wrap" title="Image Format" rel="prettyPhoto">
							<img style="height:212px;" src="<?php if($value->poster != 'N/A' && $value->poster != 'None'){
								$image = $value->poster;
								$mime_type = pathinfo($image, PATHINFO_EXTENSION);
								$imageData = base64_encode( file_get_contents($image) );
								$src       = 'data: image/'.$mime_type.';base64,'.$imageData;
								echo $src;
							}else{ echo "http://kidsonline.devserver.co.in/assets/images/default-slide-img.jpg";}?>"/>
								<span class="zoom-icon"></span>
							</a>
						</figure> 
						<div class="caption caption__portfolio">
						<h3><a href="{{ url('/singlemovie')}}/<?php echo $value->omdb_id; ?>"><?php $title = $value->title; echo $string = substr($title,0,20).'...'; ?></a></h3>
							<p class="excerpt"><?php 
                                    $des = $value->plot; 
                                    echo $string = substr($des,0,20).'...';
                                ?> 
                             </p>
							<p><a href="" class="btn btn-primary">Read more</a></p>
						</div> 
					</div>
				</div>
				<?php } ?>
				
			</div>
			<div class="pagination pagination__posts center">
				<div class="pagination">{{ $data->links() }}</div>
			</div>
		</div>
	</div>					

	@endsection