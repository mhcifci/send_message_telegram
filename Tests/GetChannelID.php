<?php 

require '../ClassTelegram.php';

$token = "YOUR_BOT_TOKEN"; // Required!

$telegram = new ClassTelegram($token);
echo $telegram->getChannelID();