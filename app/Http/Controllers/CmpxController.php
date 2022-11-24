<?php

namespace App\Http\Controllers;
// use App\Models\Wp_post;
// use App\Providers\MyServiceProvider;
// use Illuminate\Support\ServiceProvider;

class CmpxController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    static $base_url_ws = 'http://192.168.1.99/rscm/app/';
    static $myLib;

    public function __construct()
    {
        //
        self::$myLib = new \App\Libs\Mylib();
    }

    public function index(){
        return json_encode([
            "title" => "Posts",
            "posts" => ['a','b','c'], //, Post::all(),
            // "tes" => Wp_post::all(),
            "tes" => Wp_post::first(),
            // "tes" => Post::tes(), //, Post::all(),
        ]);
    }
    
    // public static function posts_type($type=null){
    //     // return json_encode(Wp_post::posts_type($type));
    //     $_Wp_post = new Wp_post;
    //     return json_encode($_Wp_post->posts_type($type));
    //     // return json_encode($this->Wp_post->posts_type($type));
    // }

    
    public static function sendCurlGet($tgl=null){
        // $myLib = new MyServiceProvider;
        // $base_url = 'http://192.168.1.99/rscm/app/';
        $url = self::$base_url_ws.'ajaxreq/db/m_daftarmandiri/laporan_pendaftaran_px_soft/ALL/'.$tgl;

        // $myLib = new \App\Libs\Mylib();
        return self::$myLib->sendCurlGet($url);
    }


    public static function listPxByDateLokasi($tgl=null){
        // $a = self::curl_get('http://192.168.1.99/rscm/app/ajaxreq/db/m_daftarmandiri/laporan_pendaftaran_px_soft_by_bill/RJ/BL221117.0007/20');

        $a = self::curl_get('http://192.168.1.99/rscm/app/ajaxreq/db/m_daftarmandiri/laporan_pendaftaran_px_soft/ALL/'.$tgl);
        return $a;


    }

    //
}
