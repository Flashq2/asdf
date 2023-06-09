<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    protected $table='customers';
    public $incrementing = false;
    protected $primaryKey = 'no';
    use HasFactory;
}
