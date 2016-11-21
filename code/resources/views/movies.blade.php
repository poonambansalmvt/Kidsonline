@extends('layouts.app')

@section('content')


<div class="motopress-wrapper content-holder clearfix main-holder">
  <div class="container">
    <div class="row">
      <div class="flexslider">
        <ul class="slides">
          <?php
          foreach ($dataslider as $key => $value) {
            ?>
            <li>
              <img src="<?php echo $value->imgpath;?>" />
            </li>
            <?php
            
          }

          ?>
          

        </ul>
      </div>
      

    </div>

    <div class="row text-left">

      <div class="col-md-4 hero-feature padding-leftright">
        <div class="thumbnail">
          <div class="latestImg">
          <a href="{{ url('/singlemovie')}}/<?php echo $dataonem->omdb_id; ?>" title="Kids Online">
            <img src="<?php if($dataonem->poster != 'N/A'){echo $dataonem->poster;}else{ echo "http://".$_SERVER['HTTP_HOST']."/assets/images/default-slide-img.jpg";}?>" alt="">
            </a>
          </div>
          <div class="caption">
            <h3>LATEST MOVIES</h3>
            <a href="{{ url('/singlemovie')}}/<?php echo $dataonem->omdb_id; ?>" title="Kids Online"><label style="color:#fff;cursor:pointer;"><?php $title = $dataonem->title; echo substr($title,0,30).". . . ."; ?></label>
            </a>
            <p>
            <?php $des = $dataonem->plot; 
                echo substr($des,0,35).". . . .";
                ?>
              </p>

            </div>
          </div>
          <div class="hero-featuresecond caption">
            <a href="{{ url('/latestMovies') }}" class="btn btn-primary" title="Latest episodes">See all</a>

          </div>
        </div>

        <div class="col-md-4 hero-feature padding-leftright">
          <div class="thumbnail">
          <div class="latestImg">
          <a href="{{ url('/singlemovie')}}/<?php echo $dataones->omdb_id; ?>" title="Kids Online">
            <img src="<?php if($dataones->poster != 'N/A'){echo $dataones->poster;}else{ echo "http://".$_SERVER['HTTP_HOST']."/assets/images/default-slide-img.jpg";}?>" alt="">
            </a>
          </div>
            <div class="captions">
              <h3>LAST ADDED SHOW</h3>
              <a href="{{ url('/singlemovie')}}/<?php echo $dataones->omdb_id; ?>" title="Kids Online"><label style="color:#fff;cursor:pointer;"><?php $title = $dataones->title; echo substr($title,0,30).". . . ."; ?></label>
              </a>
              <p>
              <?php $des = $dataones->plot; 
                echo substr($des,0,35).". . . .";
                ?>
              </p>

              </div>
            </div>
            <div class="hero-featuresecond caption">
              <a href="{{ url('/latestSeries') }}" class="btn btn-primary" title="Latest episodes">See all</a>

            </div>
          </div>

          <div class="col-md-4 hero-feature padding-leftright">
            <div class="thumbnail">
              <div class="latestImg">
              <a href="{{ url('/singlemovie')}}/<?php echo $dataonef->omdb_id; ?>" title="Kids Online">
              <img src="<?php if($dataonef->poster != 'N/A'){echo $dataonef->poster;}else{ echo "http://".$_SERVER['HTTP_HOST']."/assets/images/default-slide-img.jpg";}?>" alt="">
              </a>
          </div>
              <div class="captionThree">
                <h3>FAVOURITE</h3>
                <a href="{{ url('/singlemovie')}}/<?php echo $dataonef->omdb_id; ?>" title="Kids Online"><label style="color:#fff;cursor:pointer;"><?php $title = $dataonef->title; echo substr($title,0,30).". . . ."; ?></label>
                </a>
                <p><?php $des = $dataonef->plot; 
                    echo substr($des,0,35).". . . .";
                ?></p>

                </div>
              </div>
              <div class="hero-featuresecond caption">
                <a href="{{ url('/favourite') }}" class="btn btn-primary" title="Latest episodes">See all</a>

              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 padding-leftright">
              <div class="box">
                <h2>popular movies</h2>
                <ul class="posts-grid row-fluid unstyled popular">
                <?php 
                    $i = 1;
                    foreach ($data as $key => $value) {
                      ?>
                          
                            <li class="span4 item_<?php echo $i; ?>">
                            <figure class="featured-thumbnail thumbnail"><a href="{{ url('/singlemovie')}}/<?php echo $value->omdb_id; ?>" title="Kids Online">
                            <img class="img-size" src="<?php if($value->poster != 'N/A'){echo $value->poster;}else{ echo "http://".$_SERVER['HTTP_HOST']."/assets/images/default-slide-img.jpg";}?>" alt="Kids Online"></a></figure>
                             <div class="clear"></div>
                             <div class="post_meta">
                              <span class="post_comment"><a href="" class="comments_link">
                                  <?php 
                                    $rating = $value->imdb_rating; 
                                      echo number_format($rating,1);
                                  ?></a>
                              </span>
                            </div>
                            <p class="excerpt">
                              <a href="" title="Kids Online">
                                <?php 
                                    $des = $value->plot; 
                                    echo $string = substr($des,0,30).'...';
                                ?>
                              </a></p>
                              </li>
                      <?php
                      $i++;
                    }
                 ?>
                          </ul>

                        </div>
                        <div class="hero-featuresecond caption">
                          <a href="{{ url('/popularMovies') }}" class="btn btn-primary" title="Latest episodes">See all</a>
                        </div>

                      </div>
                      <div class="col-md-4 padding-leftright">
                       <div class="box">
                         <h2>popular series</h2>
                         <ul class="posts-grid row-fluid unstyled popular">
                          <?php 
                            $i = 1;
                            foreach ($dataps as $key => $value) {
                          ?>
                           <li class="span4 item_<?php echo $i; ?>">
                             <figure class="featured-thumbnail thumbnail"><a href="{{ url('/singlemovie')}}/<?php echo $value->omdb_id; ?>" title="Kids Online"><img class="img-size" src="<?php if($value->poster != 'N/A'){echo $value->poster;}else{ echo "http://".$_SERVER['HTTP_HOST']."/assets/images/default-slide-img.jpg";}?>"></a></figure>
                             <div class="clear"></div>
                             <div class="post_meta">
                               <span class="post_comment"><a href="" class="comments_link"><?php 
                                    $rating = $value->imdb_rating; 
                                      echo number_format($rating,1);
                                  ?></a></span>
                             </div>
                             <p class="excerpt">
                              <a href="" title="Kids Online"><?php 
                                    $des = $value->plot; 
                                    echo $string = substr($des,0,30).'...';
                                ?></a></p>
                              </li>
                              <?php
                      $i++;
                    }
                 ?>  
                                </ul>

                              </div>
                              <div class="hero-featuresecond caption">
                               <a href="{{ url('/popularSeries') }}" class="btn btn-primary" title="Latest episodes">See all</a>
                             </div>

                           </div>
                           <div class="col-md-4 padding-leftright">
                             <div class="box_1">
                               <h2>REVIEWS</h2>
                               <div class="accordion" id="accordion">
                                <div class="accordion-group">
                                  <div class="accordion-heading">
                                    <a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordion" href="#panel1">Lorem ipsum dolor sit amet cons</a>
                                  </div>
                                  <div id="panel1" class="accordion-body in collapse">
                                    <div class="accordion-inner">
                                      Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et</div>
                                    </div>
                                  </div>
                                  <div class="accordion-group">
                                    <div class="accordion-heading">

                                      <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#panel2">Ipsum dolor sit amet cons</a>


                                    </div>
                                    <div id="panel2" class="accordion-body  collapse">
                                      <div class="accordion-inner">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et</div>
                                    </div>
                                  </div>
                                  <div class="accordion-group">
                                    <div class="accordion-heading">

                                      <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#panel3">Ipsum dolor sit amet cons</a>


                                    </div>
                                    <div id="panel3" class="accordion-body  collapse">
                                      <div class="accordion-inner">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et</div>
                                    </div>
                                  </div>
                                  <div class="accordion-group">
                                    <div class="accordion-heading">

                                      <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#panel4">Ipsum dolor sit amet cons</a>


                                    </div>
                                    <div id="panel4" class="accordion-body  collapse">
                                      <div class="accordion-inner">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et</div>
                                    </div>
                                  </div>
                                  <div class="accordion-group">
                                    <div class="accordion-heading">

                                      <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#panel5">Ipsum dolor sit amet cons</a>


                                    </div>
                                    <div id="panel5" class="accordion-body  collapse">
                                      <div class="accordion-inner">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et</div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                            </div>


                          </div>

                        </div>
                      </div>

                    </div>


                  </div>
                  @endsection
