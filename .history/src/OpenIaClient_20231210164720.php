<?php
// ApiClient/ApiClient.php

class OpenIaClient {
    private $OpenIaapiKey;
    private $baseUrl = 'https://api.googlepalm.com';

    public function __construct($apiKey) {
        $this->apiKey = $apiKey;
    }

    public function post($endpoint, $data) {
        
    }

    // Ajoutez d'autres méthodes nécessaires pour les requêtes GET, etc.
}
