<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectAdminController extends Controller
{
    /**
     * Get all subjects
     * Requires ADMIN_KEY authentication
     * 
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request) {
        $subjects = Subject::all();

        return response()->json([
            'data' => $subjects,
            'message' => 'Subjects retrieved successfully',
            'status' => 'success'
        ], 200);
    }

    /**
     * Get a subject by ID
     * Requires ADMIN_KEY authentication
     * 
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Request $request, $id) {
        $subject = Subject::find($id);

        if (!$subject) {
            return response()->json([
                'message' => 'Subject not found',
                'status' => 'error'
            ], 404);
        }

        return response()->json([
            'data' => $subject,
            'message' => 'Subject retrieved successfully',
            'status' => 'success'
        ], 200);
    }

    /**
     * Store a new subject
     * Requires ADMIN_KEY authentication
     * 
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request) {
        $validatedData = $request->validate([
            'image' => 'required|string',
            'tutor' => 'required|string',
            'title' => 'required|string',
            'majors' => 'required|string',
            'category' => 'required|string',
            'semester' => 'required|string',
            'description' => 'required|string',
            'references' => 'required|string',
            'subject_univ' => 'required|string',
            'univ' => 'required|string',
            'status' => 'required|string',
            'appointlet_url' => 'required|string'
        ]);

        $subject = Subject::create($validatedData);

        return response()->json([
            'data' => $subject,
            'message' => 'Subject created successfully',
            'status' => 'success'
        ], 201);
    }

    /**
     * Update an existing subject
     * Requires ADMIN_KEY authentication
     * 
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id) {
        $subject = Subject::find($id);

        if (!$subject) {
            return response()->json([
                'message' => 'Subject not found',
                'status' => 'error'
            ], 404);
        }

        $validatedData = $request->validate([
            'image' => 'sometimes|required|string',
            'tutor' => 'sometimes|required|string',
            'title' => 'sometimes|required|string',
            'majors' => 'sometimes|required|string',
            'category' => 'sometimes|required|string',
            'semester' => 'sometimes|required|string',
            'description' => 'sometimes|required|string',
            'references' => 'sometimes|required|string',
            'subject_univ' => 'sometimes|required|string',
            'univ' => 'sometimes|required|string',
            'status' => 'sometimes|required|string',
            'appointlet_url' => 'sometimes|required|string'
        ]);

        $subject->update($validatedData);

        return response()->json([
            'data' => $subject,
            'message' => 'Subject updated successfully',
            'status' => 'success'
        ], 200);
    }
}
