<?php

use OpenIaClient;

class Audio {
    private $client;
    
    private $OpenIaBaseUrl = 'https://api.openai.com/v1/audio/';

    public function __construct($OpenIaApiKey) {
        $this->client = new OpenIaClient($OpenIaApiKey);
        
    }

    public function createSpeech()
    {
        $url = $this->OpenIaBaseUrl . 'speech';

        $response = $this->httpClient->post($url, [
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'json' => $data,
        ]);

        return $response->getBody()->getContents();
    }
  
}