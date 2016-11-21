@extends('layouts.app')

@section('content')
<div class="motopress-wrapper content-holder clearfix contact main-holder">
	<div class="container">
		<div class="row">
			<div class="col-md-12 padding_nill">
				<section class="title-section">
					<h1 class="title-header">Contact</h1>
					<ul class="breadcrumb breadcrumb__t">
						<li>
							<a href="{{ url('/') }}">Home</a>
						</li>
						<!-- <li class="divider">
						</li><li>
						<a href="" title="View all">Uncategorized</a>
					</li> -->
					<li class="divider">
						
					</li>
					<li class="active">
						Contact 
					</li>
				</ul>  
				</section>
			</div>
			
			<!-- <div class="col-md-12 padding_nill">
				<div class="box">
					<h2>Location</h2>
					<div id="googleMap" style="width:100%;height:300px;"></div>
				</div>
			</div> -->

			<div class="span12">
				<!-- <div class="span4">
					<div class="box">
						<h2>Contact info</h2>
						<h6>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</h6>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque la udantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia.<br>
						</p>
						<address>
							<strong>The Company Name Inc.<br>
								1230 St Dvijesh Place,<br>
								Glasgow, DC 76 Fr 51.
							</strong><br>
							Telephone: +1 123 456 7890<br>
							FAX: +1 123 456 7890<br>
							E-mail: <a href="mailto:info@demo.org">mail@demo.org</a><br>
						</address> 
					</div>
				</div> -->
				<div class="span8">
					<div class="box">
						<h2>Contact form</h2>
						<form method="post" id="commentform" action="{{ action('HomeController@contactmail') }}" novalidate="novalidate">
							<p class="field">
								<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
								<input type="text" name="author" id="author" placeholder="Name*"></p>
								<p class="field">
									<input type="text" name="email" id="email" placeholder="Email (will not be published)*">
								</p>
								<p class="field">
									<input type="text" name="url" id="url" placeholder="Website">
								</p>

								<p>
									<textarea name="comment" id="comment" cols="58" rows="10" placeholder="Your comment*"></textarea>
								</p>
								<p>
									<input name="submit" type="submit" class="btn btn-primary" id="submit" tabindex="5" value="Submit Comment">

								</p>
							</form>
						</div>
				</div>
			</div>
			
			
		</div>
	</div>					

	@endsection