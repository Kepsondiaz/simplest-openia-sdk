<?php

use OpenIaClient;

class Audio {
    private $client;
    private $OpenIaBaseUrl = 'https://api.openai.com/v1/audio/';

    public function __construct($OpenIaApiKey) {
        $this->client = new OpenIaClient($OpenIaApiKey);
    }

    public function createSpeech
  
}