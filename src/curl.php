<?php


namespace Easysdk;

/**
 * 通用Curl函数
 * Class curl
 * @package Easysdk
 */
class curl
{
    /**
     * GET
     * @param $url
     * @param array $headerArray
     * @return bool|string
     */
    public function get($url,$headerArray=[])
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        if(count($headerArray)){
            curl_setopt($ch,CURLOPT_HTTPHEADER,$headerArray);
        }
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }
}