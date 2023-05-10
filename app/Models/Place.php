<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Place extends Model
{
    use HasFactory;

    protected $fillable = [
        'owner_id',
        'place_name',
        'description',
        'location',
        'price',
        'img',
        'availability',
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function review(): HasMany{
        return $this->hasMany(Review::class);
    }  

    public function request(): HasMany{
        return $this->hasMany(Request::class);
    }    
}
