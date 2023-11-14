<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\PassportRequest;
use App\Models\Passport;
use App\Http\Resources\PassportResource;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class PassportController extends Controller
{
    public function any(PassportRequest $request):  JsonResponse
    {
        $params = $request->validateAny();

        $passports = Passport::getPassports($params);

        if (count($passports)) {
            return response()->json(PassportResource::collection($passports));
        }

        return response()->json(status:Response::HTTP_NO_CONTENT);
    }
}
