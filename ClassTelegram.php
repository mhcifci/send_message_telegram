<?php 

/**
 * @author Mahmut Can ÇİFÇİ
 * @version v.0.1
 * @param This class covers everything.
 */


class ClassTelegram {

	public $channelID;
	public $token;
	public $bot_url;

	public function __construct($token, $channelID = "") {
		$this->bot_url = "https://api.telegram.org/bot";
		$this->token 		= $token;
		$this->channelID 	= $channelID;
	}

	public function getChannelID(){
		$token = $this->token;
		$get = $this->bot_url.$this->token."/getUpdates";
		$data = json_decode(file_get_contents($get));
		return $data->result[0]->message->from->id;
	}

	public function sendMessage($text, $channelID){
		$get = $this->bot_url.$this->token."/sendMessage?chat_id=".$channelID."&text=".urlencode($text)."&parse_mode=html";
		file_get_contents($get);
	}
}
