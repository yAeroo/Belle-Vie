<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Place extends Model
{
    use HasFactory;

    protected $fillable = [
        'owner_id',
        'place_name',
        'description',
        'img',
        'availability',
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
}
