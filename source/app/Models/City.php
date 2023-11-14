<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model
{
    use HasFactory;

    public function regPassports(): HasMany
    {
        return $this->hasMany(Passport::class, 'reg_city_id');
    }

    public function birthPassports(): HasMany
    {
        return $this->hasMany(Passport::class, 'birth_city_id');
    }
}
