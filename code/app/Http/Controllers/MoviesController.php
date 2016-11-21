<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class MoviesController extends Controller
{
	public function movies($id)
    {
        $data = DB::table('imdb_data')->where('omdb_id',$id)->get();
        return view('singlemovie')->with(['data'=>$data]);
    }
    public function rottensmovie($id)
    {
        $data = DB::table('rotten')->where('id',$id)->get();
        return view('rottensmovie')->with(['data'=>$data]);
    }
     public function getdata(Request $request)
    {
        /*Popular movies*/
        $data = DB::table('imdb_data')->where('genre','LIKE','%Family%')->orderBy('imdb_rating','DESC')->orderBy('imdb_rating','DESC')->groupBy('title')->take(3)->get();
        //dd($data);die();

        /*Popular series*/
        $dataps = DB::table('omdb_data')->where('type','series')->where('genre','Family')->where('rated','!=','PG-13')->orderBy('imdb_rating','DESC')->orderBy('imdb_rating','DESC')->groupBy('title')->take(3)->get();

        /*For latest movie*/
        $dataonem = DB::table('imdb_data')->where('genre', 'LIKE', '%Family%')->orderBy('omdb_id','DESC')->first();


        /*For latest series*/
        $dataones = DB::table('omdb_data')->where('type','series')->where('genre','Family')->where('rated','!=','PG-13')->orderBy('omdb_id','DESC')->first();

        /*For favourites*/
        $dataonef = DB::table('imdb_data')->where('genre','LIKE','%Family%')->orderBy('imdb_rating','DESC')->first();

        /*For slider images*/
        $dataslider = DB::table('slider-img')->get();


        if(isset($request->email)){
            $nw_email = $request->email;
            DB::table('Newsletteremail')->insert(['newsletter_email' => $nw_email]);
            $email = DB::table('Contactemail')->pluck('email');
            $to = $nw_email;
            $subject = "Newsletter Email";
            $txt = "Thanks For Subscribing Our Newsletter.";
            $headers = "From:".$email[0];
            mail($to,$subject,$txt,$headers);
            ?><script>alert('Newsletter Subscription Done');</script><?php
        }

        return view('movies')->with([
            'data'       => $data,
            'dataps'     => $dataps,
            'dataonem'   => $dataonem,
            'dataones'   => $dataones,
            'dataonef'   => $dataonef,
            'dataslider' => $dataslider
        ]);
    }
}
