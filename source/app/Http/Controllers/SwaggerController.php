<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\BinaryFileResponse;

class SwaggerController extends Controller
{
    public function index(): BinaryFileResponse
    {
        return response()->file(app_path() . '/Swagger/openapi.json');
    }
}
