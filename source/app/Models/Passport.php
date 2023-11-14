<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Passport extends Model
{
    use HasFactory;

    private static int $pageItemsLimit = 500;

    public function regCity(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function birthCity(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function placeIssue(): BelongsTo
    {
        return $this->belongsTo(PlaceIssue::class);
    }

    public static function getPassports(array $params): array
    {
         $passports = self::query();

         foreach($params as $param => $value) {
             $passports = match ($param) {
                 'id', 'series', 'number', 'department_code' =>
                    $passports->where($param, '>', $value),
                 'birth_city', 'reg_city', 'place_issue' =>
                    $passports->whereRelation(str_replace('_', '', $param), 'name', '>', $value),
                 'date_issue','birthday' =>
                    $passports->where($param, '>=', $value),
                 'last_name', 'first_name', 'father_name' =>
                    $passports->where($param, 'like', "$value%"),
                 'sex' =>
                    $passports->where($param, $value),
                 default => $passports,
             };
         }

        return $passports->paginate(self::$pageItemsLimit)->items();
    }
}
