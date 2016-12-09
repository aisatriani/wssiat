<?php
/**
 * Created by PhpStorm.
 * User: azisa
 * Date: 12/9/2016
 * Time: 9:45 PM
 */

namespace App;


class Api
{

    /**
     * @param  string $service
     * @param array $param
     * contoh @param['service'] untuk service
     */
    public static function getService($service, $data = [])
    {
        $data['service'] = $service;
        $data['username'] = 'wsinformatika';
        $data['pass'] = 'FAT3KdiZOn@rekayaza';

        //dd($data);

        $is_compressed = 1;

        if ($is_compressed==1) {
            $data=base64_encode(gzcompress(json_encode($data),9));
        } else {
            $data = base64_encode(json_encode($data));
        }

        $url = 'http://siat.ung.ac.id/api/index.php';
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, array('data' => $data, 'compressed' => $is_compressed));
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_URL, $url);

        if ($is_compressed==true) $response = json_decode(gzuncompress(base64_decode(curl_exec($curl))), TRUE);
        else $response = json_decode(base64_decode(curl_exec($curl)), TRUE);

        $json = gzuncompress(base64_decode(curl_exec($curl)));

        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);

        return $response;

//        echo $status;
//        echo "<pre>";
//        print_r($response);
//        echo "</pre>";
    }

    public static function test()
    {
        return 'function coba';
    }

}