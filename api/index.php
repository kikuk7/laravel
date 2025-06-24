<?php
require __DIR__.'/../vendor/autoload.php';

(new Laravel\Serverless\Application(
    realpath(__DIR__.'/../')
))->handle(
    \Laravel\Serverless\Facades\Serverless::request()
)->send();