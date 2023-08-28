<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Spatie\Sheets\Facades\Sheets;

class HomePageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): View
    {
        return view("home", [
            'packages' => Sheets::collection('packages')->all()->shuffle()->take(4)
        ]);
    }
}