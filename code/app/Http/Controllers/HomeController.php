<?php

namespace App\Http\Controllers;

use Redirect;
use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use Session;
use paginate;
use Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //echo "hi";die;
        //return view('home');
    }
    public function tvshow()
    {
        return view('tvshow');
    }
    public function privacy()
    {
        return view('privacy');
    }
    public function term()
    {
        return view('term');
    }
    public function about()
    {
        return view('about');
    }
    public function contactmail(Request $request)
    {	
    	if(isset($request->email)){
    		$email = DB::table('Contactemail')->pluck('email');
    		$to = $email[0];
    		$subject = "Contact-us Email";
    		$txt = "Comment:".$request->comment;
    		$headers = "From:".$request->email;

    		mail($to,$subject,$txt,$headers);
            ?><script>alert('Thanks For Contact-us');</script><?php
    	}
        return view('contact');
    }
     public function latestMovie()
    {
        $data = DB::table('imdb_data')->where('genre','LIKE','%Family%')->groupBy('title')->orderBy('omdb_id','DESC')->paginate(9);
        return view('latestMovies')->with(['data'=>$data]);
    }
    public function latestSeries()
    {
        $data = DB::table('omdb_data')->where('type','series')->where('genre','Family')->where('rated','!=','PG-13')->groupBy('title')->orderBy('omdb_id','DESC')->paginate(9);
        return view('latestSeries')->with(['data'=>$data]);
    }
    public function favourite()
    {
        $data = DB::table('imdb_data')->where('genre','LIKE','%Family%')->groupBy('title')->orderBy('imdb_rating','DESC')->paginate(9);
        return view('favourite')->with(['data'=>$data]);
    }
    public function popularMovies()
    {
        $data = DB::table('imdb_data')->where('genre','LIKE','%Family%')->groupBy('title')->orderBy('imdb_rating','DESC')->paginate(9);
        return view('popularMovies')->with(['data'=>$data]);
    }
    public function popularSeries()
    {
        $data = DB::table('omdb_data')->where('type','series')->where('genre','Family')->where('rated','!=','PG-13')->groupBy('title')->orderBy('imdb_rating','DESC')->paginate(9);
        return view('popularSeries')->with(['data'=>$data]);
    }
    public function search()
    {     
        $sess=Session::get('q');
        if(!empty($_POST))
        {
          Session::put('q', $_POST['q']);  
          $a=Session::get('q');
          $data = DB::table('imdb_data')->where('title','LIKE','%' .$a. '%')->groupBy('title')->paginate(9);
            return view('search')->with(['data'=>$data]);
        }
        elseif($sess != "") {
            $a=Session::get('q');
            $data = DB::table('imdb_data')->where('title','LIKE','%' .$a. '%')->groupBy('title')->paginate(9);
            return view('search')->with(['data'=>$data]);
        }
        else{
            Session::forget('q');
            return view('search');
        }
    }
    public function tvShows()
    {
       $data = DB::table('omdb_data')->where('type','series')->where('genre','Family')->where('rated','!=','PG-13')->orderBy('poster','ASC')->groupBy('title')->paginate(9);
        return view('tvShows')->with(['data'=>$data]);
    }
     public function imdbmovie()
    {
       $data = DB::table('imdb_data')->where('genre','LIKE','%Family%')->groupBy('title')->paginate(9);
        return view('imdbmovie')->with(['data'=>$data]);
    }
    public function rottenmovie()
    {
       $data = DB::table('rotten')->groupBy('title')->paginate(9);
        return view('rottenmovie')->with(['data'=>$data]);
    }
     public function adminDashboard()
    {
        if(Session::has('email')){
            return view('adminDashboard');
        }else{
            return Redirect::action('HomeController@adminLogin');
        }
    }

    public function adminLogin()
    {
        if(!empty($_POST))
        {
            $email=$_POST['email'];
            $pass=md5($_POST['password']);
            $data = DB::table('users')->where('email',$email)->where('password',$pass)->first();
            if($data == ""){
                ?>
                <script>alert('Please enter valid email and password');</script>
                <?php
                return view('adminLogin');
            }
            else
            {
                Session::put('email', $email);
                if(Session::has('email')){
                    return Redirect::action('HomeController@adminDashboard');
                }
            }
        }
        else
        {
            return view('adminLogin');
        }
    }
    public function adminLogout(){
        Session::flush();
        return Redirect::action('HomeController@adminLogin');
    }

    public function rottenList(){
        if(Session::has('email')){
            $data = DB::table('rotten')->groupBy('title')->paginate(10);
            //dd($data);
            return view('rottenList')->with(['data'=>$data]);
        }else{
            return Redirect::action('HomeController@adminLogin');
        }
    }
    public function imdbList(){
        if(Session::has('email')){
            $data = DB::table('imdb_data')->where('genre','LIKE','%Family%')->groupBy('title')->paginate(10);
            //dd($data);
            return view('imdbList')->with(['data'=>$data]);
        }else{
            return Redirect::action('HomeController@adminLogin');
        }
    }

    public function seriesList(){
        if(Session::has('email')){
            $data = DB::table('omdb_data')->where('type','series')->where('genre','Family')->where('rated','!=','PG-13')->groupBy('title')->paginate(10);
            return view('seriesList')->with(['data'=>$data]);
        }else{
            return Redirect::action('HomeController@adminLogin');
        }
    }

    public function editSeries($id)
    {
      if(Session::has('email')){
        $data = DB::table('omdb_data')->where('omdb_id',$id)->get();
        return view('editSeries')->with(['data'=>$data]);
      }else{
        return Redirect::action('HomeController@adminLogin');
      }
    }
    public function editimdbMovie($id)
    {
        if(Session::has('email')){
        $data = DB::table('imdb_data')->where('omdb_id',$id)->get();
        return view('editimdbMovie')->with(['data'=>$data]);
        }else{
            return Redirect::action('HomeController@adminLogin');
        }
    }
    public function editrottenMovie($id)
    {
        if(Session::has('email')){
        $data = DB::table('rotten')->where('id',$id)->get();
        return view('editrottenMovie')->with(['data'=>$data]);
        }else{
            return Redirect::action('HomeController@adminLogin');
        }
    }
    public function updateSeries(Request $request)
    {
        if(Session::has('email')){
            if($request->hasFile('posterImg')){
              $file = $request->file('posterImg');   
              $desinationPath = base_path().'/assets/seriesImg';
              $docfile = time()."_". $file->getClientOriginalName();
              $databsePath = 'http://'.$_SERVER['HTTP_HOST'] .'/assets/seriesImg/'.$docfile;
              $file->move($desinationPath, $docfile);  
              DB::table('omdb_data')->where('omdb_id',$request->id)->update(['poster' => $databsePath]);
            }
            DB::table('omdb_data')
                ->where('omdb_id', $request->id)
                ->update(['title' => $request->title,'plot' => $request->plot]);
            $data = DB::table('omdb_data')->where('type','series')->where('genre','Family')->where('rated','!=','PG-13')->groupBy('title')->paginate(10);
            return view('seriesList')->with(['data'=>$data]);
        }else{
            return Redirect::action('HomeController@adminLogin');
        }
            
    }
     public function updateMovie(Request $request)
    {
        if(Session::has('email')){
            if($request->hasFile('posterImg')){
              $file = $request->file('posterImg');   
              $desinationPath = base_path().'/assets/movieImg';
              $docfile = time()."_". $file->getClientOriginalName();
              $databsePath = 'http://'.$_SERVER['HTTP_HOST'] .'/assets/movieImg/'.$docfile;
              $file->move($desinationPath, $docfile);  
              DB::table('imdb_data')->where('omdb_id',$request->id)->update(['poster' => $databsePath]);
            }
            DB::table('imdb_data')
                ->where('omdb_id', $request->id)
                ->update(['title' => $request->title,'plot' => $request->plot]);
            $data = DB::table('imdb_data')->where('genre','LIKE','%Family%')->groupBy('title')->paginate(10);
            return view('imdbList')->with(['data'=>$data]);
        }else{
            return Redirect::action('HomeController@adminLogin');
        }
            
    }
    public function updaterotenMovie(Request $request)
    {
        if(Session::has('email')){
            if($request->hasFile('posterImg')){
              $file = $request->file('posterImg');   
              $desinationPath = base_path().'/assets/rottenImg';
              $docfile = time()."_". $file->getClientOriginalName();
              $databsePath = 'http://'.$_SERVER['HTTP_HOST'] .'/assets/rottenImg/'.$docfile;
              $file->move($desinationPath, $docfile);  
              DB::table('rotten')->where('id',$request->id)->update(['poster_image' => $databsePath]);
            }
            DB::table('rotten')
                ->where('id', $request->id)
                ->update(['title' => $request->title,'plot' => $request->plot]);
            $data = DB::table('rotten')->groupBy('title')->paginate(10);
            return view('rottenList')->with(['data'=>$data]);
        }else{
            return Redirect::action('HomeController@adminLogin');
        }
            
    }

    public function settings()
    {
        if(Session::has('email')){
            $data = DB::table('Contactemail')->get();
            return view('settings')->with(['data'=>$data]);
        }else{
             return Redirect::action('HomeController@adminLogin');
        }
    }

    public function editsettings($id)
    {
        if(Session::has('email')){
            $data = DB::table('Contactemail')->where('id',$id)->get();
            return view('setting-email')->with(['data'=>$data]);
        }else{
            return Redirect::action('HomeController@adminLogin');
        }
    }

     public function updatesettings(Request $request)
    {
        if(Session::has('email')){
            DB::table('Contactemail')->where('id', $request->id)->update(['email' => $request->email]);
            $data = DB::table('Contactemail')->get();
            return view('settings')->with(['data'=>$data]);
        }else{
            return Redirect::action('HomeController@adminLogin');
        }
            
    }
    public function Addsliderimg(Request $request)
    {
        if(Session::has('email')){
            
            if($request->hasFile('sliderimg')){
              $file = $request->file('sliderimg');   
              $desinationPath = base_path().'/assets/sliderImg';
              $docfile = time()."_". $file->getClientOriginalName();
              $databsePath = 'http://'.$_SERVER['HTTP_HOST'] .'/assets/sliderImg/'.$docfile;
              $file->move($desinationPath, $docfile);  
              DB::table('slider-img')->insert(['imgname' =>$request->imgname ,'imgpath'=>$databsePath]);
            }
            
            $data = DB::table('slider-img')->count(); 
            return view('addsliderimg')->with(['data'=>$data]);
        }else{
            return Redirect::action('HomeController@adminLogin');
        }
    }

    public function sliderimgList()
    {
        if(Session::has('email')){
            $data = DB::table('slider-img')->get();
            return view('sliderimgList')->with(['data'=>$data]);
        }else{
            return Redirect::action('HomeController@adminLogin');
        }
    }
    public function editSliderimg($id)
    {
        if(Session::has('email')){
            $data = DB::table('slider-img')->where('id',$id)->get();
            return view('editSliderimg')->with(['data'=>$data]);
        }else{
            return Redirect::action('HomeController@adminLogin');
        }
    }

    public function updatesliderImg(Request $request)
    {
        if(Session::has('email')){
            if($request->hasFile('posterImg')){
              $file = $request->file('posterImg');   
              $desinationPath = base_path().'/assets/sliderImg';
              $docfile = time()."_". $file->getClientOriginalName();
              $databsePath = 'http://'.$_SERVER['HTTP_HOST'] .'/assets/sliderImg/'.$docfile;
              $file->move($desinationPath, $docfile);  
              DB::table('slider-img')->where('id',$request->id)->update(['imgpath' => $databsePath]);
            }
            DB::table('slider-img')->where('id',$request->id)->update(['imgname' => $request->name]);
            $data = DB::table('slider-img')->get();
            return view('sliderimgList')->with(['data'=>$data]);
        }else{
            return Redirect::action('HomeController@adminLogin');
        }
            
    }

    public function delsliderImg($id)
    {
        DB::table('slider-img')->where('id', $id)->delete();
        $data = DB::table('slider-img')->get();
        return view('sliderimgList')->with(['data'=>$data]);
    }
}

