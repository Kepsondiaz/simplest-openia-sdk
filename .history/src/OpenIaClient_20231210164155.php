<?php
// ApiClient/ApiClient.php

class ApiClient {
    private $apiKey;
    private $baseUrl = 'https://api.googlepalm.com';

    public function __construct($apiKey) {
        $this->apiKey = $apiKey;
    }

    public function post($endpoint, $data) {
        // Logique pour effectuer une requête POST à l'API
        // Utilisez $this->baseUrl.$endpoint pour former l'URL complète
        // Ajoutez les en-têtes nécessaires, comme l'API key
        // Retournez la réponse de l'API
    }

    // Ajoutez d'autres méthodes nécessaires pour les requêtes GET, etc.
}
