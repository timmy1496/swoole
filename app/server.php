<?php

declare(strict_types=1);

use Swoole\Http\Request;
use Swoole\Http\Response;
use Swoole\Http\Server;

$http = new Server("0.0.0.0", 9501);

$http->on(
    "start",
    function (Server $http) {
        echo "Swoole HTTP server is started.\n";
    }
);
$http->on(
    "request",
    function (Request $request, Response $response) {
        $str = '';
        for ($i = 0; $i < 1000000; $i++) {
            $str .= 's';
        }
        $rnd = rand(1, 100);
        $response->end("Hello swoole, {$rnd} {$str} \n");
    }
);

$http->start();
