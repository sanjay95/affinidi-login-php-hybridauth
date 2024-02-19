<?php

include 'vendor/autoload.php';
include 'config.php';

use Hybridauth\Exception\Exception;
use Hybridauth\HttpClient;

try {

    $adapter = new \Affinidi\HybridauthProvider\AffinidiProvider($config['affinidi']);
    if($adapter->isConnected()) {
        HttpClient\Util::redirect('/');
        return;
    }
    $adapter->authenticate();

} catch (Exception $e) {
    echo $e->getMessage();
}