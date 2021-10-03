<?php

namespace Swoole;
require_once 'Algoritimos/Algoritimos.php';
require_once 'DataTransferObject/ParametrosDto.php';

use Swoole\Http\Request;
use Swoole\WebSocket\Frame;
use Algoritimos\Algoritimos;
use Swoole\WebSocket\Server;
use DataTransferObject\ParametrosDto;

$server = new Server("0.0.0.0", 9502);

$server->on("Start", function(Server $server) {
    echo "Swoole WebSocket Server is started at http://127.0.0.1:9502\n";
});

$server->on('Open', function(Server $server, Request $request) {
    // $server->tick(1000, function() use ($server, $request) {
    //     $server->push($request->fd, json_encode(["hello", time()]));
    // });
});

$server->on('Message', function(Server $server, Frame $frame) {
    $parametrosDto = new ParametrosDto();
    $algoritimos = new Algoritimos();

    echo "received message: {$frame->data}\n";
    $parametrosDto->tratarEntrada($frame->data);
    $rota = $algoritimos->calcularRota($parametrosDto);
    $server->push($frame->fd, json_encode(["rota" => $rota]));
});

$server->on('Close', function(Server $server, int $fd) {
    echo "connection close: {$fd}\n";
});

$server->on('Disconnect', function(Server $server, int $fd) {
    echo "connection disconnect: {$fd}\n";
});

$server->start();