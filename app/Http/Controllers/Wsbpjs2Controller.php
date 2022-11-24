<?php

namespace App\Http\Controllers;
// use App\Models\Wp_post;
// use App\Providers\MyServiceProvider;
// use Illuminate\Support\ServiceProvider;
use App\Libs\Wsbpjs2lib;

class Wsbpjs2Controller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    static $Wsbpjs2lib;
    static $vclaimVersion = "vclaim2.0";

    public function __construct()
    {
        self::$Wsbpjs2lib  = new Wsbpjs2lib;
    }

    public static function wsheader(){
        // $Wsbpjs2lib = new Wsbpjs2lib;
        // $Wsbpjs2lib = new \App\Libs\Wsbpjs2lib();
        return self::$Wsbpjs2lib->ws_header_encript_MY();
        // return ws_header_encript_MY();
    }

    // public static function ws_arr($noka){
    // public static function peserta($noka=null, $tglSep==null){
    public static function peserta($noka=null, $tglSep = null){
        // $Wsbpjs2lib = new Wsbpjs2lib;
        // $Wsbpjs2lib = new \App\Libs\Wsbpjs2lib();
        // $tglSep = null;
        $tglSep = ($tglSep==null)? date('Y-m-d'): $tglSep;
        // exit(json_encode([$noka, $tglSep] ));
        $path = 'Peserta/nokartu/'.$noka.'/tglSEP/'.$tglSep;
    
        // $res = $this->ws_bpjs_2->ws_arr($this->vclaimVersion, 'GET', $path, ''); // arr
        $res = self::$Wsbpjs2lib->ws_arr(self::$vclaimVersion, 'GET', $path, ''); // arr

        return $res;
        // return ws_header_encript_MY();
    }


}