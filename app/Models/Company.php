<?php

namespace App\Models;

use App\Services\Helpers\Helper;

class Company
{
    use Helper;
    
    public int $id;

    public int $cnumber;

    public string $csocialname;

    public string $cfantasyname;


    public function __construct()
    {
        
    }
}