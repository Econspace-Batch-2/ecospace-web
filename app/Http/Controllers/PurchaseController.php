<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PurchaseController extends Controller
{

    public function index(Request $request)
    {
        $step = $request->query('step', 1);
        $maxSteps = 5;

        if ($step > $maxSteps) {
            $step = 1;
        }

        $purchase = $request->session()->get('purchase', new Purchase());

        return view('modules.purchase.purchase', [
            'step' => $step,
            'purchase' => $purchase
        ]);
    }
    public function storeStep1(Request $request)
    {
        $validated = $request->validate([
            'university' => 'required|string|max:255'
        ]);

        return response()->json(['success' => true, 'data' => $validated]);
    }

    public function storeStep2(Request $request)
    {
        $request->validate([
            'input_appointlet' => 'required|image|max:10240'
        ]);

        if ($request->hasFile('input_appointlet')) {
            $path = $request->file('input_appointlet')->store('appointlet_proofs', 'public');
            return response()->json(['success' => true, 'data' => ['appointlet_proof' => $path]]);
        }

        return response()->json(['success' => false, 'message' => 'File upload failed'], 400);
    }

    public function storeStep3(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'major' => 'required|string|max:255',
            'whatsapp_link' => 'required|string|max:255',
            'email' => 'required|email',
            'lecturer_name' => 'required|string|max:255',
        ], [], [], function ($validator) {
            if ($validator->fails()) {
                return response()->json(['success' => false, 'errors' => $validator->errors()], 422);
            }
        });
    }

    public function storeStep4(Request $request)
    {
        $request->validate([
            'payment_proof' => 'required|image|max:10240'
        ]);

        if ($request->hasFile('payment_proof')) {
            $path = $request->file('payment_proof')->store('payment_proofs', 'public');
            return response()->json(['success' => true, 'data' => ['payment_proof' => $path]]);
        }

        return response()->json(['success' => false, 'message' => 'File upload failed'], 400);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'university' => 'required|string|max:255',
            'appointlet_proof' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'major' => 'required|string|max:255',
            'whatsapp_link' => 'required|string|max:255',
            'email' => 'required|email',
            'lecturer_name' => 'required|string|max:255',
            'payment_proof' => 'required|string|max:255',
        ]);

        $purchase = new Purchase($validated);
        $purchase->user_id = auth()->id();
        $purchase->save();

        return response()->json(['success' => true, 'message' => 'Purchase completed successfully']);
    }
}
