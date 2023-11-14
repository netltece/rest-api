<?php

declare(strict_types=1);

namespace App\Http\Resources;

use App\Models\City;
use App\Models\PlaceIssue;
use Illuminate\Http\Resources\Json\JsonResource;

class PassportResource extends JsonResource
{
    public function toArray($request): array
    {
        $isShort = $request['is_short_representation'];

        $result = [
            'series' => $this->series,
            'number' => $this->number,
            'last_name' => $this->last_name,
            'first_name' => $this->first_name,
            'father_name' => $this->father_name,
            'reg_city' => CityResource::make($this->regCity)
        ];

        if (!$isShort) return
            ['id' => $this->id,
            'date_issue' => $this->date_issue,
            'place_issue' => PlaceIssueResource::make($this->placeIssue),
            'department_code' => $this->department_code,
            'sex' => $this->sex,
            'birtday' => $this->birthday,
            'birth_city' => CityResource::make($this->birthCity), ...$result];

        return $result;
    }
}
