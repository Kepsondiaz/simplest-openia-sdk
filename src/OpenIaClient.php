<?php

declare(strict_types=1);

namespace Kepson\SimplestOpeniaSdk;

class  OpenIaClient
{
    private $apikey ;
    public function __construct($apikey)
    {
        $this->apikey = $apikey;
    }
}