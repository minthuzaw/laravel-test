<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CaseResource;
use App\Models\CovidCase;
use Illuminate\Support\Facades\Cache;

class CaseController extends Controller
{
    public function index(): object
    {
        return CaseResource::collection(Cache::remember('cases', 60 * 60 * 24, function () {
            return CovidCase::all();
        }));
    }
}
