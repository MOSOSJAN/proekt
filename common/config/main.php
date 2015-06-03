<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,

            'rules'=>[
                //'/' => 'site/index',
                '<controller:\w+>/<action:\w+>/'=>'<controller>/<action>',
            ]
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

    ],
];
