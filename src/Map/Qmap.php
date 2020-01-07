<?php
namespace Easysdk\Map;

/**
 * 腾讯地图开放平台服务端SDK
 * Class Qmap
 * @package Easysdk\Map
 */
class Qmap
{
    public $key;

    const geocoder_url = "https://apis.map.qq.com/ws/geocoder/v1/?";//逆地址解析

    /**
     * 构造函数
     * Qmap constructor.
     * @param $key
     */
    public function __construct($key)
    {
        $this->key = $key;
    }

    /**
     * 请求方法
     * @param $url
     * @return bool|string
     */
    private function get($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);
        return json_decode($output,true);
    }

    /**
     * 拼接字段
     * @param $data
     * @return string
     */
    private function query($data)
    {
        $temp = [];
        $data['key'] = $this->key;
        foreach ($data as $key=>$item){
            $temp[] = $key."=".$item;
        }
        return implode("&",$temp);
    }

    /**
     * 逆地址解析
     * @param $location
     * @param int $get_poi
     * @param string $poi_options
     * @param string $output
     * @return bool|string
     */
    public function geocoder($location,$get_poi=0,$poi_options="",$output="JSON")
    {
        $data = [
            "location"=>$location,
            "get_poi"=>$get_poi,
            "output"=>$output
        ];
        if($poi_options) $data['poi_options'] = $poi_options;//附加选项
        return $this->get(self::geocoder_url.$this->query($data));
    }
}