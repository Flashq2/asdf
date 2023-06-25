<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItmesModel extends Model
{
    protected $table='items';
    public $incrementing = false;
    protected $primaryKey = 'no';
    use HasFactory;
}
