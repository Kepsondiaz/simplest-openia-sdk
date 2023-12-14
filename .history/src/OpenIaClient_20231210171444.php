<?php
// ApiClient/ApiClient.php

class OpenIaClient {
    private $OpenIaApiKey;
    private $OpenIaBaseUrl = 'h';

    public function __construct($OpenIaApiKey) {
        $this->OpenIaApiKey = $OpenIaApiKey;
    }
  
}
