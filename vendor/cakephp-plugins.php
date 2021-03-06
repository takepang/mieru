<?php
$baseDir = dirname(dirname(__FILE__));
return [
    'plugins' => [
        'Acl' => $baseDir . '/vendor/cakephp/acl/',
        'Bake' => $baseDir . '/vendor/cakephp/bake/',
        'BootstrapUI' => $baseDir . '/vendor/friendsofcake/bootstrap-ui/',
        'DebugKit' => $baseDir . '/vendor/cakephp/debug_kit/',
        'JcPires/AclManager' => $baseDir . '/vendor/jcpires/cakephp3-aclmanager/',
        'Migrations' => $baseDir . '/vendor/cakephp/migrations/'
    ]
];