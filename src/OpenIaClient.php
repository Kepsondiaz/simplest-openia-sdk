<?php

declare(strict_types=1);

namespace Kepson\SimplestOpeniaSdk;
use Kepson\SimplestOpeniaSdk\Endpoints\Audio;

class  OpenIaClient
{
   public function Audio()
   {
        return new Audio($this); 
   }
}