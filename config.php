<?php
$config = array();
$config['name'] = "Tawk.to";
$config['author'] = "Microweber";
$config['no_cache'] = false;
$config['ui'] = false;
$config['ui_admin'] = true;
$config['categories'] = "miscellaneous";
$config['position'] = 39;
$config['version'] = 1.0;

$config['settings'] = [];
$config['settings']['autoload_namespace'] = [
    [
        'path' => __DIR__ . '/src/',
        'namespace' => 'MicroweberPackages\\Modules\\Tawkto'
    ],
];

$config['settings']['service_provider'] = [
    \MicroweberPackages\Modules\Tawkto\Providers\TawktoServiceProvider::class
];
