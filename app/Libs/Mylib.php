<?php
namespace App\Libs;


class Mylib{
	public $key = 'test_key';

	function sendCurlGet($url = null){
        $curl = curl_init();
        // $url = 'http://192.168.1.99/rscm/app/ajaxreq/db/m_daftarmandiri/laporan_pendaftaran_px_soft_by_bill/RJ/BL221117.0007/20';
        
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                // Set Here Your Requesred Headers
                'Content-Type: application/json',
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            // print_r(json_decode($response));
            return $response;
        }
    }
}