<?php

$entryData = [
    'category' => "Web RTC Test",
    'topic' => "Real time communication PHP",
    'title'    => "Test",
    'article'  => "This is a experimental push",
    'when'     => time()
    ];
$context = new ZMQContext();
$socket = $context->getSocket(ZMQ::SOCKET_PUSH, 'mysocket');
$socket->connect("tcp://localhost:5555");
$socket->send(json_encode($entryData));