<?php

namespace Kepson\SimplestOpeniaSdk\Endpoints;
use GuzzleHttp\Client;
use Exception;
use GuzzleHttp\Exception\BadResponseException;

class Chat 
{
    private $httpClient; 

    public function __construct()
    {
        $this->httpClient = new Client();
    }


    public function defaultCompletions(string $content, $role = "user", $model, int $frequency_penalty = 0, object $response_format)
    {
        try {

            $response = $this->httpClient->post( 'https://api.openai.com/v1/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer' . config('services.openai.api_key'),
                    'Content-Type' => 'application/json'
                ],
                'json' => [
                    'model' => $model, 
                    'messages' => [
                        "role" => $role,
                        "content" => $content
                    ],
                    "frequency_penalty" => $frequency_penalty,
                    "response_format" => $response_format
                ],
            ]);

            return $response;
        }
        catch(BadResponseException $e)
        {
            return $e;
        }
         
    }

}