<?php
require "vendor/autoload.php";
$uri = "https://gcm-http.googleapis.com/gcm/send";
/*
to: es el registration id a donde se envia la notificación
data: son los datos que se recibe en el dispositivo

Authorization key: es la api key que se genera en google console

Se puede utilizar también:
{ "data": {
    "score": "5x1",
    "time": "15:10"
  },
  "registration_ids" : ["APA91bHun4MxP5egoKMwt2KZFBaFUH-1RYqx...",""]	
}

*/
$body = '{ "to" : "ed0Fs8AuOWU:APA91bENQeLL_V...", "data" : { "title":"Titulo ", "subtitle":"Subtitulo", "count_ads":12,"otrodato":"valor" } }';
$response = \Httpful\Request::post($uri)
			->sendsJson()
			->body($body)
			->addHeaders(array(
        		'Authorization' => 'key=AIzaSyB9Bv3VoL....',
    		))
			->send();
echo "<pre>";
echo json_encode($response->body,JSON_PRETTY_PRINT);
