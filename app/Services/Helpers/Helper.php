<?php

namespace App\Services\Helpers;

trait Helper
{
    
    public function __get($key)
    {
        return $this->resource = ucfirst($key);
    }


    public function stripSpecialsChars($resource)
    {
        $value = preg_replace('/\D/','',$resource);
        return $value;
    }
}