<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'address',
        'square',
        'realtor_id',
        'neighborhood_id',
    ];

    public function realtor()
    {
        $this->belongsTo(Realtor::class);
    }

    public function neighbourhood()
    {
        $this->belongsTo(Neighbourhood::class);
    }
}
