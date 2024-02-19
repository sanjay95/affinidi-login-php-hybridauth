<?php

include 'vendor/autoload.php';
include 'config.php';

use Hybridauth\Exception\Exception;
use Hybridauth\HttpClient;

try {
    $adapter = new \Affinidi\HybridauthProvider\AffinidiProvider($config['affinidi']);
    $adapter->disconnect();
    HttpClient\Util::redirect('/');

} catch (Exception $e) {
    echo $e->getMessage();
}