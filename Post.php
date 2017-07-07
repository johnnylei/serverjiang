<?php
namespace johnnylei\serverjiang;
/**
 * Created by PhpStorm.
 * User: johnny
 * Date: 17-7-7
 * Time: 下午6:20
 */

class Post
{
    public static function post($url, $data){
        $postdata = http_build_query($data);

        $opts = [
            'http' =>[
                'method'  => 'POST',
                'header'  => [
                    'Content-type: application/x-www-form-urlencoded',
                ],
                'content' => $postdata,
            ]
        ];
        $context = stream_context_create($opts);
        $result = file_get_contents($url, false, $context);
        return $result;
    }
}