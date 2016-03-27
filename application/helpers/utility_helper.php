<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 3/26/16
 * Time: 6:47 PM
 */

if (!function_exists('asset_url'))
{

    function asset_url($uri='')
    {
        return base_url('assets/'.$uri) ;
    }
}

if (!function_exists('video_url'))
{

    function video_url($videoid='')
    {
        $port_wowza='1935';

        $trimmedBaseUrl = parse_url(base_url());

        //$videoid="sample";

        return "rtmp://".$trimmedBaseUrl['host'].":$port_wowza"."/vod/mp4:".$videoid.".mp4";

    }
}

if ( !function_exists('nav_item'))
{
    function nav_item($name='',$uri='')
    {
        $class='';
        if (uri_string()==$uri) {
            $class = 'active';
        }

        return "<li class='". $class . "'>" . anchor($uri, $name) . "</li>";

    }
}