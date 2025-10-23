<?php

namespace Zhengbingdong\IpAddr;

/**
 * IP解析工具类
 * Class DateTools
 */

class IpAddrClient{

    /**
     * [get 解析IP]
     * @since  2025-10-23
     * @author Dai哥
     * @param  [type]     $ip [IP地址]
     * @return [type]         [description]
     */
    public static function get($ip)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://ip.zhengbingdong.com/v1/get?ip=".$ip,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {

            return [];

        } else {

            return json_decode($response, true);
        }
    }
}