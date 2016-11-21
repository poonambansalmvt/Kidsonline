@extends('layouts.app')

@section('content')

<div class="motopress-wrapper content-holder clearfix about main-holder">
	<div class="container">
		<div class="row">
			<div class="col-md-12 padding_nill">
				<section class="title-section">
					<h1 class="title-header"><?php echo $data[0]->title;?></h1>
					<ul class="breadcrumb breadcrumb__t">
						<li><a href="{{ url('/')}}">Home</a>
						</li>
					</li>
					<li class="divider"></li>
					<li class="active"><?php echo $data[0]->title;?></li></ul>  
				</section>
			</div>
			<div class="row">
				<div class="col-md-8 right right" id="content">
					<article class="post__holder post">
						<div class="video-wrap html5-video">
							<div class="jp-video">
								<div class="jp-type-list-parent">
									<div class="jp-type-single">
										<div id="jquery_jplayer_2245" class="jp-jplayer" style="width: 100%; height: 100%;">
											<img id="jp_poster_0" src="<?php if($data[0]->poster == 'N/A'){ echo "http://kidsonline.devserver.co.in/assets/images/default-slide-img.jpg"; }else{ 
												$image = $data[0]->poster;;
												$mime_type = pathinfo($image, PATHINFO_EXTENSION);
												$imageData = base64_encode( file_get_contents($image) );
												$src = 'data: image/'.$mime_type.';base64,'.$imageData;
												echo $src;
												}?>">
										</div>
										<div class="jp-gui">
											<div class="jp-video-play" style="display: block;">
												<a href="http://www.imdb.com/title/<?php echo $data[0]->movie_id; ?>" class="jp-video-play-icon" tabindex="1" title="Play" target="_blank">Play</a>
											</div>
											
											
										</div>
									</div>
								</div> 
							</div>

							<div class="post_content">
								<p><?php echo $data[0]->plot; ?></p>
								
								<div class="clear"></div>
							</div>
							<div class="post_meta meta_type_line">
								<div class="post_meta_unite clearfix"> 
									<div class="post_date">
										Imdb Rating: 
										<?php
											
											 $imdb_rat = number_format($data[0]->imdb_rating,1);
											 $number = explode(".", $imdb_rat);
											for($i=1; $i<=10; $i++){
												if($i <= $imdb_rat) {
													?>
													<img src="http://kidsonline.devserver.co.in/assets/images/filledStar.png" style="width:5%;"/>
													<?php
												} else {
													for ($j=1; $j <= 1; $j++) { 
														?>
														<img src="http://kidsonline.devserver.co.in/assets/images/0.<?php echo $number[1];?>.png" style="width:4%;"/>
														<?php
													}
												}
											}
											echo "(".$imdb_rat."/10)";
										 ?>

									</div>
									
									
								</div>
								<div class="post_meta_unite clearfix">
									
								<div class="post_meta_unite clearfix"> 
									<div class="post_comment">
										Genre: 
										<span style="color:#58cb7e;"><?php echo $data[0]->genre; ?></span>
									</div>
									<div class="post_comment">
											Time Duration:
											<span style="color:#58cb7e;"><?php echo $data[0]->runtime; ?></span> 
										</div>
										
									</div>
								</div> 

							</article>  
							<section class="demo-buttons">   
								<div class="slide-social">
									<div class="ss-button">
										<a href="https://twitter.com/share" class="twitter-share-button" data-url="https://github.com/christophery/slide-social-buttons" data-text="Slide Social Buttons are a fun way to display your social media buttons">Tweet</a>
									</div>
									<div class="twitter-bg ss-icon">
										<i class="fa fa-twitter"></i>
									</div>
									<div class="twitter-bg ss-slide">tweet</div>
								</div>    
								<!-- Like -->
								<div class="slide-social">
									<div class="ss-button">
										<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fgithub.com%2Fchristophery%2Fslide-social-buttons&amp;send=false&amp;layout=button_count&amp;width=90&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=like&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:90px; height:21px;" allowTransparency="true"></iframe>
									</div>
									<div class="facebook-bg ss-icon">
										<i class="fa fa-facebook"></i>
									</div>
									<div class="facebook-bg ss-slide">Like</div>
								</div>

								<!-- +1 -->
								<div class="slide-social">
									<div class="ss-button">
										<div class="g-plusone" data-size="medium"></div>
									</div>
									<div class="google-plus-bg ss-icon">
										<i class="fa fa-google-plus"></i>
									</div>
									<div class="google-plus-bg ss-slide">+1</div>
								</div>

								<!-- Tweet -->


								<!-- Pin -->
								<div class="slide-social">
									<div class="ss-button">
										<a href="https://pinterest.com/pin/create/button/?url=http%3A%2F%2Fwww.flickr.com%2Fphotos%2Fkentbrew%2F6851755809%2F&media=http%3A%2F%2Ffarm8.staticflickr.com%2F7027%2F6851755809_df5b2051c9_z.jpg&description=Next%20stop%3A%20Pinterest" data-pin-do="buttonPin" data-pin-config="beside"><img src="https://assets.pinterest.com/images/pidgets/pin_it_button.png" /></a>
									</div>
									<div class="pinterest-bg ss-icon">
										<i class="fa fa-pinterest"></i>
									</div>
									<div class="pinterest-bg ss-slide">pin it</div>
								</div>

								<!-- END Social Networking Widgets -->

							</section>
							
							
											</div>
											<div class="col-md-4 sidebar" id="sidebar" data-motopress-type="static-sidebar" data-motopress-sidebar-file="sidebar.php">
												<div id="categories-4" class="widget">
													<h3>Categories</h3>
													<ul>
														<li class="cat-item cat-item-2">
															<a href="" title="View all posts filed under Aenean nec eros estibulum ante ipsum"><?php echo $data[0]->genre;?></a>
														</li>
														<li class="cat-item cat-item-3">
															<a href="" title="View all posts filed under Etiam cursus leo vel metus">Etiam cursus leo vel metus</a>
														</li>
														<li class="cat-item cat-item-4">
															<a href="" title="View all posts filed under In faucibus orci luctus et">In faucibus orci luctus et
															</a>
														</li>
														<li class="cat-item cat-item-5">
															<a href="" title="View all posts filed under Lorem ipsum dolor">Lorem ipsum dolor</a>
														</li>
														<li class="cat-item cat-item-37">
															<a href="" title="View all posts filed under New">New</a>
														</li>
														<li class="cat-item cat-item-6">
															<a href="" title="View all posts filed under Nulla facilisi">Nulla facilisi</a>
														</li>
														<li class="cat-item cat-item-7">
															<a href="" title="View all posts filed under Porta fusce suscipit varius miursu">Porta fusce suscipit varius miursu</a>
														</li>
														<li class="cat-item cat-item-8">
															<a href="" title="View all posts filed under Praesent vestibulum molestie">Praesent vestibulum molestie</a>
														</li>
														<li class="cat-item cat-item-9">
															<a href="" title="View all posts filed under Suspendisse sollicitudin velit sed leo">Suspendisse sollicitudin velit sed leo</a>
														</li>
														<li class="cat-item cat-item-10">
															<a href="" title="View all posts filed under Ultrices posuere cubilia Curae">Ultrices posuere cubilia Curae</a>
														</li>
														<li class="cat-item cat-item-1">
															<a href="" title="View all posts filed under Uncategorized">Uncategorized</a>
														</li>
													</ul>
												</div> 
												<div id="my-recent-comments-2" class="widget"> 
													<h3>Recent Comments</h3> 
													<ul class="comments-custom unstyled">
														<li class="comments-custom_li">
															<figure class="thumbnail featured-thumbnail">
																<img alt="" src="http://kidsonline.devserver.co.in/assets/images/536.png" class="avatar avatar-64 photo" height="64" width="64">
															</figure> 
															<div class="extra-wrap">
																<div class="meta_format">
																	<h4 class="comments-custom_h_author">admin</h4>
																</div>
																<div class="comments-custom_txt">
																	<a href="" title="Go to this comment">Cras semper arcu sapien, sed tempus nunc lobortis id. Morbi nec porttitor odio. Mauris eget semper mauris. Sed a felis s...</a>
																</div>
																<div class="meta_format">
																	<time datetime="2014-05-02T12:44:00">July 2, 2016 12:44 pm</time>
																</div>
																<div class="clear"></div>
															</div>
														</li>
														<li class="comments-custom_li">
															<figure class="thumbnail featured-thumbnail"><img alt="" src="http://kidsonline.devserver.co.in/assets/images/536.png" class="avatar avatar-64 photo" height="64" width="64">
															</figure>
															<div class="extra-wrap">
																<div class="meta_format">
																	<h4 class="comments-custom_h_author">admin</h4>
																</div> 
																<div class="comments-custom_txt">
																	<a href="" title="Go to this comment">Praesent luctus tristique velit, non malesuada turpis adipiscing vel. Suspendisse quis massa laoreet, porttitor mi nec, ...</a>
																</div>
																<div class="meta_format">
																	<time datetime="2014-05-02T12:44:00">July 2, 2016 12:44 pm</time>
																</div>
															</div>
														</li>

													</ul>
												</div>
											</div>


										</div>

									</div>

								</div>
							</div>					

							@endsection