<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'modules' => [
        'blog' => [
            'class' => akiraz2\blog\Module::class,
            'urlManager' => 'urlManager',// 'urlManager' by default, or maybe you can use own component urlManagerFrontend
            'imgFilePath' => '@frontend/web/img/blog/',
            'imgFileUrl' =>'/msoindonesia/frontend/web/img/blog',
            'userModel' => \common\models\User::class,
            'userPK' => 'id', //default primary key for {{%user}} table
            'userName' => 'username', //uses in view (may be field `username` or `email` or `login`)
        ],
     ], 
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'formatter' => [ //for the showing of date datetime
            'dateFormat' => 'yyyy-MM-dd',
            'datetimeFormat' => 'yyyy-MM-dd HH:mm:ss',
            'decimalSeparator' => '.',
            'thousandSeparator' => ' ',
            'currencyCode' => 'EUR',
        ],
    ],
];
