<?php
require "vendor/autoload.php";
$uri = "https://gcm-http.googleapis.com/gcm/send";
$response = \Httpful\Request::post($uri)
			->sendsJson()
			->body('{ "to" : "ed0Fs8AuOWU:APA91bENQeLL_V2Oga6XaGMmHu1datIQE7Sh3iHV2hozYGHgrJ4_BX4MEAYi9yfsfpnuhSQA6GYR1jrii-4dYSljkClHTL8azRiUyvhp9UOFmQDyAtIsre9Np8N7AwqSwqqiCVtWni7b", "data" : { "title":"Titulo ", "subtitle":"Subtitulo", "count_ads":12,"otrodato":"valor" } }')
			->addHeaders(array(
        		'Authorization' => 'key=AIzaSyB9Bv3VoLZwKrwW9_WDMotcIH20GADCOgg',
    		))
			->send();
echo "<pre>";
echo json_encode($response->body,JSON_PRETTY_PRINT);
