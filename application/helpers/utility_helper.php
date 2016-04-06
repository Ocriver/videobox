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
    

if ( !function_exists('user_login_nav'))
{
    function user_login_nav($user_id='')
    {
        //TODO: Navbar login
        if(!$user_id ==='')
        {
            return $user_id->username;
        }
        else {
            return "<form class=\"navbar-form navbar-right\" role=\"form\" action='user/login'>
                        <div class=\"form-group\">
                            <input type=\"text\" placeholder=\"Email\" class=\"form-control\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"password\" placeholder=\"Password\" class=\"form-control\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-success\">Sign in</button>
            </form>";
        }
    }
}


if (!function_exists('req_logged_in'))
{
    function req_logged_in()
    {
        $CI =& get_instance();
        
        if (!$CI->login_model->logged_in())
        {
            redirect('user/login');
        }
    }
}
