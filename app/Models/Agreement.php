<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agreement extends Model
{
    use HasFactory;
    protected $table = 'agreement';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps = true;
}
