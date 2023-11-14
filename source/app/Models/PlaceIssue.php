<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PlaceIssue extends Model
{
    use HasFactory;

    public function passports(): HasMany
    {
        return $this->hasMany(Passport::class);
    }
}
