<?php
return [
    'css' => [
        'belugino.css'
    ],
    'helpers' => [
        'factories' => [
            'BeluginoCover\View\Helper\BeluginoCover\BeluginoCover' => 'BeluginoCover\View\Helper\BeluginoCover\BeluginoCoverFactory',
        ],
        'aliases' => [
            'BeluginoCover' => 'BeluginoCover\View\Helper\BeluginoCover\BeluginoCover',
        ]
    ]
];
