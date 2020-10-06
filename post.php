<?php
//include_once 'vendor/autoload.php';

$entryData = array(
    'category' => "webrtc",
    'topic' => "WEB RTC",
    'title'    => "Real time",
    'article'  => "This is a real time push",
    'when'     => time()
    );
$context = new ZMQContext();
$socket = $context->getSocket(ZMQ::SOCKET_PUSH, 'my pusher');
$socket->connect("tcp://localhost:5555");
$socket->send(json_encode($entryData));