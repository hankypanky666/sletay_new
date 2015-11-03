<?php
return [
    'language' => 'ru-RU',
    'charset' => 'utf-8',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules'=>array(
                // стандартное правило для обработки '/' как 'site/index'
                '' => 'site/index',
                // это пример добавления который заработал
                'user/<action:.*>'=>'user/<action>',
                '<action:.*>'=>'site/<action>', //закомментил а то глючило с ним
                '<controller:\w+>/<id:\d+>'=>'<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
            ),
        ],
    ],
];
