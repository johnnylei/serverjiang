<?php
namespace johnnylei\serverjiang;
use yii\base\Exception;
use yii\log\Target;

/**
 * Created by PhpStorm.
 * User: johnny
 * Date: 17-7-7
 * Time: 下午6:14
 */
class LogTarget extends Target
{
    public $url;

    public function init()
    {
        if(empty($this->url) || !is_string($this->url)) {
            throw new Exception('invalid key');
        }
    }

    public function export()
    {
        $message = current(current($this->messages));
        foreach ($this->url as $url) {
            Post::post($url, [
                'text'=>$message->getMessage(),
                'desp'=>$message->getTraceAsString(),
            ]);
        }
    }
}