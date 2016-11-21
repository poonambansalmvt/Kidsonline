<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kids-Online</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/flexslider.css">
    <link rel="stylesheet" href="/assets/css/normalize.css">
    <link rel="stylesheet" href="/assets/css/demo.css">
    <link rel="stylesheet" href="/assets/css/slide-social-buttons.css"> 
    <link rel="stylesheet" href="/assets/css/responsive.css">
    
    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    


</head>    
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

<body id="app-layout">
    <header class="motoPress-wrapper header">
        <nav class="navbar-static-top">
            <div class="container">
                <div class="row">
                    <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
           <a href="{{ url('/') }}" class="navbar-brand">Logo</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                            <!-- <li class="dropdown"> -->
                            <li>
                                <a href="{{ url('/tvShows') }}">Tv Shows</a>
                                <!-- <a class="dropdown-toggle" data-toggle="dropdown" href="{{ url('/tvShows') }}">Tv Shows <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul> -->

                            </li>
                            <!-- <li>
                                <a href="{{ url('/movie') }}">Movies</a>-->
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="{{ url('/home') }}">Movies <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                    <li><a href="{{ url('/imdbmovie') }}">Imdb</a></li>
                                    <li class="divider"></li>
                                    <li><a href="{{ url('/rottenmovie') }}">Rotten Tomatoes</a></li>
                                    <!--<li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">One more separated link</a></li>-->
                                </ul> 

                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="{{ url('/home') }}">More <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('/about') }}">About</a></li>
                                    <li class="divider"></li>
                                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                                    <li class="divider"></li>
                                    <li><a href="{{ url('/term') }}">Terms & Conditions</a></li>
                                    <!--<li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">One more separated link</a></li> -->
                                </ul>

                            </li>
                            
                        </ul>
              <ul class="nav navbar-nav navbar-right">
                           <li class="pull-right">    

                            <form class="navbar-form" method="Post" role="search" action="{{ action('HomeController@search') }}">
                                <div class="input-group" id="serach">
                                    <input type="text" class="form-control" placeholder="Search" name="q"  required="required">
                                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                    </div>
                                </div>
                            </form>
                            
                        </li>
                    </ul>
                </div>
            

            </div> 
        </div>
    </nav>
</header> 


@yield('content')

<footer class="motopress-wrapper footer">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="footer-widgets">
                    <div class="row">
                        <div class="col-md-3">
                            <div id="meta-4">
                                <h4>More</h4> 
                                <ul>
                                    <li><a href="{{ url('/about') }}">About</a></li>
                                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                                    <li><a href="{{ url('/term') }}">Terms & Conditions </a></li>
                                    <!-- <li><a href="" title="Family">Family</a></li> --> </ul>
                                </div> </div>
                                <div class="col-md-3">
                                    <div id="Category"> <h4>Category</h4> <ul>
                                        <li>
                                            <a href="{{ url('/tvShows') }}">Tv Shows</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/movie') }}">Movies</a>
                                        </li>

                                    </ul>
                                </div> </div>
                                <div class="col-md-3">
                                    <div id="archives-4"><h4>Follow Us</h4> <ul>
                                        <li><a href="">Facebook</a></li>
                                        <li><a href="">Twitter</a></li>
                                        <li><a href="">Youtube</a></li>
                                    </ul>
                                </div> </div>
                                <div class="col-md-3">
                                    <div id="social_networks-2">
                                        <h4>Newsletter</h4> 

                                        <ul class="social social__list unstyled">
                                            <li>
                                                <p>Subscribe now to get 100 exclusive photo & two
                                                    newletter per month</p>
                                                </li>
                                                <form method="post" action="{{ action('MoviesController@getdata') }}" role="form" id="registration-form">
                                                    <div class="input-group">
                                                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                                        <input class="form-control" style="border-radius:0px !important;" type="text" id="email" name="email" placeholder="your@email.com">
                                                        <input type="submit" value="Send" class="btn btn-large btn-primary" />
                                                    </div>
                                                </form>
                                            </ul>

                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <div class="copyright">
                                <div class="row">
                                    <div class="span6 col-md-12">
                                        <div id="footer-text" class="footer-text">
                                            <a href="" title="" class="site-name">Copyright @2016 , All right Reserved.</a>
                                        </div> 
                                    </div>
                                    
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </footer>


        <!-- JavaScripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
        <script src="/assets/js/jquery.flexslider.js"></script>
        <script src="/assets/js/jquery.flexslider-min.js"></script>
        <script src="/assets/js/jquery.bxslider.min.js"></script>
        <script src="/assets/js/jquery.validate.js"></script>
        <!-- Twitter JS -->
        
        <script src="/assets/js/index.js"></script>
    </body>
    </html>
