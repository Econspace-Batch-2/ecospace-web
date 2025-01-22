<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\Subject;
use App\Services\UploadFileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PurchaseController extends Controller
{
    protected $service;

    public function __construct()
    {
        $this->service = new UploadFileService();
    }

    public function index(Request $request)
    {
        $step = $request->query('step', 1);
        $maxSteps = 5;

        if ($step > $maxSteps) {
            $step = 1;
        }

        $purchase = $request->session()->get('purchase', new Purchase());

        $appointlets = Subject::all();

        // Map subjects
        $subjects = Subject::all();
        $appointlets = $subjects->map(function ($subject) {
            $appointlet = new \stdClass();
            $appointlet->id = $subject->id;
            $appointlet->title = $subject->title;
            $appointlet->link = $subject->appointlet_url;

            return $appointlet;
        });

        return view('modules.purchase.purchase', [
            'step' => $step,
            'purchase' => $purchase,
            'appointlets' => $appointlets
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
        try {
            $request->validate([
                'input_appointlet' => 'required|image|max:10240'
            ]);
    
            if ($request->hasFile('input_appointlet')) {
                $user = auth()->user();
                $path = $this->service->uploadToS3($request, 'input_appointlet', 'appointlet_proofs', 'appointlet_proof_' . $user->email);
    
                return response()->json(['success' => true, 'data' => ['appointlet_proof' => $path]]);
            }
    
            return response()->json(['success' => false, 'message' => 'File upload failed'], 400);
        }
        catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'An error occurred. ' . $e->getMessage() ], 500);
        }
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
            $user = auth()->user();
            $path = $this->service->uploadToS3($request, 'payment_proof', 'payment_proofs', 'payment_proof_' . $user->email);
            return response()->json(['success' => true, 'data' => ['payment_proof' => $path]]);
        }

        return response()->json(['success' => false, 'message' => 'File upload failed'], 400);
    }

    public function store(Request $request)
    {
        try {

            if (!auth()->check()) {
                return response()->json(['error' => 'User not authenticated'], 401);
            }

            // Validate the incoming request
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

            // Add the user_id manually
            if (auth()->check()) {
                $validated['user_id'] = auth()->id();
            } else {
                return response()->json(['success' => false, 'message' => 'User not authenticated'], 401);
            }

            // Create the purchase record
            Purchase::create($validated);

            return response()->json(['success' => true, 'message' => 'Purchase completed successfully']);
        } catch (\Exception $e) {
            // Log the error with more context
            Log::error('Error saving purchase:', [
                'error' => $e->getMessage(),
                'user_id' => auth()->id(),
                'request_data' => $request->all(),
            ]);

            return response()->json(['success' => false, 'message' => 'An error occurred.'], 500);
        }
    }
}
