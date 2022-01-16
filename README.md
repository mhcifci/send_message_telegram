# send_telegram_php
Sending messages simply way your channel or group with php

# Installing
Download with ZIP and extract any folder.

# Example
```
<?php 

require 'ClassTelegram.php';

$token = "YOUR_TOKEN"; // Required!
$channelID = "YOUR_CHANNEL_ID"; // Required!

$telegram = new ClassTelegram($channelID, $token);
$telegram->sendMessage("Type the message you want to send!");
```

# How to Find Channel ID?
#### First add your bot to the group you want to use and run this code and give your Channel ID
```
<?php 

require 'ClassTelegram.php';

$token = "YOUR_BOT_TOKEN"; // Required!

$telegram = new ClassTelegram($token);
echo $telegram->getChannelID(); // returns string
```
# How to Find Bot Token?
![tokenBot](https://i.hizliresim.com/kxe8s1k.jpg)
