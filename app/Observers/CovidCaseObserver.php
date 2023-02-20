<?php

namespace App\Observers;

use App\Models\CovidCase;
use Illuminate\Support\Facades\Cache;

class CovidCaseObserver
{
    /**
     * Handle the CovidCase "created" event.
     */
    public function created(CovidCase $covidCase): void
    {
        Cache::forget('cases');
    }
}
