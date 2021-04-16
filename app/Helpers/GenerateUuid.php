<?php

namespace App\Helpers;

use Illuminate\Support\Str;

trait GenerateUuid {

    static public function boot(){ 
        parent::boot();
        static::creating(function ($user) {
            $user->{$user->getKeyName()} = (string) Str::uuid();
        });
    
    }  
}