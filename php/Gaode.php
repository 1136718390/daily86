<?php

require_once("./Curl.php");

class Levi_Gaode
{
    const KEY = '244e75e78d7110304a626f6b1c3e5f03';

    const URL_LIST = array(
        'getWeather' => 'https://restapi.amap.com/v3/weather/weatherInfo'
    );

    public static function getBaseWeather($abCode = '110105')
    {
        $params = [
            'key' => self::KEY,
            'city' => $abCode,
            'extensions' => 'base',
            'output' => 'JSON',
        ];
        $weatherInfo = Util_Curl::httpGet(self::URL_LIST['getWeather'], $params);

        return $weatherInfo['lives'][0];
    }

    public static function getAllWeather($abCode = '110105')
    {
        $params = [
            'key' => self::KEY,
            'city' => $abCode,
            'extensions' => 'all',
            'output' => 'JSON',
        ];
        $weatherInfo = Util_Curl::httpGet(self::URL_LIST['getWeather'], $params);

        return $weatherInfo['forecasts'];
    }
}