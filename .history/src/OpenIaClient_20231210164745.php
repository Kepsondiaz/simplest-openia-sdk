<?php
// ApiClient/ApiClient.php

class OpenIaClient {
    private $OpenIaApiKey;
    private $OpenIaBaseUrl = 'h';

    public function __construct($apiKey) {
        $this->apiKey = $apiKey;
    }

    public function post($endpoint, $data) {
        
    }

    // Ajoutez d'autres méthodes nécessaires pour les requêtes GET, etc.
}
