<?php
use ElephantIO\Client as ElephantIOClient;
include("elephantio/Client.php");
$elephant = new ElephantIOClient('http://localhost:3000', 'socket.io', 1, false, false, true);
$elephant->setHandshakeTimeout(1000);
$elephant->init();
$elephant->send(
ElephantIOClient::TYPE_EVENT, null, null, json_encode(array('name' => 'iotoserver', 'args' => array('channel' => 'my_first_channel', 'message' => 'my message to all the online users')))
    );
$elephant->close();
?>