<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    // Get Purchase Page
    public function index(Request $request)
    {
        $step = $request->query('step');
        $maxSteps = 5;

        if ($step > $maxSteps) {
            $step = 1;
        }

        $hasPrev = $step > 1;
        $hasNext = $step < $maxSteps;

        return view('modules.purchase.purchase', ['step' => $step, 'hasPrev' => $hasPrev, 'hasNext' => $hasNext]);
    }
}
