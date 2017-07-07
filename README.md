## yii2 server jiang
server酱是做什么的，请参考[官网](http://sc.ftqq.com/3.version)

「Server酱」，英文名「ServerChan」，是一款「程序员」和「服务器」之间的通信软件。

#### install
```
composer require --prefer-dist johnnylei/serverjiang
```

#### usage
```
'log' => [
    'traceLevel' => YII_DEBUG ? 3 : 0,
    'targets' => [
        [
            'class' => 'johnnylei\server_jiang\LogTarget',
            'levels' => ['error', 'warning'],
            'url'=>[
                // server 酱系统给的url
                'https://sc.ftqq.com/SCU9937T32fb9a9f3cc46b744e7835cf52a690fa595f1234698.send'
            ],
        ],
],
```
