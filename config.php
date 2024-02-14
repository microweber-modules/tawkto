<?php
$config = array();
$config['name'] = "Tawk.to";
$config['author'] = "Microweber";
$config['no_cache'] = false;
$config['ui'] = false;
$config['ui_admin'] = true;
$config['categories'] = "miscellaneous";
$config['position'] = 39;
$config['version'] = 1.1;

$config['settings'] = [];

$config['settings']['routes']['admin'] = 'admin.tawkto.index';

$config['settings']['autoload_namespace'] = [
    [
        'path' => __DIR__ . '/src/',
        'namespace' => 'MicroweberPackages\\Modules\\Tawkto'
    ],
];

$config['settings']['service_provider'] = [
    \MicroweberPackages\Modules\Tawkto\Providers\TawktoServiceProvider::class
];
