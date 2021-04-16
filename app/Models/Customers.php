<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Helpers\GenerateUuid;


class Customers extends Model{
    use HasFactory, GenerateUuid;

    protected $casts = [
        'id' => 'string',
    ];
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'first_name',
        'last_name',
        'email',
        'adress',
        'city',
        'phone_number'
    ];
}