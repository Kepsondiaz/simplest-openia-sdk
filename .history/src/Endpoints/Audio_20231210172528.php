<?php
// ApiClient/ApiClient.php

class Au {
    private $OpenIaApiKey;
    private $OpenIaBaseUrl = 'https://api.openai.com/v1/';

    public function __construct($OpenIaApiKey) {
        $this->OpenIaApiKey = $OpenIaApiKey;
    }
  
}