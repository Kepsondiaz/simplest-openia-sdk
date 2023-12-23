<?php

namespace Kepson\SimplestOpeniaSdk\Endpoints;
use GuzzleHttp\Client;
use Exception;
use GuzzleHttp\Exception\BadResponseException;
use Kepson\SimplestOpeniaSdk\Enums\Audios\Speech\Model;
use Kepson\SimplestOpeniaSdk\Enums\Audios\Speech\Voice;
use Kepson\SimplestOpeniaSdk\Enums\Audios\Transcriptions\ResponseFormat;

class Audio {

    private $httpClient;

    public function __construct()
    {
        $this->httpClient = new Client();
    }


    public function createSpeech(Model $model, string $input, Voice $voice, float $speed = 1.0)
    {
        try {
            $response = $this->httpClient->post( 'https://api.openai.com/v1/audio/speech', [
                'headers' => [
                    'Authorization' => 'Bearer' . config('services.openai.api_key'),
                    'Content-Type' => 'application/json'
                ],
                'json' => [
                    'model' => $model, 
                    'input' => $input,
                    'voice' => $voice,
                    'speed' => $speed
                ],
            ]);
    
            return $response;
            
        } catch (BadResponseException $e) {
            return $e;
        } 
    }


    public function createTranscription(string $file_path, $model, $langage = "eng", $prompt = '', ResponseFormat $response_format = ResponseFormat::JSON, int $temperature)
    {
        try {

            $response = $this->httpClient->post( 'https://api.openai.com/v1/audio/transcriptions', [
                'headers' => [
                    'Authorization' => 'Bearer' . config('services.openai.api_key'),
                    'Content-Type' => 'multipart/form-data'
                ],
                'json' => [
                    'model' => $model, 
                    'file_path' => $file_path,
                    'langage' => $langage,
                    'prompt' => $prompt,
                    'response_format' => $response_format,
                    'temperature' => $temperature
                ],
            ]);

            return $response;
            
        } catch (BadResponseException $e) {
            return $e; 
        }
 
    }

    public function createTranslation(string $file_path, $model, $prompt = '', ResponseFormat $response_format = ResponseFormat::JSON, int $temperature)
    {
        try {

            $response = $this->httpClient->post( 'https://api.openai.com/v1/audio/translations', [
                'headers' => [
                    'Authorization' => 'Bearer' . config('services.openai.api_key'),
                    'Content-Type' => 'multipart/form-data'
                ],
                'json' => [
                    'model' => $model, 
                    'file_path' => $file_path,
                    'prompt' => $prompt,
                    'response_format' => $response_format,
                    'temperature' => $temperature
                ],
            ]);
    
            return $response;
            
        } catch (BadResponseException $e) {
            return $e; 
        }
    }
}